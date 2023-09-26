<?php

namespace App\Buyers\ZeroParrallel;

use GuzzleHttp\Client;

class ZeroParallelApiClient
{
    protected Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function sendRequest(string $url, array $data): array
    {
        $response = $this->client->post($url, ['form_params' => $data]);
        return json_decode($response->getBody()->getContents(), true);
    }

}
