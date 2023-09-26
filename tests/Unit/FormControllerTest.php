<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Mockery;
use App\Buyers\ZeroParallel\Response\JsonResponse;
use App\Http\Controllers\FormController;
use App\Models\LoanApplication;
use App\Services\Postback\PostbackService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class FormControllerTest extends TestCase
{
//    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // You may need to set up your application's environment or database configuration here
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        Mockery::close();
    }

    public function testProcessWithValidRequest()
    {
        // Create a mock for ZeroParallelApi
        $zeroParallelApiMock = Mockery::mock('App\Buyers\ZeroParallel\ZeroParallelApi');
        $zeroParallelApiMock->shouldReceive('sendLoanApplication')
            ->andReturn(new JsonResponse(['status' => 1, 'status_text' => 'sold']));

        // Create a mock for PostbackService
        $postbackServiceMock = Mockery::mock('App\Services\Postback\PostbackService');
        $postbackServiceMock->shouldReceive('sendPostback')
            ->once(); // Ensure sendPostback is called once

        // Create a test request with valid data
        $data = [
            "campaign" => null,
            "affiliate_id" => "YDLr",
            "offer_id" => "1",
            "transaction_id" => "aaacb1d5-d5df-4b81-8ddf-c744a8b17c99",
            "aff_sub" => "1234",
            "aff_sub2" => "",
            "aff_sub3" => "",
            "aff_sub4" => "",
            "aff_sub5" => "",
            "istest" => false,
            "subid" => null,
            "timeout" => 210,
            "minCommissionAmount" => 0,
            "maxCommissionAmount" => 0,
            "source" => [
                "userAgent" => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:109.0) Gecko/20100101 Firefox/117.0",
                "ipAddress" => "127.0.0.1",
                "creationUrl" => "www.loanieloans.com",
                "referringUrl" => "www.loanieloans.com"
            ],
            "loan" => [
                "loanAmount" => 200,
                "loanTerms" => 3,
                "loanPurpose" => 1
            ],
            "applicant" => [
                "nameTitle" => 1,
                "firstName" => "Carl",
                "lastName" => "Howe",
                "dateOfBirthDay" => "09",
                "dateOfBirthMonth" => "01",
                "dateOfBirthYear" => "1990",
                "email" => "howcarl12@gmail.com",
                "homePhoneNumber" => "9876543210",
                "cellPhoneNumber" => "9876543210",
                "workPhoneNumber" => "9876543210",
                "dependants" => 0,
                "numberOfAdults" => 2,
                "maritalStatus" => 2,
                "ssn" => "123456993",
                "drivingLicenseNumber" => "FL292383838",
                "inMilitary" => 1,
                "drivingLicenseState" => "NY",
                "callTime" => 1,
                "creditType" => 4
            ],
            "employer" => [
                "employerName" => "tarzan",
                "jobTitle" => "jungle",
                "employmentIndustry" => 3,
                "monthsAtEmployer" => "12",
                "incomeSource" => 1,
                "incomeCycle" => 1,
                "monthlyIncome" => 3000,
                "incomePaymentType" => 1,
                "nextPayDateDay" => "09",
                "nextPayDateMonth" => "25",
                "nextPayDateYear" => "2023",
                "followingPayDateDay" => "09",
                "followingPayDateMonth" => "29",
                "followingPayDateYear" => "2023"
            ],
            "residence" => [
                "houseNumber" => "12",
                "addressStreet1" => "north street",
                "city" => "avenue",
                "addressCountryCode" => "us",
                "state" => "FL",
                "monthsAtAddress" => 12,
                "zip" => "90210",
                "residentialStatus" => 1,
                "typeOfHousing" => 0,
                "numberOfRenters" => null,
                "monthlyMortgageRent" => 400
            ],
            "bank" => [
                "bankName" => "Bank of america",
                "bankAccountNumber" => "98765432",
                "monthsAtBank" => 12,
                "bankAccountType" => 1,
                "bankRoutingNumber" => "123456789",
                "directDeposit" => "yes"
            ],
            "consent" => [
                "consentFinancial" => true,
                "consentToCreditSearch" => true,
                "consentToMarketingEmails" => true,
                "consentToMarketingSms" => true,
                "consentToMarketingPhone" => false
            ],
            "additional" => []
        ];


        $request = new Request($data);

        // Create an instance of FormController with mock dependencies
        $formController = new FormController($zeroParallelApiMock, $postbackServiceMock);

        // Call the process method with the test request
        $response = $formController->process($request);

        // Assert that the response is a JSON string with specific content (you can adjust this based on your expectations)
        $this->assertJson($response);
        $this->assertJsonStringEqualsJsonString(json_encode(['status' => 1, 'status_text' => 'sold']), $response);
    }

    public function testProcessWithInvalidRequest()
    {
        // Create a test request with invalid data
        $data = [
            // Your invalid test data here
        ];
        $request = new Request($data);

        // Create an instance of FormController
        $formController = new FormController(Mockery::mock('App\Buyers\ZeroParallel\ZeroParallelApi'), Mockery::mock('App\Services\Postback\PostbackService'));

        // Expect a ValidationException to be thrown
        $this->expectException(ValidationException::class);

        // Call the process method with the test request
        $formController->process($request);
    }
}

