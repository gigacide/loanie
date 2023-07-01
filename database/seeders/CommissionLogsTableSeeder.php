<?php

namespace App\Validation\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommissionLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commissionLogs = [
            [
                'affiliate_id' => 1,
                'offer_id' => 1,
                'sub_id' => 'your_sub_id_value_1',
                'aff_sub' => 'your_aff_sub_value_1',
                'aff_sub2' => 'your_aff_sub2_value_1',
                'aff_sub3' => 'your_aff_sub3_value_1',
                'aff_sub4' => 'your_aff_sub4_value_1',
                'aff_sub5' => 'your_aff_sub5_value_1',
                'commission' => 10.00,
            ],
            [
                'affiliate_id' => 2,
                'offer_id' => 2,
                'sub_id' => 'your_sub_id_value_2',
                'aff_sub' => 'your_aff_sub_value_2',
                'aff_sub2' => 'your_aff_sub2_value_2',
                'aff_sub3' => 'your_aff_sub3_value_2',
                'aff_sub4' => 'your_aff_sub4_value_2',
                'aff_sub5' => 'your_aff_sub5_value_2',
                'commission' => 15.00,
            ],
            // Add more commission log data as needed
        ];

        // Insert the commission log data into the commission_logs table
        DB::table('commission_logs')->insert($commissionLogs);
    }
}
