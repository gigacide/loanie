<?php

namespace App\Validation\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loans = [
            [
                'loanAmount' => 1000.00,
                'loanTerms' => 12,
                'loanPurpose' => 1,
            ],
            [
                'loanAmount' => 2000.00,
                'loanTerms' => 24,
                'loanPurpose' => 2,
            ],
            // Add more loan data as needed
        ];

        // Insert the loan data into the loans table
        DB::table('loans')->insert($loans);
    }
}
