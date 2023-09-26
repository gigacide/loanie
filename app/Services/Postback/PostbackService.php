<?php

namespace App\Services;

use App\Models\Affiliate;
use App\Models\Postback;
use App\Services\Postback\PostbackParameterReplacer;
use App\Services\Postback\PostbackHttpClient;
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

    public function sendPostback(array $loanApplication, mixed $clientResponse): void
    {
        $affId = $loanApplication['affiliate_id'];

        try {
            // Get the postback URL based on affiliate ID
            $postbackUrl = Postback::getPostbackUrl($affId);

            // Replace placeholders in the postback URL
            $postbackUrl = $this->parameterReplacer->replace($postbackUrl, $loanApplication, $clientResponse);

            // Send the HTTP postback request
            $this->postbackClient->send($postbackUrl);
        } catch (\Exception $e) {
            // Handle any other exceptions that may occur during the process
            Log::error('An error occurred: ' . $e->getMessage());
        }
    }
}
