<?php

namespace App\Validation\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offers = [
            [
                'name' => 'Offer 1',
                'thresholdAmount' => 100.00,
                'payout' => 10.00,
                'revenue' => 5.00,
            ],
            [
                'name' => 'Offer 2',
                'thresholdAmount' => 200.00,
                'payout' => 15.00,
                'revenue' => 8.00,
            ],
            // Add more offer data as needed
        ];

        // Insert the offer data into the offers table
        DB::table('offers')->insert($offers);
    }
}
