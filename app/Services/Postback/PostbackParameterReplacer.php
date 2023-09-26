<?php

namespace App\Services\Postback;

use App\Models\LoanApplication;

class PostbackParameterReplacer
{
    public function replace(string $postbackUrl, LoanApplication $loanApplication, $clientResponse): string
    {
        $replacements = [
            '{aff_sub}',
            '{aff_sub2}',
            '{aff_sub3}',
            '{aff_sub4}',
            '{aff_sub5}',
            '{transaction_id}',
            '{amount}',
        ];

        $values = [
            $loanApplication->aff_sub ?? '',
            $loanApplication->aff_sub2 ?? '',
            $loanApplication->aff_sub3 ?? '',
            $loanApplication->aff_sub4 ?? '',
            $loanApplication->aff_sub5 ?? '',
            $loanApplication->transaction_id ?? '',
            $this->getAmountBasedOnOffer($loanApplication->offer_id, $clientResponse) ?? '',
        ];

        return str_replace($replacements, $values, $postbackUrl);
    }

    private function getAmountBasedOnOffer(int $offerId, $clientResponse): float
    {
        if ($offerId === 1) {
            // If offer_id is 1, return the affiliate_price from the client response
            return $clientResponse->getAffiliatePrice() ?? 0.0;
        } else {
            // If offer_id is not 1, return the static price of 24.00
            return 24.00;
        }
    }
}
