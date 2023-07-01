<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommissionLog extends Model
{

    protected $table ='commission_logs';

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

    public static function store(Affiliate $affiliate, int $offerId, float $price): CommissionLog
    {

        return self::create([
            'affiliate_id' => $affiliate->id,
            'offer_id' => $offerId,
            'sub_id' => $affiliate->sub_id,
            'aff_sub' => $affiliate->aff_sub,
            'aff_sub2' => $affiliate->aff_sub2,
            'aff_sub3' => $affiliate->aff_sub3,
            'aff_sub4' => $affiliate->aff_sub4,
            'aff_sub5' => $affiliate->aff_sub5,
            'postback_url' => $affiliate->postback_url,
            'cpl_earnings' => $affiliate->cpl_earnings,
        ]);
    }
}
