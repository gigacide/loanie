<?php

namespace App\Buyers\ZeroParallel;

use App\Buyers\ZeroParallel\Response\ApiResponseInterface;
use App\Buyers\ZeroParallel\Response\AuthorizationFailedResponse;
use App\Buyers\ZeroParallel\Response\JsonResponse;
use App\Buyers\ZeroParallel\Response\NotFoundResponse;
use App\Buyers\ZeroParallel\Response\RejectResponse;
use App\Buyers\ZeroParallel\Response\SoldResponse;
use App\Exceptions\ApiException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class ZeroParallelLeadStatusApi
{
    protected ZeroParallelApiClient $apiClient;
    protected string $url;
    protected string $apiId;
    protected string $apiPassword;
    protected int $maxProcessingTime = 300;

    public function __construct(
        ZeroParallelApiClient $apiClient, // Add this line
        string $url,
        string $apiId,
        string $apiPassword
    ) {
        $this->apiClient = $apiClient; // Add this line
        $this->url = $url;
        $this->apiId = $apiId;
        $this->apiPassword = $apiPassword;
    }

    /**
     * @throws GuzzleException
     * @throws ApiException
     */
    public function checkLeadStatus(string $leadId): ApiResponseInterface
    {

        $this->url = $this->buildStatusCheckUrl($leadId);
        $leadStatus = [];
        $startTime = time();
        $interval = 3;

        while (time() - $startTime <= $this->maxProcessingTime) {
            $leadStatus = $this->apiClient->checkStatus($this->url);
            Log::debug('checkStatus() called');
            Log::debug('checkStatus() response::', (array) $leadStatus);

            if ($this->isLeadSold($leadStatus)) {
                return $this->handleLeadSold($leadStatus);
            }

            if ($this->isLeadRejected($leadStatus)) {
                return $this->handleLeadRejected($leadStatus);
            }

            if ($this->isAuthorizationFailed($leadStatus)) {
                return $this->handleAuthorizationFailed($leadStatus);
            }

            if ($this->isNotFound($leadStatus)) {
                return $this->handleNotFound($leadStatus);
            }

//            $interval = $this->adjustInterval($interval);
            Log::debug('sleep() called');

            sleep($interval);
        }

        // If lead status couldn't be determined, return a generic response
        return $this->handleLeadNotDetermined($leadStatus);
    }

    private function buildStatusCheckUrl(string $leadId): string
    {
        return "https://leads.zeroparallel.com/lead/check-lead-status?apiId={$this->apiId}&apiPassword={$this->apiPassword}&checkKey={$leadId}";
    }

    private function handleLeadSold(array $leadStatus): ApiResponseInterface
    {
        Log::debug('Sold', $leadStatus);
        return new SoldResponse($leadStatus);
    }

    private function handleLeadRejected(array $leadStatus): ApiResponseInterface
    {
        Log::debug('Reject', $leadStatus);
        return new RejectResponse($leadStatus);
    }

    private function handleAuthorizationFailed(array $leadStatus): ApiResponseInterface
    {
        Log::debug('AuthorizationFailedResponse', $leadStatus);
        return new AuthorizationFailedResponse($leadStatus);
    }

    private function handleNotFound(array $leadStatus): ApiResponseInterface
    {
        Log::debug('NotFoundResponse', $leadStatus);
        return new NotFoundResponse($leadStatus);
    }

    private function handleLeadNotDetermined(array $leadStatus): JsonResponse
    {
        return new JsonResponse(['error' => 'Lead status could not be determined'], 500);
    }

    protected function isLeadSold(array $leadStatus): bool
    {
        return $leadStatus['status'] === 1;
    }

    protected function isLeadRejected(array $leadStatus): bool
    {
        // Implement the logic to check if the lead is rejected based on your data
        // For example, you can check if the status is "Rejected" or other criteria
        return isset($leadStatus['status']) && $leadStatus['status'] === 2;
    }

    protected function isAuthorizationFailed(array $leadStatus): bool
    {
        return $leadStatus['status'] === 4;
    }

    protected function isNotFound(array $leadStatus): bool
    {
        return $leadStatus['status'] === 5;
    }

    protected function adjustInterval(int $interval): int
    {
        if ($interval >= 5) {
            return 5; // Maximum recommended interval
        } elseif ($interval >= 3) {
            return 5; // Query every 5 seconds
        } elseif ($interval >= 2) {
            return 3; // Query every 3 seconds
        } else {
            return 2; // Query every 2 seconds
        }
    }
}
