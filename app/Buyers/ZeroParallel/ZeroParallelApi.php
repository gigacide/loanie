<?php

namespace App\Buyers\ZeroParallel;

use App\Buyers\ZeroParallel\Mapper\DataMapper;
use App\Buyers\ZeroParallel\Response\ApiResponseInterface;
use App\Buyers\ZeroParallel\Response\JsonResponse;
use App\Exceptions\ApiException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Validation\ValidationException;

class ZeroParallelApi
{


    protected string $url;
    protected DataMapper $dataMapper;

    protected ZeroParallelApiClient $apiClient;
    protected ZeroParallelLeadStatusApi $leadStatusApi;

    public function __construct(
        ZeroParallelApiClient $apiClient,
        DataMapper $dataMapper,
        ZeroParallelLeadStatusApi $leadStatusApi
    ) {
        $this->url = 'https://leads.zeroparallel.com/lead/';
        $this->apiClient = $apiClient;
        $this->dataMapper = $dataMapper;
        $this->leadStatusApi = $leadStatusApi;
    }

    /**
     * @throws GuzzleException
     */
    /**
     * Send a loan application.
     *
     * @param array $data The loan application data to send.
     * @return ApiResponseInterface The API response.
     * @throws GuzzleException
     */
    public function sendLoanApplication(array $data): ApiResponseInterface
    {
        try {
            // Step 1: Map loan application data
            $mappedData = $this->mapLoanApplicationData($data);
//            $mappedData['testSold'] = 1;

            // Step 2: Send the loan application request
            $loanApplicationResponse = $this->sendLoanApplicationRequest($mappedData);

            // Step 3: Handle the response
            return $this->handleLoanApplicationResponse($loanApplicationResponse);
        } catch (ValidationException $e) {
            return $this->handleValidationException();
        } catch (\Exception $e) {
            return $this->handleGenericException();
        }
    }

    /**
     * Map loan application data.
     *
     * @param array $data The loan application data to map.
     * @return array Mapped loan application data.
     * @throws ValidationException
     */
    private function mapLoanApplicationData(array $data): array
    {
        return $this->dataMapper->map($data);
    }

    /**
     * Send the loan application request.
     *
     * @param array $mappedData The mapped loan application data to send.
     * @return ApiResponseInterface|JsonResponse The API response.
     */
    private function sendLoanApplicationRequest(array $mappedData): ApiResponseInterface|JsonResponse
    {
        return $this->apiClient->postLoanApplication($this->url, $mappedData);
    }

    /**
     * Handle the loan application response.
     *
     * @param ApiResponseInterface|JsonResponse $response The loan application response.
     * @return ApiResponseInterface The processed API response.
     * @throws GuzzleException
     * @throws ApiException
     */
    private function handleLoanApplicationResponse(JsonResponse|ApiResponseInterface $response): ApiResponseInterface
    {
        if ($response instanceof JsonResponse) {
            return $response;
        } else {
            // Handle non-JSON response (assuming it's ApiResponseInterface)
            $leadId = $response->getLeadId();
            return $this->handleNonJsonResponse($leadId);
        }
    }

    /**
     * Handle non-JSON response by checking lead status.
     *
     * @param string $leadId The lead ID.
     * @return ApiResponseInterface The API response.
     * @throws GuzzleException
     * @throws ApiException
     */
    private function handleNonJsonResponse(string $leadId): ApiResponseInterface
    {
        return $this->leadStatusApi->checkLeadStatus($leadId);
    }

    /**
     * Handle generic exception.
     *
     * @return ApiResponseInterface The API response.
     */
    private function handleGenericException(): ApiResponseInterface
    {
        return new JsonResponse(['error' => 'An error occurred'], 500);
    }

    /**
     * Handle validation exception.
     *
     * @return ApiResponseInterface The API response.
     */
    private function handleValidationException(): ApiResponseInterface
    {
        return $this->buildJsonResponse();
    }

    /**
     * Build a JSON response for validation errors.
     *
     * @return ApiResponseInterface The API response.
     */
    private function buildJsonResponse(): ApiResponseInterface
    {
        $data = ['error' => 'Validation Errors'];
        return new JsonResponse($data);
    }



}
