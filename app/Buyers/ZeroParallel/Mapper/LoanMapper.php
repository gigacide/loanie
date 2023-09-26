<?php

namespace App\Buyers\ZeroParallel\Mapper;

use Illuminate\Support\Facades\Validator;

class SourceMapper
{
    public function map(array $sourceData): array
    {
        return [
            'userIp' => $this->validateIpAddress($sourceData['ipAddress']),
            'userAgent' => $this->validateUserAgent($sourceData['userAgent']),
            'source' => $this->validateSource($sourceData['creationUrl']),
        ];
    }

    private function validateIpAddress($ipAddress)
    {
        $validator = Validator::make(['ipAddress' => $ipAddress], [
            'ipAddress' => [
                'required',
                'ip:ipv4', // Use the 'ip' rule with the 'ipv4' option
                // You can add more validation rules here if needed
            ],
        ]);

        if ($validator->fails()) {
            // Handle validation failure (you can throw an exception or return a default value)
            return '127.0.0.1'; // Default to a safe IP address
        }

        return $ipAddress;
    }

    private function validateUserAgent($userAgent)
    {
        // Validate user agent using Laravel's validation
        $validator = Validator::make(['userAgent' => $userAgent], [
            'userAgent' => 'regex:/^[a-zA-Z0-9()\/:;?.,\-_ ]+$/',
        ]);

        if ($validator->fails()) {
            // Handle validation failure (you can throw an exception or return a default value)
            return 'Unknown User Agent';
        }

        return $userAgent;
    }

    private function validateSource($source)
    {
        // Validate and sanitize source using Laravel's validation
        $validator = Validator::make(['source' => $source], [
            'source' => 'string',
        ]);

        if ($validator->fails()) {
            // Handle validation failure (you can throw an exception or return a default value)
            return 'Unknown Source';
        }

        return $source;
    }
}
