<?php

namespace App\Services\Postback;

use App\Exceptions\PostbackErrorResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class PostbackHttpClient
{
    protected Client $httpClient;
    protected PostbackResponseHandler $responseHandler;

    public function __construct(Client $httpClient, PostbackResponseHandler $responseHandler)
    {
        $this->httpClient = $httpClient;
        $this->responseHandler = $responseHandler;
    }

    public function send(string $postbackUrl): int | PostbackErrorResponse
    {
        try {
            $response = $this->httpClient->post($postbackUrl);

            return $this->responseHandler->handleResponse($postbackUrl, $response);
        } catch (GuzzleException $e) {
            Log::error('Failed to send postback: ' . $e->getMessage());
            return new PostbackErrorResponse('Failed to send postback', 500);
        }
    }
}
