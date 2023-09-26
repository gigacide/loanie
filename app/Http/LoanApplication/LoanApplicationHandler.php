<?php
namespace App\Http\LoanApplication;

use App\Buyers\ZeroParallel\Response\ApiResponseInterface;
use App\Buyers\ZeroParallel\Response\JsonResponse;
use App\Buyers\ZeroParallel\ZeroParallelApi;
use App\Models\Affiliate;
use App\Models\CommissionLog;
use App\Models\LoanApplication;
use App\Services\Postback\PostbackService;
use App\Validation\LoanApplicationValidation;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoanApplicationHandler
{
    protected ZeroParallelApi $zeroParallelApi;
    protected PostbackService $postbackService;
    protected AffiliateService $affiliateService;

    public function __construct(
        ZeroParallelApi $zeroParallelApi,
        PostbackService $postbackService,
        AffiliateService $affiliateService
    ) {
        $this->zeroParallelApi = $zeroParallelApi;
        $this->postbackService = $postbackService;
        $this->affiliateService = $affiliateService;
    }

    public function process(Request $request): JsonResponse|string
    {
        try {
            $loanApplication = $this->validateLoanApplication($request);
            $loanApplication['uuid'] = $this->generateUuid();

            if ($this->tryStoreLoanApplication($request)) {
                return $this->handleValidLoanApplication($loanApplication);
            }
        } catch (\Exception $e) {
            return $this->handleException();
        } catch (GuzzleException $e) {
            return $this->handleGuzzleException($e);
        }

        // Default response in case none of the above conditions are met
        return $this->defaultErrorResponse();
    }

    public function defaultErrorResponse(): \Illuminate\Http\JsonResponse
    {
        return response()->json(['error' => 'An error occurred']);
    }


    public function tryStoreLoanApplication(Request $request, $uuid): bool
    {
        $loanApplication = $request->all();
        $loanApplication['uuid'] = $uuid;


        try {
            $this->validateLoanApplication($request);
            $this->storeLoanApplication($loanApplication);
            return true;
        } catch (ValidationException) {
            return false;
        }

    }

    public function handleValidLoanApplication(array $loanApplication, $uuid): string
    {
        $response = $this->processLoanApplication($loanApplication);

//        $response = new SoldResponse([
//            "status" => 2,
//            "status_text" => "reject",
//            "redirect_url" => "https:\/\/leads.system.com\/redirect?id=81649f87d4e596a711d449970392ed67",
//            "price" => 9.00
//             ]
//        );

        if ($response instanceof JsonResponse) {
            return $this->handleJsonResponse($response);
        } else {
            return $this->handleNonJsonResponse($response, $uuid);
        }
    }

    private function handleNonJsonResponse($response, $uuid): string
    {
        $loanApp = $this->findLoanApplicationByUuid($uuid);

        $this->updateLoanApplication($loanApp, $response);
        $loanApp = $this->findLoanApplicationByUuid($uuid);
        CommissionLog::store($loanApp);
        $affiliate = $this->getAffiliate($loanApp);

        if ($loanApp->offer_id === 1) {
            $this->handleRevShare($loanApp, $response);
        } else {
            $this->handleCpl($affiliate, $loanApp, $response);
        }

        return $response->toJson();
    }

    /**
     * @throws GuzzleException
     */
    private function processLoanApplication(array $loanApplication): ApiResponseInterface
    {
        return $this->zeroParallelApi->sendLoanApplication($loanApplication);
    }

    private function handleJsonResponse(JsonResponse $response): string
    {
        return $response->toJson();
    }

    public function handleException(): string
    {
        return response()->json([
            'error' => 'An error occurred'
        ], 500);
    }

    public function handleGuzzleException(GuzzleException $e): string
    {
        return response()->json([
            'error' => 'Guzzle Exception: ' . $e->getMessage()
        ], 500);
    }

    /**
     * @throws ValidationException
     */
    public function validateLoanApplication(Request $request): array
    {
        return LoanApplicationValidation::validate($request->all());
    }

    private function storeLoanApplication(array $loanApplication): string
    {
        return (new LoanApplication)->store($loanApplication);
    }

    private function updateLoanApplication(LoanApplication $loanApplication, ApiResponseInterface $response): bool
    {
        $updateData = $this->prepareUpdateData($response);
        return $this->updateLoanApplicationData($loanApplication, $updateData);
    }

    private function prepareUpdateData($response): array
    {
        $status = $response->getStatus();
        $redirectUrl = $response->getRedirect();
        $buyerLeadPrice = $response->getPrice();
        $affiliateLeadPrice = $response->getAffiliatePrice();

        return [
            'leadStatus' => $status,
            'affiliate_lead_price' => $affiliateLeadPrice,
            'buyer_lead_price' => $buyerLeadPrice,
            'buyer_id' => 1,
            'redirectUrl' => $redirectUrl,
            'isRedirected' => 1,
        ];
    }

    private function findLoanApplicationByUuid(string $uuid): LoanApplication
    {
        return LoanApplication::where('uuid', $uuid)->first();
    }

    private function updateLoanApplicationData(LoanApplication $loanApplication, array $updateData): bool
    {
        $loanApplicationId = $loanApplication['id'];
        try {
            $loanApplication = LoanApplication::find($loanApplicationId);

            if ($loanApplication) {
                $loanApplication->fill($updateData);
                $loanApplication->save();

                // Update was successful
                return true;
            } else {
                // Loan application not found
                return false;

            }
        } catch (\Exception $e) {
            // An exception occurred during the update
            Log::debug('updateLoanApplicationData() called', (array)$e);
            return false;
        }
    }

    private function getAffiliate(LoanApplication $loanApplication): Affiliate
    {
        return $this->affiliateService->getAffiliateByLoanApplication($loanApplication);
    }

    private function handleRevShare($loanApplication, $response): void
    {
        $this->postbackService->sendPostback($loanApplication, $response);
    }

    private function handleCpl(Affiliate $affiliate, LoanApplication $loanApplication, $response): void
    {
        if ($response) {
            $this->accumulateEarningsForAffiliate($affiliate, $loanApplication->affiliate_lead_price);

            if ($this->isThresholdMet($affiliate)) {
                if ($this->accumulateEarningsForAffiliateAfterThreshold($affiliate)) {
                    $this->postbackService->sendPostback($loanApplication, $response);
                }
            }
        }
    }


    private function accumulateEarningsForAffiliate(Affiliate $affiliate, float $price): bool
    {
        $currentEarnings = $affiliate->cpl_earnings ?? 0.0;
        $newEarnings = $currentEarnings + $price;

        $affiliate->cpl_earnings = $newEarnings;

        if ($affiliate->save()) {
            return true;
        }

        return false;
    }


    private function accumulateEarningsForAffiliateAfterThreshold(Affiliate $affiliate): bool
    {
        $currentEarnings = $affiliate->cpl_earnings;
        $newEarnings = $currentEarnings - 24.00;

        $affiliate->cpl_earnings = $newEarnings;

        // Save the updated affiliate object and check if save was successful
        return $affiliate->save();
    }



    private function isThresholdMet(Affiliate $affiliate): bool
    {
        return $affiliate->cpl_earnings >= 24.00;

    }

    public function generateUuid(): string
    {
        return Str::uuid();
    }
}

