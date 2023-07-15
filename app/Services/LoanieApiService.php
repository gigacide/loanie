<?php

namespace App\Services;

use App\Services\CustomResponse;
use App\Services\ErrorResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use App\Services\RejectedResponse;
use RejectedWithPriceRejectResponse;
use App\Services\SoldResponse;

class LoanieApiService
{
    protected ?Client $client = null;

    protected ?string $url = null;
    public function __construct()
    {
        $this->client = new Client();
        $this->url = 'http://127.0.0.1:8000/api/process'; //live
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
            $this->url = 'http://127.0.0.1:8000/api/process'; //live

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


