<?php

namespace Tests\Unit\Models;

use App\Models\Affiliate;
use App\Models\CommissionLog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CommissionLogTest extends TestCase
{
    use RefreshDatabase;

    public function testStoreMethodCreatesCommissionLog()
    {
        // Create a sample Affiliate
        $affiliate = Affiliate::factory()->create();

        // Define the offer ID and price
        $offerId = 123;
        $price = 99.99;

        // Call the store method on CommissionLog model
        $commissionLog = CommissionLog::store($affiliate, $offerId, $price);

        // Assert that the CommissionLog was created with the correct values
        $this->assertDatabaseHas('commission_logs', [
            'affiliate_id' => $affiliate->id,
            'offer_id' => $offerId,
            'sub_id' => $affiliate->sub_id,
            'aff_sub' => $affiliate->aff_sub,
            'aff_sub2' => $affiliate->aff_sub2,
            'aff_sub3' => $affiliate->aff_sub3,
            'aff_sub4' => $affiliate->aff_sub4,
            'aff_sub5' => $affiliate->aff_sub5,
            'commission' => $price,
        ]);

        // Assert that the returned CommissionLog instance is of the correct class
        $this->assertInstanceOf(CommissionLog::class, $commissionLog);
    }
}
