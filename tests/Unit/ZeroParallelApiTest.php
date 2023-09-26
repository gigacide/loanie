<?php
// tests/Unit/ZeroParallelApiTest.php

namespace Tests\Unit;

use App\Buyers\ZeroParallel\ZeroParallelApi;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ZeroParallelApiTest extends TestCase
{
    use RefreshDatabase;

    public function testSendLoanApplication()
    {
        // Create a mock for dependencies such as DataMapper, ZeroParallelApiClient, and ZeroParallelLeadStatusApi
        // For this example, I'll use PHPUnit's built-in mocks

        $apiClient = $this->createMock(\App\Buyers\ZeroParallel\ZeroParallelApiClient::class);
        $dataMapper = $this->createMock(\App\Buyers\ZeroParallel\Mapper\DataMapper::class);
        $leadStatusApi = $this->createMock(\App\Buyers\ZeroParallel\ZeroParallelLeadStatusApi::class);

        // Create an instance of ZeroParallelApi with the mocked dependencies
        $zeroParallelApi = new ZeroParallelApi($apiClient, $dataMapper, $leadStatusApi);

        // Mock the necessary methods and responses for your test scenario
        $apiClient->expects($this->once())
            ->method('postLoanApplication')
            ->willReturn(['lead_id' => '123']);

        $leadStatusApi->expects($this->once())
            ->method('checkLeadStatus')
            ->willReturn(new \App\Buyers\ZeroParallel\Response\SoldResponse(['Status' => 1]));

        // Your test data
        $loanApplicationData = [
            // Provide your data here
        ];

        // Perform the test
        $result = $zeroParallelApi->sendLoanApplication($loanApplicationData);

        // Assertions
        $this->assertJson($result); // Assuming your response is in JSON format
        $this->assertEquals('{"Status":1}', $result); // Replace with your expected JSON response
    }
}
