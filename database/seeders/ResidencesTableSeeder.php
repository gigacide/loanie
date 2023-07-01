<?php

namespace App\Validation\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResidencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $residences = [
            [
                'houseNumber' => '123',
                'houseName' => 'ABC Villa',
                'residentialStatus' => 'Owned',
                'addressStreet1' => 'Main Street',
                'city' => 'Cityville',
                'state' => 'State',
                'zip' => '12345',
                'monthsAtAddress' => 24,
            ],
            [
                'houseNumber' => '456',
                'houseName' => null,
                'residentialStatus' => 'Rented',
                'addressStreet1' => 'Second Avenue',
                'city' => 'Townsville',
                'state' => 'State',
                'zip' => '67890',
                'monthsAtAddress' => 12,
            ],
            // Add more residence data as needed
        ];

        // Insert the residence data into the residences table
        DB::table('residences')->insert($residences);
    }
}
