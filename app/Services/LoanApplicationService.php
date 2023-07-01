<?php

namespace App\Services;

use App\Models\LoanApplication;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class LoanApplicationService
{
    protected Client $client;
    protected ItMediaApiService $itMediaApiService;

    public function __construct(ItMediaApiService $itMediaApiService)
    {
        $this->itMediaApiService = $itMediaApiService;
    }

    /**
     * @throws GuzzleException
     */
    public function sendLoanApplication(array $data): CustomResponse|SoldResponse|\RejectedWithPriceRejectResponse|ErrorResponse|RejectedResponse
    {
        $mappedData = $this->mapData($data);

        return $this->itMediaApiService->sendLoanApplication($mappedData);
    }

    public function mapData(array $requestData): array
    {
        $mappedData = [];


        $mappedData['incomeSource'] = $this->mappedIncomeSource($requestData['employer']['incomeSource']);
        $mappedData['LoanReason'] = $this->mappedLoanReason($requestData['loan']['loanPurpose']);
        $mappedData['creditType'] = $this->mappedCreditType($requestData['applicant']['creditType']);
        $mappedData['armedForces'] = $this->mappedArmedForces($requestData['applicant']['inMilitary']);
        $mappedData['CallTime'] = $this->mappedCallTime($requestData['applicant']['callTime']);
        $mappedData['nextPayday'] = date("d-m-Y", strtotime($requestData['employer']['nextPayDateYear'] . '-' . $requestData['employer']['nextPayDateMonth'] . '-' . $requestData['employer']['nextPayDateDay']));
        $mappedData['secondPayday'] = date("d-m-Y", strtotime($requestData['employer']['followingPayDateYear'] . '-' . $requestData['employer']['followingPayDateMonth'] . '-' . $requestData['employer']['followingPayDateDay']));


        return [

            'username' => 'Amikaro_ToptoBottom',
            'apikey' => 'f4aa37b1e259134058ce85f20ea8d356c97da52c',
            'campaignId' => 'uping',
            'ip_address' => $requestData['source']['ipAddress'],
            'agent' => $requestData['source']['userAgent'],
            'min_price' => '0',
            'amount' => $requestData['loan']['loanAmount'],
            'fName' => $requestData['applicant']['firstName'],
            'lName' => $requestData['applicant']['lastName'],
            'zip' => $requestData['residence']['zip'],
            'city' => $requestData['residence']['city'],
            'state' => $requestData['residence']['state'],
            'address' => $requestData['residence']['addressStreet1'],
            'lengthAtAddress' => $requestData['residence']['monthsAtAddress'],
            'licenseState' => $requestData['applicant']['drivingLicenseState'],
            'email' => $requestData['applicant']['email'],
            'license' => $requestData['applicant']['drivingLicenseNumber'],
            'rentOwn' => $requestData['residence']['residentialStatus'] == '1' ? 'own' : 'rent',
            'phone' => $requestData['applicant']['homePhoneNumber'],
            'workPhone' => $requestData['applicant']['workPhoneNumber'],
            'employerPhone' => $requestData['applicant']['workPhoneNumber'],
            'callTime' =>  $mappedData['CallTime'],
            'bMonth' => $requestData['applicant']['dateOfBirthMonth'],
            'bDay' => $requestData['applicant']['dateOfBirthDay'],
            'bYear' => $requestData['applicant']['dateOfBirthYear'],
            'ssn' => $requestData['applicant']['ssn'],
            'armedForces' => $mappedData['armedForces'],
            'incomeSource' => $mappedData['incomeSource'],
            'employerName' => $requestData['employer']['employerName'],
            'timeEmployed' => $requestData['employer']['monthsAtEmployer'],
            'jobTitle' => $requestData['employer']['jobTitle'],
            'paidEvery' => $requestData['employer']['incomeCycle'] == '1' ? 'biweekly' : 'monthly',
            'nextPayday' => $mappedData['nextPayday'],
            'secondPayday' => $mappedData['secondPayday'],
            'abaNumber' => $requestData['bank']['bankRoutingNumber'],
            'accountNumber' => $requestData['bank']['bankAccountNumber'],
            'accountType' => $requestData['bank']['bankAccountType'] == '1' ? 'checking' : 'savings',
            'bankName' => $requestData['bank']['bankName'],
//            'bankPhone' => $requestData['bank']['bankPhone'],
            'monthsBank' => $requestData['bank']['monthsAtBank'],
            'directDeposit' => $requestData['bank']['directDeposit'],
            'monthlyNetIncome' => $requestData['employer']['monthlyIncome'],
            'note' => '123',
            'websiteName' => 'www.loanie-loans.com',
            'timeout' => '240',
            'lead_type' => 'installment',
            'loan_reason' => $mappedData['LoanReason'],
            'credit_type' => $mappedData['creditType']
        ];
    }

    public function handleLoanApplicationResponse($response): array|string
    {
        $status = $response->getStatus();

        if ($status === 'Sold') {
            $status = $response->getStatus();
            $leadId = $response->getLeadID();
            $price = $response->getPrice() ?? '0.00';
            $redirectUrl = $response->getRedirect() ?? '';
            return [
                'Status' => $status,
                'Price' => $price,
                'LeadId' => $leadId,
                'Redirect' => $redirectUrl,
            ];
        } elseif ($status === 'Rejected') {
            $status = $response->getStatus();
            $leadId = $response->getLeadID();
            $price = $response->getPrice() ?? '0.00';
            $priceRejectAmount = $response->PriceRejectAmount ?? '';
            if ($priceRejectAmount) {
                return [
                    'Status' => $status,
                    'Price' => $price,
                    'LeadId' => $leadId,
                    'PriceRejectAmount' => $priceRejectAmount,
                ];
            } else {
                $status = $response->getStatus();
                $leadId = $response->getLeadID();
                return [
                    'Status' => $status,
                    'LeadId' => $leadId,
                ];
            }
        } else {
            $messages = $response->getMessages();
            return [
                'Messages' => $messages,
            ];
        }
    }


    private function mappedIncomeSource($incomeSource): string
    {
        $incomeSourceMapping = [
            1 => 'employment',
            2 => 'selfemployment',
            3 => 'benefits',
            4 => 'unemployed',
            // Add more mappings as needed
        ];

        $mappedIncomeSource = '';

        switch ($incomeSource) {
            case 1:
                $mappedIncomeSource = $incomeSourceMapping[1];
                break;
            case 2:
                $mappedIncomeSource = $incomeSourceMapping[2];
                break;
            case 3:
                $mappedIncomeSource = $incomeSourceMapping[3];
                break;
            case 4:
                $mappedIncomeSource = $incomeSourceMapping[4];
                break;
            // Add more cases as needed
        }

        return $mappedIncomeSource;
    }

    private function mappedLoanReason($loanReason): string
    {
        $loanReasonMapping = [
            1 => 'debtConsolidation',
            2 => 'emergencySituation',
            3 => 'autoRepair',
            4 => 'autoPurchase',
            5 => 'moving',
            6 => 'homeImprovement',
            7 => 'medical',
            8 => 'business',
            9 => 'vacation',
            10 => 'taxes',
            11 => 'rentOrMortgage',
            12 => 'wedding',
            13 => 'majorPurchase',
            14 => 'other',
            // Add more mappings as needed
        ];

        $mappedLoanReason = '';

        switch ($loanReason) {
            case 1:
                $mappedLoanReason = $loanReasonMapping[1];
                break;
            case 2:
                $mappedLoanReason = $loanReasonMapping[2];
                break;
            case 3:
                $mappedLoanReason = $loanReasonMapping[3];
                break;
            case 4:
                $mappedLoanReason = $loanReasonMapping[4];
                break;
            case 5:
                $mappedLoanReason = $loanReasonMapping[5];
                break;
            case 6:
                $mappedLoanReason = $loanReasonMapping[6];
                break;
            case 7:
                $mappedLoanReason = $loanReasonMapping[7];
                break;
            case 8:
                $mappedLoanReason = $loanReasonMapping[8];
                break;
            case 9:
                $mappedLoanReason = $loanReasonMapping[9];
                break;
            case 10:
                $mappedLoanReason = $loanReasonMapping[10];
                break;
            case 11:
                $mappedLoanReason = $loanReasonMapping[11];
                break;
            case 12:
                $mappedLoanReason = $loanReasonMapping[12];
                break;
            case 13:
                $mappedLoanReason = $loanReasonMapping[13];
                break;
            case 14:
                $mappedLoanReason = $loanReasonMapping[14];
                break;


            // Add more cases as needed
        }

        return $mappedLoanReason;
    }

    private function mappedCreditType($creditType): string
    {
        $creditTypeMapping = [
            1 => 'excellent',
            2 => 'good',
            3 => 'fair',
            4 => 'poor',
            5 => 'notSure',
            // Add more mappings as needed
        ];

        $mappedCreditType = '';

        switch ($creditType) {
            case 1:
                $mappedCreditType = $creditTypeMapping[1];
                break;
            case 2:
                $mappedCreditType = $creditTypeMapping[2];
                break;
            case 3:
                $mappedCreditType = $creditTypeMapping[3];
                break;
            case 4:
                $mappedCreditType = $creditTypeMapping[4];
                break;
            case 5:
                $mappedCreditType = $creditTypeMapping[5];
                break;
            // Add more cases as needed
        }

        return $mappedCreditType;
    }

    private function mappedArmedForces($armedForces): string
    {
        $armedForcesMapping = [
            1 => 'yes',
            2 => 'no',
            3 => 'no',
            4 => 'no',
            // Add more mappings as needed
        ];

        $mappedArmedForces = '';

        switch ($armedForces) {
            case 1:
                $mappedArmedForces = $armedForcesMapping[1];
                break;
            case 2:
                $mappedArmedForces = $armedForcesMapping[2];
                break;
            case 3:
                $mappedArmedForces = $armedForcesMapping[3];
                break;
            case 4:
                $mappedArmedForces = $armedForcesMapping[4];
                break;
            // Add more cases as needed
        }

        return $mappedArmedForces;
    }
    private function mappedCallTime($CallTime): string
    {
        $CallTimeMapping = [
            1 => 'anytime',
            2 => 'morning',
            3 => 'afternoon',
            4 => 'evening',
            // Add more mappings as needed
        ];

        $mappedCallTime = '';

        switch ($CallTime) {
            case 1:
                $mappedCallTime = $CallTimeMapping[1];
                break;
            case 2:
                $mappedCallTime = $CallTimeMapping[2];
                break;
            case 3:
                $mappedCallTime = $CallTimeMapping[3];
                break;
            case 4:
                $mappedCallTime = $CallTimeMapping[4];
                break;
            // Add more cases as needed
        }

        return $mappedCallTime;
    }

    public function updateLoanApplication($loanApplication, $buyerLeadPrice, $loanApplicationResponse)
    {
        $app = LoanApplication::where('uuid', $loanApplication['uuid'])->first();

        $leadStatus = $this->getLeadStatus($loanApplicationResponse['Status']);

        $updateData = [
            'leadStatus' => $leadStatus,
            'affiliate_lead_price' => $loanApplicationResponse['Price'],
            'buyer_lead_price' => $buyerLeadPrice,
            'buyer_id' => 'ITM',
            'redirectUrl' => $loanApplicationResponse['Redirect'],
            'isRedirected' => 1,
        ];

        $app->update($updateData);
    }

    private function getLeadStatus($responseStatus): int
    {
        // Apply any necessary logic or validation for determining the lead status
        // Example:
        if ($responseStatus == 'Sold') {
            return 1;
        } else {
            return 0;
        }
    }


}
