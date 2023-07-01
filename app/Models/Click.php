<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    protected $fillable = ['affiliate_id', 'offer_id', 'aff_sub', 'aff_sub2', 'aff_sub3', 'aff_sub4', 'aff_sub5', 'transaction_id'];

}
