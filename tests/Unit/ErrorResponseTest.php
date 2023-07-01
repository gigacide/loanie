<?php

use App\Services\ErrorResponse;
use PHPUnit\Framework\TestCase;

class ErrorResponseTest extends TestCase
{
    public function testGetStatus()
    {
        // Create an instance of ErrorResponse with dummy data
        $data = [
            'Status' => 'error',
            'Messages' => ['Invalid input', 'Missing required fields'],
        ];
        $errorResponse = new ErrorResponse($data);

        // Call the getStatus method and assert the expected status
        $this->assertEquals('error', $errorResponse->getStatus());
    }

    public function testGetMessages()
    {
        // Create an instance of ErrorResponse with dummy data
        $data = [
            'Status' => 'error',
            'Messages' => ['Invalid input', 'Missing required fields'],
        ];
        $errorResponse = new ErrorResponse($data);

        // Call the getMessages method and assert the expected messages array
        $this->assertEquals(['Invalid input', 'Missing required fields'], $errorResponse->getMessages());
    }
}
