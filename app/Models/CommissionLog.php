<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommissionLog extends Model
{
    protected $table = 'commission_logs';

    protected $fillable = [
        'affiliate_id',
        'offer_id',
        'sub_id',
        'aff_sub',
        'aff_sub2',
        'aff_sub3',
        'aff_sub4',
        'aff_sub5',
        'postback_url',
        'cpl_earnings',
    ];

    public static function store(LoanApplication $loanApp): CommissionLog
    {
        $affiliate = Affiliate::where('affiliate_id', $loanApp->affiliate_id)->firstOrFail();

        return self::create([
            'name' => self::checkOffer($loanApp->offer_id),
            'affiliate_id' => $affiliate->id,
            'offer_id' => $loanApp->offer_id,
            'sub_id' => $loanApp->sub_id,
            'aff_sub' => $loanApp->aff_sub,
            'aff_sub2' => $loanApp->aff_sub2,
            'aff_sub3' => $loanApp->aff_sub3,
            'aff_sub4' => $loanApp->aff_sub4,
            'aff_sub5' => $loanApp->aff_sub5,
            'postback_url' => $affiliate->postback_url,
            'cpl_earnings' => $loanApp->affiliate_lead_price,
        ]);
    }

    private static function checkOffer(int $offerId): string
    {
        return ($offerId === 1) ? 'Rev' : 'CPL';
    }
}
