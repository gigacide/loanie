<?php
// tests/Unit/PostbackServiceTest.php

namespace Tests\Unit;

use App\Models\Affiliate;
use App\Services\Postback\PostbackParameterReplacer;
use App\Services\Postback\PostbackService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostbackServiceTestNew extends TestCase
{
    use RefreshDatabase;

    public function testSendPostback()
    {
        // Create an instance of PostbackService
        $postbackParameterReplacer = new PostbackParameterReplacer();
        $postbackService = new PostbackService($postbackParameterReplacer);

        // Mock an Affiliate model (you may need to adjust this based on your model structure)
        $affiliate = new Affiliate();
        $affiliate->id = 1;
        $affiliate->postback_url = 'http://example.com/postback?aff_sub={aff_sub}&transaction_id={transaction_id}';

        // Your test data
        $loanApplicationData = [
            'affiliate_id' => 1,
            'aff_sub' => '123',
            'transaction_id' => '456',
        ];
        $clientResponse = ['Price' => 100];

        // Perform the test
        $postbackService->sendPostback($affiliate, $loanApplicationData, $clientResponse);

        // Assertions - You may need to adapt these assertions based on your implementation
        // In this example, we'll check if the postback URL is replaced correctly
        $this->assertStringContainsString('aff_sub=123', $affiliate->postback_url);
        $this->assertStringContainsString('transaction_id=456', $affiliate->postback_url);
    }
}
