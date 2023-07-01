<?php

namespace App\Validation\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = [
            [
                'bankAccountType' => 'Savings',
                'bankRoutingNumber' => '123456789',
                'bankAccountNumber' => '987654321',
                'monthsAtBank' => 12,
                'bankName' => 'Bank of Example',
                'bankPhone' => '123-456-7890',
                'directDeposit' => 'Yes',
            ],
            [
                'bankAccountType' => 'Checking',
                'bankRoutingNumber' => '987654321',
                'bankAccountNumber' => '123456789',
                'monthsAtBank' => 6,
                'bankName' => 'Example Bank',
                'bankPhone' => '987-654-3210',
                'directDeposit' => 'No',
            ],
            // Add more bank data as needed
        ];

        // Insert the bank data into the banks table
        DB::table('banks')->insert($banks);
    }
}
