<?php

namespace App\Buyers\ZeroParallel;

use App\Buyers\ZeroParallel\Response\ApiResponseInterface;
use App\Buyers\ZeroParallel\Response\AuthorizationFailedResponse;
use App\Buyers\ZeroParallel\Response\InProgressResponse;
use App\Buyers\ZeroParallel\Response\JsonResponse;
use App\Buyers\ZeroParallel\Response\NotFoundResponse;
use App\Buyers\ZeroParallel\Response\RejectResponse;
use App\Buyers\ZeroParallel\Response\SoldResponse;
use App\Exceptions\ApiException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class ZeroParallelApiClient
{
    protected Client $client;
    protected string $apiId;
    protected string $apiPassword;

    public function __construct(string $apiId, string $apiPassword)
    {
        $this->client = new Client();
        $this->apiId = $apiId;
        $this->apiPassword = $apiPassword;
    }

    public function postLoanApplication(string $url, array $data): ApiResponseInterface|ApiException|GuzzleException
    {
        try {
            $response = $this->sendPostRequest($url, $data);
            $this->handleHttpErrors($response);

            $responseBody = $this->parseJsonResponse($response);

            $specificErrorsResponse = $this->handleSpecificErrors($responseBody);
            if ($specificErrorsResponse !== null) {
                return $specificErrorsResponse;
            }

            return $this->createInProgressResponse($responseBody);
        } catch (\Exception $e) {
            // Wrap the exception in your custom ApiException and return it
            return new ApiException($e->getMessage());
        } catch (GuzzleException $e) {
            return $e;
        }
    }


    /**
     * @throws GuzzleException
     */
    private function sendPostRequest(string $url, array $data): ResponseInterface
    {
        return $this->client->post($url, ['form_params' => $data]);
    }

    /**
     * @throws ApiException
     */
    private function handleHttpErrors(ResponseInterface $response): void
    {
        $statusCode = $response->getStatusCode();

        if ($statusCode >= 400) {
            throw new ApiException("HTTP error with status code: $statusCode");
        }
    }

    private function parseJsonResponse(ResponseInterface $response): mixed
    {
        return json_decode($response->getBody()->getContents(), true);
    }

    private function handleSpecificErrors(array $responseBody): ?ApiResponseInterface
    {
        if (isset($responseBody['errors'])) {
            if (isset($responseBody['errors'][0]['Duplicate Application'])) {
                return new JsonResponse($responseBody); // Replace with your actual response class
            }
        }

        return null;
    }

    private function createInProgressResponse(array $responseBody): ApiResponseInterface
    {
        return new InProgressResponse($responseBody);
    }

    /**
     * @throws GuzzleException
     * @throws ApiException
     */
    public function checkStatus(string $url): array
    {
        $response = $this->client->get($url);
        $this->handleHttpErrors($response);
        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @throws GuzzleException
     * @throws ApiException
     */
    public function checkLeadStatus($leadId): array
    {
        $checkResponse = $this->getLeadStatus($leadId);

        if ($checkResponse['status'] === SoldResponse::STATUS) {
            return $checkResponse;
        } elseif ($checkResponse['status'] === RejectResponse::STATUS) {
            return $checkResponse;
        } elseif ($checkResponse['status'] === AuthorizationFailedResponse::STATUS) {
            return $checkResponse;
        } elseif ($checkResponse['status'] === NotFoundResponse::STATUS) {
            return $checkResponse;
        }
    }

    /**
     * @throws GuzzleException
     * @throws ApiException
     */
    private function getLeadStatus(string $leadId): array
    {
        $url = "https://leads.zeroparallel.com/lead/check-lead-status?apiId={$this->apiId}&apiPassword={$this->apiPassword}&checkKey={$leadId}";
        return $this->checkStatus($url);
    }
}
