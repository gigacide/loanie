<?php

use App\Services\RejectedWithPriceRejectResponse;
use PHPUnit\Framework\TestCase;

class RejectedWithPriceRejectResponseTest extends TestCase
{
    public function testGetStatus()
    {
        // Create an instance of RejectedWithPriceRejectResponse with dummy data
        $data = [
            'Status' => 'rejected',
            'LeadID' => '123',
            'PriceRejectAmount' => '50.00',
        ];
        $rejectedResponse = new RejectedWithPriceRejectResponse($data);

        // Call the getStatus method and assert the expected status
        $this->assertEquals('rejected', $rejectedResponse->getStatus());
    }

    public function testGetLeadID()
    {
        // Create an instance of RejectedWithPriceRejectResponse with dummy data
        $data = [
            'Status' => 'rejected',
            'LeadID' => '123',
            'PriceRejectAmount' => '50.00',
        ];
        $rejectedResponse = new RejectedWithPriceRejectResponse($data);

        // Call the getLeadID method and assert the expected lead ID
        $this->assertEquals('123', $rejectedResponse->getLeadID());
    }

    public function testGetPriceRejectAmount()
    {
        // Create an instance of RejectedWithPriceRejectResponse with dummy data
        $data = [
            'Status' => 'rejected',
            'LeadID' => '123',
            'PriceRejectAmount' => '50.00',
        ];
        $rejectedResponse = new RejectedWithPriceRejectResponse($data);

        // Call the getPriceRejectAmount method and assert the expected price reject amount
        $this->assertEquals('50.00', $rejectedResponse->getPriceRejectAmount());
    }

    // Add additional test methods as needed for other methods and logic in the RejectedWithPriceRejectResponse class
}

