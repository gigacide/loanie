<?php

namespace Tests\Unit\Services;

use App\Services\CustomResponse;
use App\Services\ErrorResponse;
use App\Services\ItMediaApiService;
use App\Services\RejectedResponse;
//use App\Services\RejectedWithPriceRejectResponse;
use App\Services\SoldResponse;
use GuzzleHttp\Client;
use Mockery\MockInterface;
use Tests\TestCase;

class ItMediaApiServiceTest extends TestCase
{
    public function testSendLoanApplicationReturnsRejectedResponse()
    {
        $responseData = [
            'Status' => 'Rejected',
        ];

        $service = $this->mockItMediaApiService();
        $service->shouldReceive('sendLoanApplication')->andReturn($responseData);

        $result = $service->sendLoanApplication([]);

        $this->assertInstanceOf(RejectedResponse::class, $result);
    }

    public function testSendLoanApplicationReturnsRejectedWithPriceRejectResponse()
    {
        $responseData = [
            'Status' => 'Rejected',
            'PriceRejectAmount' => 1000,
        ];

        $service = $this->mockItMediaApiService();
        $service->shouldReceive('sendLoanApplication')->andReturn($responseData);

        $result = $service->sendLoanApplication([]);

        $this->assertInstanceOf(RejectedWithPriceRejectResponse::class, $result);
    }

    public function testSendLoanApplicationReturnsErrorResponse()
    {
        $responseData = [
            'Status' => 'Error',
        ];

        $service = $this->mockItMediaApiService();
        $service->shouldReceive('sendLoanApplication')->andReturn($responseData);

        $result = $service->sendLoanApplication([]);

        $this->assertInstanceOf(ErrorResponse::class, $result);
    }

    public function testSendLoanApplicationReturnsSoldResponse()
    {
        $responseData = [
            'Status' => 'Sold',
        ];

        $service = $this->mockItMediaApiService();
        $service->shouldReceive('sendLoanApplication')->andReturn($responseData);

        $result = $service->sendLoanApplication([]);

        $this->assertInstanceOf(SoldResponse::class, $result);
    }

    public function testSendLoanApplicationReturnsCustomResponse()
    {
        $responseData = [
            'Status' => 'Custom',
        ];

        $service = $this->mockItMediaApiService();
        $service->shouldReceive('sendLoanApplication')->andReturn($responseData);

        $result = $service->sendLoanApplication([]);

        $this->assertInstanceOf(CustomResponse::class, $result);
    }

    private function mockItMediaApiService(): MockInterface
    {
        return $this->partialMock(ItMediaApiService::class, function ($mock) {
            $mock->shouldReceive('getClient')->andReturn($this->createMock(Client::class));
        });
    }
}
