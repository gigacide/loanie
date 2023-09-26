<?php

namespace App\Services\Postback;

use Illuminate\Support\Facades\Log;
use Psr\Http\Message\ResponseInterface;

class PostbackResponseHandler
{
    public function handleResponse(string $postbackUrl, ResponseInterface $response): int
    {
        $statusCode = $response->getStatusCode();

        if ($statusCode >= 200 && $statusCode < 300) {
            Log::debug('Postback sent successfully!', ['postback_url' => $postbackUrl]);
        } else {
            Log::debug('Failed to send postback: ' . $statusCode);
        }

        return $statusCode;
    }
}
