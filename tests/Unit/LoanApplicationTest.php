<?php

namespace Tests\Unit\Models;

use App\Models\Applicant;
use App\Models\LoanApplication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Tests\TestCase;

class LoanApplicationTest extends TestCase
{
    use RefreshDatabase;

    public function testApplicantRelationship()
    {
        $loanApplication = LoanApplication::factory()->create();
        $applicant = Applicant::factory()->create(['loan_application_id' => $loanApplication->id]);

        $result = $loanApplication->applicant();

        $this->assertInstanceOf(Applicant::class, $result->getRelated());
        $this->assertEquals($applicant->id, $result->first()->id);
    }

    public function testAffiliateRelationship()
    {
        $loanApplication = LoanApplication::factory()->create();
        $affiliate = Affiliate::factory()->create(['loan_application_id' => $loanApplication->id]);

        $result = $loanApplication->affiliate();

        $this->assertInstanceOf(Affiliate::class, $result->getRelated());
        $this->assertEquals($affiliate->id, $result->first()->id);
    }

    public function testStoreMethodSavesModels()
    {
        $data = [
            'loanApplication' => [
                'applicant_id' => 1,
                'affiliate_id' => 2,
                'loan_amount' => 1000,
            ],
            'applicant' => [
                // applicant data
            ],
            'source' => [
                // source data
            ],
            // other models' data
        ];

        $loanApplication = new LoanApplication();

        $loanApplication->store($data);

        $this->assertDatabaseHas('loan_applications', [
            'applicant_id' => 1,
            'affiliate_id' => 2,
            'loan_amount' => 1000,
        ]);

        // Assert that other models' data is also saved in the respective tables
        $this->assertDatabaseHas('applicants', [
            // applicant data
        ]);
        $this->assertDatabaseHas('sources', [
            // source data
        ]);
        // assert other models' data

        // ... Add more assertions as needed
    }
}
