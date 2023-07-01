<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    use HasFactory;

    protected $fillable = [
        'houseNumber',
        'houseName',
        'residentialStatus',
        'addressStreet1',
        'city',
        'state',
        'zip',
        'monthsAtAddress',
    ];

}
