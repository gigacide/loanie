<?php

use App\Services\PostbackService;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class PostbackServiceTest extends TestCase
{
    public function testSendPostbackSuccess()
    {
        // Create a mock for the GuzzleHttp Client
        $mockHandler = new MockHandler([new Response(200)]);
        $handlerStack = HandlerStack::create($mockHandler);
        $client = new Client(['handler' => $handlerStack]);

        // Create an instance of the PostbackService and set the mock client
        $postbackService = new PostbackService();
        $reflection = new ReflectionProperty(PostbackService::class, 'client');
        $reflection->setAccessible(true);
        $reflection->setValue($postbackService, $client);

        // Call the sendPostback method with dummy data
        $affiliate = (object) ['postback_url' => 'https://example.com/postback'];
        $clientResponse = [];
        $loanApplication = [];
        $result = $postbackService->sendPostback($affiliate, $clientResponse, $loanApplication);

        // Assert that the postback was sent successfully
        $this->assertEquals($clientResponse, $result);
    }

    public function testSendPostbackFailure()
    {
        // Create a mock for the GuzzleHttp Client
        $mockHandler = new MockHandler([new Response(500)]);
        $handlerStack = HandlerStack::create($mockHandler);
        $client = new Client(['handler' => $handlerStack]);

        // Create an instance of the PostbackService and set the mock client
        $postbackService = new PostbackService();
        $reflection = new ReflectionProperty(PostbackService::class, 'client');
        $reflection->setAccessible(true);
        $reflection->setValue($postbackService, $client);

        // Call the sendPostback method with dummy data
        $affiliate = (object) ['postback_url' => 'https://example.com/postback'];
        $clientResponse = [];
        $loanApplication = [];
        $result = $postbackService->sendPostback($affiliate, $clientResponse, $loanApplication);

        // Assert that the postback failed
        $this->assertEquals($clientResponse, $result);
    }

    public function testReplacePostbackParams()
    {
        // Create an instance of the PostbackService
        $postbackService = new PostbackService();

        // Define dummy data
        $postbackUrl = 'https://example.com/postback?aff_sub={aff_sub}&amount={amount}';
        $loanApplication = [
            'aff_sub' => '12345',
            'transaction_id' => 'abc123',
        ];
        $clientResponse = [
            'Price' => '50.00',
        ];

        // Call the replacePostbackParams method
        $result = $postbackService->replacePostbackParams($postbackUrl, $loanApplication, $clientResponse);

        // Define the expected result with replaced parameters
        $expectedResult = 'https://example.com/postback?aff_sub=12345&amount=50.00';

        // Assert that the parameters in the postback URL were replaced correctly
        $this->assertEquals($expectedResult, $result);
    }
}

