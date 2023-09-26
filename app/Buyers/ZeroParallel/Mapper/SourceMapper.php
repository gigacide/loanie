<?php

namespace App\Buyers\Mapper;

class SourceMapper
{
    public function map(array $sourceData): array
    {
        return [
            'userIp' => $sourceData['ipAddress'],
            'userAgent' => $sourceData['userAgent'],
            'source' => 'https://www.loanieloans.com',
        ];
    }
}

