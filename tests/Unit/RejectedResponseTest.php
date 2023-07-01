<?php

use App\Services\RejectedResponse;
use PHPUnit\Framework\TestCase;

class RejectedResponseTest extends TestCase
{
    public function testGetStatus()
    {
        // Create an instance of RejectedResponse with dummy data
        $data = [
            'Status' => 'rejected',
            'LeadID' => '98765',
        ];
        $rejectedResponse = new RejectedResponse($data);

        // Call the getStatus method and assert the expected status
        $this->assertEquals('rejected', $rejectedResponse->getStatus());
    }

    public function testGetLeadID()
    {
        // Create an instance of RejectedResponse with dummy data
        $data = [
            'Status' => 'rejected',
            'LeadID' => '98765',
        ];
        $rejectedResponse = new RejectedResponse($data);

        // Call the getLeadID method and assert the expected lead ID
        $this->assertEquals('98765', $rejectedResponse->getLeadID());
    }
}
