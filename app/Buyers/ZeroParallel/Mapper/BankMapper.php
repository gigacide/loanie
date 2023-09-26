<?php

namespace App\Buyers\Mapper;

class BankMapper
{
    public function map(array $data): array
    {
        return [
            'bankAba' => $data['bankRoutingNumber'],
            'bankName' => $data['bankName'],
            'bankPhone' => $data['bankPhone'],
            'bankAccountNumber' => $data['bankAccountNumber'],
            'bankAccountType' => $this->mapAccountType($data['bankAccountType']),
            'bankAccountLengthMonths' => $data['monthsAtBank'],
            'directDeposit' => $this->mapDirectDeposit($data['directDeposit']),
        ];
    }

    private function mapAccountType(string $accountType): string
    {
        // Mapping logic for account type
    }

    private function mapDirectDeposit(string $directDeposit): string
    {
        // Mapping logic for direct deposit
    }
}
