<?php

namespace App\Validation\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $applicants = [
            [
                'nameTitle' => 'Mr',
                'firstName' => 'John',
                'lastName' => 'Doe',
                'dateOfBirthDay' => 15,
                'dateOfBirthMonth' => 6,
                'dateOfBirthYear' => 1990,
                'ssn' => '123-45-6789',
                'email' => 'john.doe@example.com',
                'homePhoneNumber' => '123-456-7890',
                'cellPhoneNumber' => '987-654-3210',
                'workPhoneNumber' => '555-123-4567',
                'maritalStatus' => 'Single',
                'dependants' => 0,
                'inMilitary' => false,
                'drivingLicenseState' => 'NY',
                'drivingLicenseNumber' => 'A123456789',
                'creditType' => 'Excellent',
                'callTime' => 'Anytime',
            ],
            [
                'nameTitle' => 'Mrs',
                'firstName' => 'Jane',
                'lastName' => 'Smith',
                'dateOfBirthDay' => 10,
                'dateOfBirthMonth' => 9,
                'dateOfBirthYear' => 1985,
                'ssn' => '987-65-4321',
                'email' => 'jane.smith@example.com',
                'homePhoneNumber' => '555-789-1234',
                'cellPhoneNumber' => '987-654-3210',
                'workPhoneNumber' => '123-456-7890',
                'maritalStatus' => 'Married',
                'dependants' => 2,
                'inMilitary' => false,
                'drivingLicenseState' => 'CA',
                'drivingLicenseNumber' => 'B987654321',
                'creditType' => 'Good',
                'callTime' => 'Evening',
            ],
            // Add more applicant data as needed
        ];

        // Insert the applicant data into the applicants table
        DB::table('applicants')->insert($applicants);
    }
}
