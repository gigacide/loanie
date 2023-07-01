<?php

namespace App\Validation\database\factories;

use App\Models\Bank;
use Illuminate\Database\Eloquent\Factories\Factory;

class BankFactory extends Factory
{
    protected $model = Bank::class;

    public function definition()
    {
        return [
            'bankAccountType' => $this->faker->randomElement(['Checking', 'Savings']),
            'bankRoutingNumber' => $this->faker->bankRoutingNumber,
            'bankAccountNumber' => $this->faker->bankAccountNumber,
            'monthsAtBank' => $this->faker->numberBetween(1, 24),
            'bankName' => $this->faker->company,
            'bankPhone' => $this->faker->phoneNumber,
            'directDeposit' => $this->faker->boolean,
        ];
    }
}
