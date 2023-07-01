<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'nameTitle',
        'firstName',
        'lastName',
        'dateOfBirthDay',
        'dateOfBirthMonth',
        'dateOfBirthYear',
        'ssn',
        'email',
        'homePhoneNumber',
        'cellPhoneNumber',
        'workPhoneNumber',
        'maritalStatus',
        'dependants',
        'inMilitary',
        'drivingLicenseState',
        'drivingLicenseNumber',
        'creditType',
        'callTime',
    ];

}
