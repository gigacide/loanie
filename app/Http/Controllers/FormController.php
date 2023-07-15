<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use App\Models\Click;
use App\Models\CommissionLog;
use App\Models\Lead;
use App\Models\LoanApplication;
use App\Models\Offer;
use App\Services\LoanApplicationService;
use App\Services\PostbackService;
use App\Validation\LoanApplicationValidation;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class FormController extends Controller
{

    protected LoanApplicationService $loanApplicationService;
    protected PostbackService $postbackService;
    public function __construct(LoanApplicationService $loanApplicationService, PostbackService $postbackService)
    {
        $this->loanApplicationService = $loanApplicationService;
        $this->postbackService = $postbackService;

    }
    /**
     * @throws GuzzleException
     */
    public function process(Request $request): JsonResponse
    {

        try {
            $validApplication = LoanApplicationValidation::validate($request->all());

            // Create LoanApplication instance
            $uuid = Str::uuid();
            (string)$validApplication['uuid'] = $uuid;

            // Send the loan application data to the third-party provider
            $apiResponse = $this->loanApplicationService->sendLoanApplication($validApplication);


            // Process the response and return a JSON response
            return response()->json($apiResponse);

        } catch (ValidationException $e) {

            // Validation failed
            $errors = $e->validator->errors()->all();

            // Return a JSON response with the validation errors
            return response()->json([
                'errors' => $errors
            ], 422);
        }
    }

    public function getIpAddress()
    {
        return request()->ip();
    }



    private function accumulateEarningsForAffiliate(Affiliate $affiliate, float $price): Affiliate
    {

        // Get the current accumulated earnings of the affiliate
        $currentEarnings = $affiliate->cpl_earnings ?? 0.0;

        // Add the price to the accumulated earnings
        $newEarnings = $currentEarnings + $price;

        // Update the affiliate's earnings in the database
        $affiliate->cpl_earnings = $newEarnings;
        $affiliate->save();

        return $affiliate;
    }

    /**
     * Apply a discount to the loan application response.
     *
     * @param array $clientResponse
     * @return float
     */
    private function applyProfit(array $clientResponse): float
    {

        // Calculate 10% of the price from the loan application response
        // 10% discount
        return $clientResponse['Price'] * 0.9;
    }

    private function isCPLOffer(Offer $offer): bool
    {
        return $offer->id === 2; // Assuming offer ID 2 represents a CPL offer
    }

    private function accumulateEarningsForAffiliateAfterThreshold(Affiliate $affiliate): Affiliate
    {

        // Get the current accumulated earnings of the affiliate
        $currentEarnings = $affiliate->cpl_earnings;

        // Add the price to the accumulated earnings
        $newEarnings = $currentEarnings - 24.00;

        // Update the affiliate's earnings in the database
        $affiliate->cpl_earnings = $newEarnings;
        $affiliate->save();

        return $affiliate;
    }


}