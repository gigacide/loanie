<?php

use App\Services\SoldResponse;
use PHPUnit\Framework\TestCase;

class SoldResponseTest extends TestCase
{
    public function testGetStatus()
    {
        // Create an instance of SoldResponse with dummy data
        $data = [
            'Status' => 'success',
            'LeadID' => '12345',
            'Price' => '100.00',
            'Redirect' => 'https://example.com/redirect',
        ];
        $soldResponse = new SoldResponse($data);

        // Call the getStatus method and assert the expected status
        $this->assertEquals('success', $soldResponse->getStatus());
    }

    public function testGetLeadID()
    {
        // Create an instance of SoldResponse with dummy data
        $data = [
            'Status' => 'success',
            'LeadID' => '12345',
            'Price' => '100.00',
            'Redirect' => 'https://example.com/redirect',
        ];
        $soldResponse = new SoldResponse($data);

        // Call the getLeadID method and assert the expected lead ID
        $this->assertEquals('12345', $soldResponse->getLeadID());
    }

    public function testGetPrice()
    {
        // Create an instance of SoldResponse with dummy data
        $data = [
            'Status' => 'success',
            'LeadID' => '12345',
            'Price' => '100.00',
            'Redirect' => 'https://example.com/redirect',
        ];
        $soldResponse = new SoldResponse($data);

        // Call the getPrice method and assert the expected price
        $this->assertEquals('100.00', $soldResponse->getPrice());
    }

    public function testGetRedirect()
    {
        // Create an instance of SoldResponse with dummy data
        $data = [
            'Status' => 'success',
            'LeadID' => '12345',
            'Price' => '100.00',
            'Redirect' => 'https://example.com/redirect',
        ];
        $soldResponse = new SoldResponse($data);

        // Call the getRedirect method and assert the expected redirect URL
        $this->assertEquals('https://example.com/redirect', $soldResponse->getRedirect());
    }
}
