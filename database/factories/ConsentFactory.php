<?php

namespace App\Validation\database\factories;

use App\Models\Consent;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConsentFactory extends Factory
{
    protected $model = Consent::class;

    public function definition()
    {
        return [
            'consentFinancial' => $this->faker->boolean,
            'consentCreditSearch' => $this->faker->boolean,
            'consentToMarketingEmails' => $this->faker->boolean,
        ];
    }
}
