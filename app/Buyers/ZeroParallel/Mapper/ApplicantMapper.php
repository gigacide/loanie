<?php

namespace App\Buyers\ZeroParallel\Mapper;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ApplicantMapper
{
    public function map(array $applicantData): array
    {
        try {
            return [
                'ssn' => $this->validateSsn($applicantData['ssn']),
                'driversLicenseNumber' => $this->validateDriversLicenseNumber($applicantData['drivingLicenseNumber']),
                'driversLicenseState' => $this->validateDriversLicenseState($applicantData['drivingLicenseState']),
                'firstName' => $this->validateFirstName($applicantData['firstName']),
                'lastName' => $this->validateLastName($applicantData['lastName']),
                'dob' => $this->validateDateOfBirth($applicantData['dateOfBirthYear'], $applicantData['dateOfBirthMonth'], $applicantData['dateOfBirthDay']),
                'cellPhone' => $this->validateCellPhoneNumber($applicantData['cellPhoneNumber']),
                'email' => $this->validateEmail($applicantData['email']),
                'homePhone' => $this->validateHomePhoneNumber($applicantData['homePhoneNumber']),
                'activeMilitary' => $this->mapActiveMilitary($applicantData['inMilitary']),
            ];
        } catch (ValidationException $e) {
            // Validation failed, return validation errors as JSON
            return [
                'error' => $e->getMessage(),
                'validation_errors' => $e->errors(),
            ];
        }
    }

    /**
     * @throws ValidationException
     */
    private function validateSsn($ssn)
    {
        return Validator::make(['ssn' => $ssn], [
            'ssn' => 'required|string|size:9',
        ])->validate()['ssn'];
    }

    /**
     * @throws ValidationException
     */
    private function validateDriversLicenseNumber($licenseNumber)
    {
        return Validator::make(['driversLicenseNumber' => $licenseNumber], [
            'driversLicenseNumber' => 'required|string|min:2|max:25',
        ])->validate()['driversLicenseNumber'];
    }

    /**
     * @throws ValidationException
     */
    private function validateDriversLicenseState($licenseState)
    {
        return Validator::make(['driversLicenseState' => $licenseState], [
            'driversLicenseState' => 'required|string|size:2',
        ])->validate()['driversLicenseState'];
    }

    /**
     * @throws ValidationException
     */
    private function validateFirstName($firstName)
    {
        return Validator::make(['firstName' => $firstName], [
            'firstName' => 'required|string|min:1|max:64',
        ])->validate()['firstName'];
    }

    /**
     * @throws ValidationException
     */
    private function validateLastName($lastName)
    {
        return Validator::make(['lastName' => $lastName], [
            'lastName' => 'required|string|min:1|max:64',
        ])->validate()['lastName'];
    }

    /**
     * @throws ValidationException
     */
    private function validateDateOfBirth($year, $month, $day)
    {
        $dateOfBirth = "$year-$month-$day";
        return Validator::make(['dob' => $dateOfBirth], [
            'dob' => 'required|date_format:Y-m-d',
        ])->validate()['dob'];
    }

    /**
     * @throws ValidationException
     */
    private function validateCellPhoneNumber($cellPhoneNumber)
    {
        return Validator::make(['cellPhoneNumber' => $cellPhoneNumber], [
            'cellPhoneNumber' => 'required|string|min:10|max:11',
        ])->validate()['cellPhoneNumber'];
    }

    /**
     * @throws ValidationException
     */
    private function validateEmail($email)
    {
        return Validator::make(['email' => $email], [
            'email' => 'required|string|email|min:5|max:100',
        ])->validate()['email'];
    }

    /**
     * @throws ValidationException
     */
    private function validateHomePhoneNumber($homePhoneNumber)
    {
        return Validator::make(['homePhoneNumber' => $homePhoneNumber], [
            'homePhoneNumber' => 'required|string|min:10|max:11',
        ])->validate()['homePhoneNumber'];
    }

    private function mapActiveMilitary(int $inMilitary): string
    {
        // Mapping logic for active military
        $mapping = [
            1 => 'YES',
            2 => 'NO',
            3 => 'NO',
        ];

        return $mapping[$inMilitary] ?? 'NO'; // Default to 'NO' if not found in the mapping
    }
}
