<?php

namespace App\Services\Postback;

use App\Models\LoanApplication;
use App\Models\Postback;
use Illuminate\Support\Facades\Log;

class PostbackService
{
    protected PostbackParameterReplacer $parameterReplacer;
    protected PostbackHttpClient $postbackClient;

    public function __construct(PostbackParameterReplacer $parameterReplacer, PostbackHttpClient $postbackClient)
    {
        $this->parameterReplacer = $parameterReplacer;
        $this->postbackClient = $postbackClient;
    }

    /**
     * Send a postback request.
     *
     * @param LoanApplication $loanApplication
     * @param mixed $clientResponse
     */
    public function sendPostback(LoanApplication $loanApplication, mixed $clientResponse): void
    {
        try {
            $postbackUrl = $this->getPostbackUrl($loanApplication->affiliate_id);
            $postbackUrl = $this->replacePlaceholders($postbackUrl, $loanApplication, $clientResponse);
            $this->savePostback($postbackUrl, json_encode($clientResponse));

            $this->sendHttpRequest($postbackUrl);

        } catch (\Exception $e) {
            $this->handleException($e);
        }
    }

    /**
     * Get the postback URL based on affiliate ID.
     *
     * @param string $affiliateId
     * @return string
     */
    private function getPostbackUrl(string $affiliateId): string
    {
        return Postback::getPostbackUrl($affiliateId)->postback_url;
    }

    /**
     * Replace placeholders in the postback URL.
     *
     * @param string $postbackUrl
     * @param LoanApplication $loanApplication
     * @param mixed $clientResponse
     * @return string
     */
    private function replacePlaceholders(string $postbackUrl, LoanApplication $loanApplication, mixed $clientResponse): string
    {
        return $this->parameterReplacer->replace($postbackUrl, $loanApplication, $clientResponse);
    }

    /**
     * Save the postback URL and response data.
     *
     * @param string $postbackUrl
     * @param string $responseData
     * @return bool
     */
    private function savePostback(string $postbackUrl, string $responseData): bool
    {
        return (new Postback)->savePostback($postbackUrl, $responseData);
    }

    /**
     * Send the HTTP postback request.
     *
     * @param string $postbackUrl
     */
    private function sendHttpRequest(string $postbackUrl): void
    {
        $this->postbackClient->send($postbackUrl);
    }

    /**
     * Handle exceptions that may occur during the process.
     *
     * @param \Exception $e
     */
    private function handleException(\Exception $e): void
    {
        Log::error('An Postback error occurred: ' . $e->getMessage());
    }
}
