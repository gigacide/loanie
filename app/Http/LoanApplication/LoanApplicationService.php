<?php

namespace App\Http\LoanApplication;

use App\Buyers\ZeroParallel\Response\ApiResponseInterface;
use App\Models\LoanApplication;

class LoanApplicationService
{
    public function update(LoanApplication $loanApplication, ApiResponseInterface $response): void
    {
        $updateData = $this->prepareUpdateData($response);
        $this->updateLoanApplicationData($loanApplication, $updateData);
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
            'buyer_id' => 'ZP',
            'redirectUrl' => $redirectUrl,
            'isRedirected' => 1,
        ];
    }

    private function updateLoanApplicationData(LoanApplication $loanApplication, array $updateData): void
    {
        $loanApplication->update($updateData);
    }

}
