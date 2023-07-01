<?php

use App\Services\CustomResponse;
use PHPUnit\Framework\TestCase;

class CustomResponseTest extends TestCase
{
    public function testGetStatus()
    {
        // Create an instance of CustomResponse with dummy data
        $data = [
            'Status' => 'success',
            // Add additional data fields as needed
        ];
        $customResponse = new CustomResponse($data);

        // Call the getStatus method and assert the expected status
        $this->assertEquals('success', $customResponse->getStatus());
    }

    // Add additional test methods as needed for other methods and logic in the CustomResponse class
}

