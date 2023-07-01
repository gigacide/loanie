<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class FirstPromoterService
{
    private string $apiKey;
    private string $baseUrl;
    private Client $client;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->baseUrl = 'https://api.firstpromoter.com/v1/';

        $this->client = new Client([
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function trackLead($email, $campaign = null)
    {
        $url = $this->baseUrl . 'leads/track';

        try {
            $payload = [
                'email' => $email,
                'campaign' => $campaign,
            ];

            $response = $this->sendRequest('POST', $url, $payload);
            return $response;
        } catch (GuzzleException $e) {
            throw new Exception('Error tracking lead in FirstPromoter: ' . $e->getMessage());
        }
    }

    public function trackSignup($email, $campaign = null)
    {
        $url = $this->baseUrl . 'signups/track';

        try {
            $payload = [
                'email' => $email,
                'campaign' => $campaign,
            ];

            $response = $this->sendRequest('POST', $url, $payload);
            return $response;
        } catch (GuzzleException $e) {
            throw new Exception('Error tracking signup in FirstPromoter: ' . $e->getMessage());
        }
    }

    public function createReward($customerId, $amount, $description)
    {
        $url = $this->baseUrl . 'rewards';

        try {
            $payload = [
                'customer_id' => $customerId,
                'amount' => $amount,
                'description' => $description,
            ];

            $response = $this->sendRequest('POST', $url, $payload);
            return $response;
        } catch (GuzzleException $e) {
            throw new Exception('Error creating reward in FirstPromoter: ' . $e->getMessage());
        }
    }

    public function listPromoters($page = 1, $perPage = 20)
    {
        $url = $this->baseUrl . 'promoters';

        try {
            $queryParams = [
                'page' => $page,
                'per_page' => $perPage,
            ];

            $url .= '?' . http_build_query($queryParams);

            $response = $this->sendRequest('GET', $url);
            return $response;
        } catch (GuzzleException $e) {
            throw new Exception('Error listing promoters in FirstPromoter: ' . $e->getMessage());
        }
    }

    private function sendRequest($method, $url, $payload = [])
    {
        try {
            $response = $this->client->request($method, $url, [
                'json' => $payload, // Use 'json' for JSON payloads
            ]);

            $responseBody = $response->getBody()->getContents();
            $responseData = json_decode($responseBody, true);

            return $responseData;
        } catch (GuzzleException $e) {
            throw new Exception('HTTP request failed: ' . $e->getMessage());
        }
    }
}

// Example usage:
//
//$apiKey = 'YOUR_API_KEY';
//$client = new FirstPromoterApiClient($apiKey);
//
//// Track a lead
//$leadEmail = 'example@example.com';
//$response = $client->trackLead($leadEmail);
//var_dump($response);
//
//// Track a signup
//$signupEmail = 'example@example.com';
//$response = $client->trackSignup($signupEmail);
//var_dump($response);
//
//// Create a reward
//$customerId = 'CUSTOMER_ID';
//$amount = 10.0;
//$description = 'Referral reward';
//$response = $client->createReward($customerId, $amount, $description);
//var_dump($response);
//
//// List promoters
//$page = 1;
//$perPage = 20;
//$response = $client->listPromoters($page, $perPage);
//var_dump($response);
