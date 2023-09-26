<?php

namespace App\Buyers\ZeroParallel\Mapper;

use Illuminate\Support\Facades\Validator;

class LoanMapper
{
    public function map(array $loanData): array
    {
        try {
            return [
                'loanAmount' => $this->validateLoanAmount($loanData['loanAmount']),
                'loanTerms' => $this->validateLoanTerms($loanData['loanTerms']),
                'loanPurpose' => $this->validateLoanPurpose($loanData['loanPurpose']),
            ];
        } catch (\Exception $e) {
            // Handle validation errors
            return ['validation_errors' => $e->getMessage()];
        }
    }

    private function validateLoanAmount($loanAmount)
    {
        $validator = Validator::make(['loanAmount' => $loanAmount], [
            'loanAmount' => [
                'required',
                'numeric', // Validate as a numeric value
                'between:1,100000', // Validate that it's within the specified range
                // You can add more validation rules here if needed
            ],
        ]);

        if ($validator->fails()) {
            // Handle validation failure (you can throw an exception or return a default value)
            return 100; // Default to 0 or any other appropriate default value
        }

        return $loanAmount;
    }

    private function validateLoanTerms($loanTerms)
    {
        $validator = Validator::make(['loanTerms' => $loanTerms], [
            'loanTerms' => [
                'required',
                'integer', // Validate as an integer value
                'between:1,120', // Validate that it's within the specified range
                // You can add more validation rules here if needed
            ],
        ]);

        if ($validator->fails()) {
            // Handle validation failure (you can throw an exception or return a default value)
            return 12; // Default to 0 or any other appropriate default value
        }

        return $loanTerms;
    }

    private function validateLoanPurpose($loanPurpose)
    {
        $validator = Validator::make(['loanPurpose' => $loanPurpose], [
            'loanPurpose' => [
                'required',
                'integer', // Validate as an integer value
                'in:1,2,3', // Validate that it's one of the specified values (adjust as needed)
                // You can add more validation rules here if needed
            ],
        ]);

        if ($validator->fails()) {
            // Handle validation failure (you can throw an exception or return a default value)
            return 1; // Default to 0 or any other appropriate default value
        }

        return $loanPurpose;
    }
}
