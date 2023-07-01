<?php

namespace App\Validation\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consents = [
            [
                'consentFinancial' => true,
                'consentCreditSearch' => false,
                'consentToMarketingEmails' => true,
            ],
            [
                'consentFinancial' => false,
                'consentCreditSearch' => true,
                'consentToMarketingEmails' => false,
            ],
            // Add more consent data as needed
        ];

        // Insert the consent data into the consents table
        DB::table('consents')->insert($consents);
    }
}
