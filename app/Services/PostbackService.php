<?php

namespace App\Services;

use App\Models\Click;
use App\Models\Postback;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Log;

class PostbackService
{

    /**
     * @throws GuzzleException
     */
    public function sendPostback($affiliate, $clientResponse, $loanApplication)
    {
        // Retrieve the specific affiliate's Postback URL
        $postbackUrl = $this->replacePostbackParams($affiliate->postback_url, $loanApplication, $clientResponse);

        $client = new Client();

        $response = $client->post($postbackUrl);

        // Handle the response from the postback request
        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
            Log::debug('Postback sent successfully!', ['postback_url' => $affiliate->postback_url]);

            return $clientResponse;
        } else {
            Log::debug('Failed to send postback: ' . $response->getStatusCode());
            return $clientResponse;
        }
    }

    /**
     * @throws GuzzleException
     */
    public function sendCPLPostback($affiliate, $clientResponse, $loanApplication)
    {

        // Retrieve the specific affiliate's Postback URL
        $postbackUrl = $this->replacePostbackParamsCPL($affiliate->postback_url, $loanApplication, $clientResponse);

        $client = new Client();

        $request = new Request('POST', $postbackUrl);
        $response = $client->send($request);

        // Handle the response from the postback request
        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
            $responseBody = $response->getBody()->getContents();

            // Save the postback request and response to the database
            $this->savePostback($postbackUrl, $request, $responseBody);

            Log::debug('Postback sent successfully!', ['postback_url' => $affiliate->postback_url]);

            return $clientResponse;
        } else {

            Log::debug('Failed to send postback: ' . $response->getStatusCode());
            return $clientResponse;
        }
    }

    /**
     * @param $postbackUrl
     * @param $loanApplication
     * @param $clientResponse
     * @return array|string
     */
    public function replacePostbackParams($postbackUrl, $loanApplication, $clientResponse): array|string
    {
        $postbackUrl = str_replace("{aff_sub}", $loanApplication['aff_sub'] ?? '', $postbackUrl);
        $postbackUrl = str_replace("{aff_sub2}", $loanApplication['aff_sub2'] ?? '', $postbackUrl);
        $postbackUrl = str_replace("{aff_sub3}", $loanApplication['aff_sub3'] ?? '', $postbackUrl);
        $postbackUrl = str_replace("{aff_sub4}", $loanApplication['aff_sub4'] ?? '', $postbackUrl);
        $postbackUrl = str_replace("{aff_sub5}", $loanApplication['aff_sub5'] ?? '', $postbackUrl);
        $postbackUrl = str_replace("{transaction_id}", $loanApplication['transaction_id'] ?? '', $postbackUrl);
        $postbackUrl = str_replace("{amount}", $clientResponse['Price'], $postbackUrl);

        return $postbackUrl;
    }

    public function replacePostbackParamsCPL($postbackUrl, $loanApplication, $clientResponse): array|string
    {

        $postbackUrl = str_replace("{aff_sub}", $loanApplication['aff_sub'] ?? '', $postbackUrl);
        $postbackUrl = str_replace("{aff_sub2}", $loanApplication['aff_sub2'] ?? '', $postbackUrl);
        $postbackUrl = str_replace("{aff_sub3}", $loanApplication['aff_sub3'] ?? '', $postbackUrl);
        $postbackUrl = str_replace("{aff_sub4}", $loanApplication['aff_sub4'] ?? '', $postbackUrl);
        $postbackUrl = str_replace("{aff_sub5}", $loanApplication['aff_sub5'] ?? '', $postbackUrl);
        $postbackUrl = str_replace("{transaction_id}", $loanApplication['transaction_id'] ?? '', $postbackUrl);
        $postbackUrl = str_replace("{amount}", '16.00', $postbackUrl);

        return $postbackUrl;
    }

    private function savePostback($url, $request, $response)
    {
        // Create a new instance of the Postback model
        $postback = new Postback();

        // Set the postback data
        $postback->url = $url;
        $postback->request = json_encode($request);
        $postback->response = json_encode($response);;

        // Save the postback to the database
        $postback->save();
    }
}
