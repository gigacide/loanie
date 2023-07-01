<?php

namespace Tests\Unit\Http\Controllers;

use App\Http\Controllers\FormController;
use App\Models\Affiliate;
use App\Models\CommissionLog;
use App\Models\LoanApplication;
use App\Models\Offer;
use App\Services\LoanApplicationService;
use App\Services\PostbackService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Mockery;
use Tests\TestCase;

class FormControllerTest extends TestCase
{
    public function testProcess_ValidRequest_ReturnsJsonResponse()
    {
        // Mock dependencies
        $loanApplicationService = Mockery::mock(LoanApplicationService::class);
        $postbackService = Mockery::mock(PostbackService::class);

        // Mock LoanApplicationValidation class
        $this->mockValidation();

        // Create a fake request
        $request = Mockery::mock(Request::class);
        $request->shouldReceive('all')->once()->andReturn(['valid' => 'data']);

        // Create a fake loan application
        $loanApplication = new LoanApplication();
        $loanApplicationService->shouldReceive('sendLoanApplication')->once()->andReturn(['api' => 'response']);
        $loanApplicationService->shouldReceive('handleLoanApplicationResponse')->once()->andReturn(['response' => 'data']);

        // Mock database models
        Affiliate::shouldReceive('where')->with('affiliate_id', 'test_affiliate_id')->andReturnSelf();
        Affiliate::shouldReceive('first')->andReturn(new Affiliate());
        Offer::shouldReceive('where')->with('id', 'test_offer_id')->andReturnSelf();
        Offer::shouldReceive('first')->andReturn(new Offer());

        // Mock the applyProfit method
        $formController = Mockery::mock(FormController::class)->makePartial();
        $formController->shouldReceive('applyProfit')->once()->andReturn(90.0);

        // Mock the isCPLOffer method
        $formController->shouldReceive('isCPLOffer')->once()->andReturn(false);

        // Mock the accumulateEarningsForAffiliate method
        $formController->shouldReceive('accumulateEarningsForAffiliate')->once()->andReturn(new Affiliate());

        // Mock the sendPostback method
        $postbackService->shouldReceive('sendPostback')->once()->andReturn(['postback' => 'response']);

        // Mock the CommissionLog model
        CommissionLog::shouldReceive('store')->once();

        // Call the process method
        $response = $formController->process($request);

        // Assertions
        $this->assertInstanceOf(JsonResponse::class, $response);
        $this->assertEquals(['response' => 'data'], $response->getData(true));
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testProcess_ValidationException_ReturnsJsonResponseWithErrors()
    {
        // Mock dependencies
        $loanApplicationService = Mockery::mock(LoanApplicationService::class);
        $postbackService = Mockery::mock(PostbackService::class);

        // Mock ValidationException
        $this->mockValidationException();

        // Create a fake request
        $request = Mockery::mock(Request::class);
        $request->shouldReceive('all')->once()->andReturn(['invalid' => 'data']);

        // Call the process method
        $formController = new FormController($loanApplicationService, $postbackService);
        $response = $formController->process($request);

        // Assertions
        $this->assertInstanceOf(JsonResponse::class, $response);
        $this->assertEquals(['errors' => ['The valid field is required.']], $response->getData(true));
        $this->assertEquals(422, $response->getStatusCode());
    }
}

    // Helper methods.
