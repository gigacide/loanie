<?php

namespace App\Buyers\Mapper;

class ConsentMapper
{
    public function map(array $data): array
    {
        return [
            'consentEmailSms' => $this->mapConsentToMarketingEmails($data['consentToMarketingEmails']),
        ];
    }

    private function mapConsentToMarketingEmails(string $consentToMarketingEmails): string
    {
        // Mapping logic for consent to marketing emails
    }
}

