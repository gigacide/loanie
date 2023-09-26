<?php

use App\Services\LoanApplicationService;
use App\Services\ItMediaApiService;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\TestCase;

class LoanApplicationServiceTest extends TestCase
{
    protected LoanApplicationService $loanApplicationService;
    protected ItMediaApiService $mockedItMediaApiService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->mockedItMediaApiService = $this->createMock(ItMediaApiService::class);
        $this->loanApplicationService = new LoanApplicationService($this->mockedItMediaApiService);
    }

    /**
     * @throws GuzzleException
     */
    public function testSendLoanApplicationReturnsCustomResponse()
    {
        // Arrange
        $data = []; // Provide sample data

        $expectedResponse = new CustomResponse(); // Provide expected response object
        $this->mockedItMediaApiService->expects($this->once())
            ->method('sendLoanApplication')
            ->willReturn($expectedResponse);

        // Act
        $response = $this->loanApplicationService->sendLoanApplication($data);

        // Assert
        $this->assertInstanceOf(CustomResponse::class, $response);
    }

    /**
     * @throws GuzzleException
     */
    public function testSendLoanApplicationReturnsSoldResponse()
    {
        // Arrange
        $data = []; // Provide sample data

        $expectedResponse = new SoldResponse(); // Provide expected response object
        $this->mockedItMediaApiService->expects($this->once())
            ->method('sendLoanApplication')
            ->willReturn($expectedResponse);

        // Act
        $response = $this->loanApplicationService->sendLoanApplication($data);

        // Assert
        $this->assertInstanceOf(SoldResponse::class, $response);
    }

    /**
     * Add more test methods for other response types (RejectedWithPriceRejectResponse, ErrorResponse, RejectResponse) here
     */
}
