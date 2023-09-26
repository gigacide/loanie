<?php

namespace App\Buyers\ZeroParallel;

use App\Buyers\Mapper\ApplicantMapper;
use App\Buyers\Mapper\BankMapper;
use App\Buyers\Mapper\ConsentMapper;
use App\Buyers\Mapper\EmployerMapper;
use App\Buyers\Mapper\ResidenceMapper;
use App\Buyers\Mapper\SourceMapper;
use App\Services\CustomResponse;
use App\Services\ErrorHandler;
use App\Services\ErrorResponse;
use App\Services\RejectedResponse;
use App\Services\SoldResponse;

class ZeroParallelApi
{
    protected string $url;
    protected string $apiKey;
    protected string $campaignId;
    protected ZeroParallelApiClient $apiClient;
    protected ErrorHandler $errorHandler;

    public function __construct(
        ZeroParallelApiClient $apiClient,
        ErrorHandler          $errorHandler
    )
    {
        $this->url = 'https://leads.zeroparallel.com/lead/';
        $this->apiKey = '094b5b15f';
        $this->campaignId = 'Loanie';
        $this->apiClient = $apiClient;
        $this->errorHandler = $errorHandler;
    }


    public function sendLoanApplication(array $data)
    {
        $mappedData = $this->mapData($data);

        try {
            $response = $this->apiClient->sendRequest($this->url, $mappedData);

            return match ($response['Status']) {
                'Rejected' => new RejectedResponse($response),
                'Error' => new ErrorResponse($response),
                'Sold' => new SoldResponse($response),
                default => new CustomResponse($response),
            };
        } catch (\Exception $e) {
            // Handle exceptions using your error handling class
            $this->errorHandler->handleException($e);
            return new ErrorResponse(['error' => 'An error occurred.']);
        }
    }


    public function mapData(array $requestData): array
    {
        $mappedData = [
            'apiId' => '8DC69457240C44DDABAB0154B8E404C5',
            'apiPassword' => '094b5b15f',
            'testMode' => '1',
            'productId' => '19',
            'price' => '0',
        ];

        $sourceMapper = new SourceMapper();
        $applicantMapper = new ApplicantMapper();
        $employerMapper = new EmployerMapper();
        $residenceMapper = new ResidenceMapper();
        $bankMapper = new BankMapper();
        $consentMapper = new ConsentMapper();

        $mappedData += $applicantMapper->map($requestData['applicant']);
        $mappedData += $bankMapper->map($requestData['bank']);
        $mappedData += $employerMapper->map($requestData['employer']);
        $mappedData += $residenceMapper->map($requestData['residence']);
        $mappedData += $consentMapper->map($requestData['consent']);
        $mappedData += $sourceMapper->map($requestData['source']);

        return $mappedData;
    }
}
