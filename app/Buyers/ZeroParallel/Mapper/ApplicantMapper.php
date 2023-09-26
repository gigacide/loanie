<?php

namespace App\Buyers\Mapper;

use App\Buyers\Utils\DateUtils;

class ApplicantMapper implements MapperInterface
{
    public function map(array $data): array
    {
        return [
            'ssn' => $data['ssn'],
            'driversLicenseNumber' => $data['drivingLicenseNumber'],
            'driversLicenseState' => $data['drivingLicenseState'],
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'dob' => DateUtils::formatDate($data['dateOfBirthYear'], $data['dateOfBirthMonth'], $data['dateOfBirthDay']),
            'cellPhone' => $data['cellPhoneNumber'],
            'email' => $data['email'],
            'homePhone' => $data['homePhoneNumber'],
        ];
    }
}
