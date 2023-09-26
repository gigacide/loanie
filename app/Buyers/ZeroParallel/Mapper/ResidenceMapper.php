<?php

namespace App\Buyers\Mapper;

class ResidenceMapper
{
    public function map(array $residenceData): array
    {
        return [
            'address' => $residenceData['addressStreet1'],
            'city' => $residenceData['city'],
            'state' => $residenceData['state'],
            'zip' => $residenceData['zip'],
            'ownHome' => $this->mapResidentialStatus($residenceData['residentialStatus']),
            'addressLengthMonths' => $residenceData['monthsAtAddress'],
            'rentOrMortgagePayment' => $residenceData['monthlyMortgageRent'],
        ];
    }

    private function mapResidentialStatus(string $residentialStatus): string
    {
        // Mapping logic for residential status
    }
}
