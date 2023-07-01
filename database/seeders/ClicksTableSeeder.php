<?php

namespace App\Validation\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClicksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clicks = [
            [
                'affiliate_id' => 'your_affiliate_id_1',
                'offer_id' => 1,
                'aff_sub' => 'your_aff_sub_value_1',
                'aff_sub2' => 'your_aff_sub2_value_1',
                'aff_sub3' => 'your_aff_sub3_value_1',
                'aff_sub4' => 'your_aff_sub4_value_1',
                'aff_sub5' => 'your_aff_sub5_value_1',
            ],
            [
                'affiliate_id' => 'your_affiliate_id_2',
                'offer_id' => 2,
                'aff_sub' => 'your_aff_sub_value_2',
                'aff_sub2' => 'your_aff_sub2_value_2',
                'aff_sub3' => 'your_aff_sub3_value_2',
                'aff_sub4' => 'your_aff_sub4_value_2',
                'aff_sub5' => 'your_aff_sub5_value_2',
            ],
            // Add more click data as needed
        ];

        // Insert the clicks data into the clicks table
        DB::table('clicks')->insert($clicks);
    }
}
