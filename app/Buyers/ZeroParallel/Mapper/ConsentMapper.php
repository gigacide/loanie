<?php

namespace App\Buyers\ZeroParallel\Mapper;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ConsentMapper
{
    /**
     * Map consent data.
     *
     * @param array $consentData
     * @return array
     * @throws ValidationException
     */
    public function map(array $consentData): array
    {
        $validatedData = $this->validateData($consentData);

        return [
            'consentEmailSms' => $this->mapBooleanToString($validatedData['consentToMarketingEmails']),
        ];
    }

    /**
     * Validate consent data.
     *
     * @param array $consentData
     * @return array
     * @throws ValidationException
     */
    private function validateData(array $consentData): array
    {
        $validator = Validator::make($consentData, [
            'consentToMarketingEmails' => 'boolean',
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return $consentData;
    }

    /**
     * Map a boolean value to a string.
     *
     * @param bool $value
     * @return string
     */
    private function mapBooleanToString(bool $value): string
    {
        return $value ? 'YES' : 'NO';
    }
}
