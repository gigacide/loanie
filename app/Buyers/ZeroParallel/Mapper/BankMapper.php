<?php

namespace App\Buyers\ZeroParallel\Mapper;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class BankMapper
{
    public function map(array $bankData): array
    {
        try {
            return [
                'bankAccountType' => $this->mapAccountType($bankData['bankAccountType']),
                'bankAba' => $this->validateBankRoutingNumber($bankData['bankRoutingNumber']),
                'bankName' => $this->validateBankName($bankData['bankName']),
//                'bankPhone' => $this->validateBankPhone($bankData['bankPhone']),
                'bankAccountNumber' => $this->validateBankAccountNumber($bankData['bankAccountNumber']),
                'bankAccountLengthMonths' => $this->validateBankAccountLengthMonths($bankData['monthsAtBank']),
                'directDeposit' => $this->mapDirectDeposit($bankData['directDeposit']),
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
    private function validateBankRoutingNumber($bankRoutingNumber)
    {
        return Validator::make(['bankAba' => $bankRoutingNumber], [
            'bankAba' => 'string|min:5|max:15',
        ])->validate()['bankAba'];
    }

    /**
     * @throws ValidationException
     */
    private function validateBankName($bankName)
    {
        return Validator::make(['bankName' => $bankName], [
            'bankName' => 'string',
        ])->validate()['bankName'];
    }

    /**
     * @throws ValidationException
     */
    private function validateBankPhone($bankPhone)
    {
        return Validator::make(['bankPhone' => $bankPhone], [
            'bankPhone' => 'string|min:1|max:15',
        ])->validate()['bankPhone'];
    }

    /**
     * @throws ValidationException
     */
    private function validateBankAccountNumber($bankAccountNumber)
    {
        return Validator::make(['bankAccountNumber' => $bankAccountNumber], [
            'bankAccountNumber' => 'string|min:4|max:25',
        ])->validate()['bankAccountNumber'];
    }

    private function mapAccountType(string $accountType): string
    {
        // Mapping logic for account type
        $mapping = [
            '1' => 'CHECKING',
            '2' => 'SAVING',
        ];

        return $mapping[$accountType] ?? 'CHECKING'; // Default to 'CHECKING' if not found in the mapping
    }

    /**
     * @throws ValidationException
     */
    private function validateBankAccountLengthMonths($monthsAtBank)
    {
        return Validator::make(['bankAccountLengthMonths' => $monthsAtBank], [
            'bankAccountLengthMonths' => 'numeric|min:1|max:10000',
        ])->validate()['bankAccountLengthMonths'];
    }

    private function mapDirectDeposit(string $directDeposit): string
    {
        // Mapping logic for direct deposit
        $mapping = [
            1 => 'YES',
            2 => 'NO',
        ];

        return $mapping[$directDeposit] ?? 'NO'; // Default to 'NO' if not found in the mapping
    }
}
