<?php

namespace App\Validation\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employers = [
            [
                'employerName' => 'ABC Company',
                'employmentStatus' => 'Full-Time',
                'jobTitle' => 'Software Engineer',
                'monthlyIncome' => 5000.00,
                'incomeCycle' => 1,
                'incomeSource' => 1,
                'incomePaymentType' => 1,
                'monthsAtEmployer' => 12,
                'nextPayDateDay' => 15,
                'nextPayDateMonth' => 7,
                'nextPayDateYear' => 2023,
                'followingPayDateDay' => 30,
                'followingPayDateMonth' => 7,
                'followingPayDateYear' => 2023,
            ],
            [
                'employerName' => 'XYZ Corporation',
                'employmentStatus' => 'Part-Time',
                'jobTitle' => 'Sales Associate',
                'monthlyIncome' => 2500.00,
                'incomeCycle' => 2,
                'incomeSource' => 2,
                'incomePaymentType' => 2,
                'monthsAtEmployer' => 6,
                'nextPayDateDay' => 10,
                'nextPayDateMonth' => 7,
                'nextPayDateYear' => 2023,
                'followingPayDateDay' => 24,
                'followingPayDateMonth' => 7,
                'followingPayDateYear' => 2023,
            ],
            // Add more employer data as needed
        ];

        // Insert the employer data into the employers table
        DB::table('employers')->insert($employers);
    }
}
