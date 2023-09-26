<?php

namespace App\Http\LoanApplication;

use App\Models\Affiliate;
use App\Models\LoanApplication;

class AffiliateService
{
    public function getAffiliateByLoanApplication(LoanApplication $loanApplication): Affiliate
    {
        $aff = Affiliate::where('affiliate_id', $loanApplication->affiliate_id)->first();

        if ($aff === null) {
            $aff = Affiliate::where('affiliate_id', 'YDLr')->first();
        }

        return $aff;
    }
}

