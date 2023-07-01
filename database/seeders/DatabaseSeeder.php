<?php

namespace App\Validation\database\seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Source::factory(10)->create();
         \App\Models\Loan::factory(10)->create();
         \App\Models\Applicant::factory(10)->create();
         \App\Models\Residence::factory(10)->create();
         \App\Models\Employer::factory(10)->create();
         \App\Models\Bank::factory(10)->create();
         \App\Models\Consent::factory(10)->create();

    }
}
