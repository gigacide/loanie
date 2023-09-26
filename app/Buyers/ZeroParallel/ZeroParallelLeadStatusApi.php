<?php

namespace App\Buyers\ZeroParrallel;

class ZeroParallelLeadStatusApi
{

    protected ZeroParallelApiClient $apiClient;
    protected string $apiId;
    protected string $apiPassword;

    public function __construct(ZeroParallelApiClient $apiClient, string $apiId, string $apiPassword)
    {
        $this->apiClient = $apiClient;
        $this->apiId = $apiId;
        $this->apiPassword = $apiPassword;
    }

    public function checkLeadStatus(string $leadId): array
    {
        $url = 'https://leads.zeroparallel.com/lead/check-lead-status';
        $query = http_build_query([
            'apiId' => $this->apiId,
            'apiPassword' => $this->apiPassword,
            'checkKey' => $leadId,
        ]);

        return $this->apiClient->sendRequest($url, []);
    }
}
