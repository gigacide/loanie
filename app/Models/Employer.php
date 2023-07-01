<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = [
        'employerName',
        'employmentStatus',
        'jobTitle',
        'monthlyIncome',
        'incomeCycle',
        'incomeSource',
        'incomePaymentType',
        'monthsAtEmployer',
        'nextPayDateDay',
        'nextPayDateMonth',
        'nextPayDateYear',
        'followingPayDateDay',
        'followingPayDateMonth',
        'followingPayDateYear',
    ];


}
