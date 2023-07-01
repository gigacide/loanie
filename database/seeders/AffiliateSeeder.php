<?php

namespace App\Validation\database\seeders;

use App\Models\Affiliate;
use Illuminate\Database\Seeder;

class AffiliateSeeder extends Seeder
{
    public function run()
    {
        Affiliate::factory()->count(10)->create();
    }
}
