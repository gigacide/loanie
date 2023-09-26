<?php

namespace App\Buyers\ZeroParallel\Mapper;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ResidenceMapper
{
    public function map(array $residenceData): array
    {
        try {
            return [
                'address' => $this->validateAddress($residenceData['addressStreet1']),
                'city' => $this->validateCity($residenceData['city']),
                'state' => $this->validateState($residenceData['state']),
                'zip' => $this->validateZip($residenceData['zip']),
                'ownHome' => $this->mapResidentialStatus($residenceData['residentialStatus']),
                'addressLengthMonths' => $this->validateAddressLengthMonths($residenceData['monthsAtAddress']),
            ];
        } catch (ValidationException $e) {
            // Handle validation errors
            $errors = $e->validator->getMessageBag()->toArray();
            return ['validation_errors' => $errors];
        }
    }

    /**
     * @throws ValidationException
     */
    private function validateAddress($address)
    {
        return Validator::make(['address' => $address], [
            'address' => 'string|min:1|max:256',
        ])->validate()['address'];
    }

    /**
     * @throws ValidationException
     */
    private function validateCity($city)
    {
        return Validator::make(['city' => $city], [
            'city' => 'string|min:1|max:256',
        ])->validate()['city'];
    }

    /**
     * @throws ValidationException
     */
    private function validateState($state)
    {
        return Validator::make(['state' => $state], [
            'state' => 'string|min:2|max:2',
        ])->validate()['state'];
    }

    /**
     * @throws ValidationException
     */
    private function validateZip($zip)
    {
        return Validator::make(['zip' => $zip], [
            'zip' => 'string|size:5',
        ])->validate()['zip'];
    }

    private function mapResidentialStatus(string $residentialStatus): string
    {
        // Mapping logic for residential status
        $mapping = [
            '1' => 'YES', // Map '1' to 'YES'
            '2' => 'NO',  // Map '2' to 'NO'
        ];

        return $mapping[$residentialStatus] ?? 'NO'; // Default to 'NO' if not found in the mapping
    }

    /**
     * @throws ValidationException
     */
    private function validateAddressLengthMonths($addressLengthMonths)
    {
        return Validator::make(['addressLengthMonths' => $addressLengthMonths], [
            'addressLengthMonths' => 'numeric|min:1|max:10000',
        ])->validate()['addressLengthMonths'];
    }
}
