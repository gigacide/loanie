<?php

namespace App\Services;

use App\Services\CustomResponse;
use App\Services\ErrorResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use App\Services\RejectedResponse;
use RejectedWithPriceRejectResponse;
use App\Services\SoldResponse;

class ItMediaApiService
{
    protected ?Client $client = null;

    protected ?string $url = null;
    protected ?string $apiKey = null;
    protected ?string $campaignId = null;
    protected ?string $apiUsername = null;

    public function __construct()
    {
        $this->client = new Client();
        $this->url = 'https://api.itmedia.xyz/post/testjson/api/v2';
        $this->apiKey = 'f4aa37b1e259134058ce85f20ea8d356c97da52c';
        $this->campaignId = 'uping';
        $this->apiUsername = 'Amikaro_ToptoBottom';
    }

    /**
     * @throws GuzzleException
     */
    public function sendLoanApplication(array $mappedData): RejectedResponse|ErrorResponse|CustomResponse|RejectedWithPriceRejectResponse|SoldResponse
    {

        if ($this->client === null) {
            $this->client = new Client();
        }
        if ($this->url === null) {
            $this->url = 'https://api.itmedia.xyz/post/testjson/api/v2'; //test
//            $this->url = 'https://api.itmedia.xyz/post/testjson/api/v2'; live
        }
        if ($this->apiKey === null) {
            $this->apiKey = 'f4aa37b1e259134058ce85f20ea8d356c97da52c';
        }
        if ($this->campaignId === null) {
            $this->campaignId = 'uping';
        }
        if ($this->apiUsername === null) {
            $this->apiUsername = 'Amikaro_ToptoBottom';
        }


        $response = $this->client->post($this->url, [
            'form_params' => $mappedData,
        ]);

        $responseData = json_decode($response->getBody()->getContents(), true);

        // Return an instance of the appropriate response class based on the status
        switch ($responseData['Status']) {
            case 'Rejected':
                if (isset($responseData['PriceRejectAmount'])) {
                    return new RejectedWithPriceRejectResponse($responseData);
                } else {
                    return new RejectedResponse($responseData);
                }
                break;
            case 'Error':
                return new ErrorResponse($responseData);
                break;
            case 'Sold':
                return new SoldResponse($responseData);
                break;
            default:
                return new CustomResponse($responseData);
                break;
        }
    }
}


