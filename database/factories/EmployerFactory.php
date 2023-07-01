<?php

namespace App\Validation\database\factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployerFactory extends Factory
{
    protected $model = Employer::class;

    public function definition()
    {
        return [
            'employerName' => $this->faker->company,
            'employmentStatus' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract']),
            'jobTitle' => $this->faker->jobTitle,
            'monthlyIncome' => $this->faker->numberBetween(1000, 5000),
            'incomeCycle' => $this->faker->randomElement(['1', '2', '3']),
            'incomeSource' => $this->faker->randomElement(['1', '2', '3']),
            'incomePaymentType' => 1,
            'monthsAtEmployer' => $this->faker->numberBetween(1, 12),
            'nextPayDateDay' => $this->faker->numberBetween(1, 28),
            'nextPayDateMonth' => $this->faker->numberBetween(1, 12),
            'nextPayDateYear' => $this->faker->numberBetween(date('Y'), date('Y') + 2),
            'followingPayDateDay' => $this->faker->numberBetween(1, 28),
            'followingPayDateMonth' => $this->faker->numberBetween(1, 12),
            'followingPayDateYear' => $this->faker->numberBetween(date('Y'), date('Y') + 2),
        ];
    }
}
