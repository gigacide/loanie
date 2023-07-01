<?php

namespace App\Validation\database\factories;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lead::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => Str::uuid(),
            'source_id' => null,
            'loan_id' => null,
            'applicant_id' => null,
            'residence_id' => null,
            'employer_id' => null,
            'bank_id' => null,
            'consent_id' => null,
            'transaction_id' => $this->faker->unique()->randomNumber(),
            'affiliate_id' => $this->faker->word,
            'subid' => $this->faker->word,
            'offer_id' => $this->faker->numberBetween(1, 10),
            'tier' => $this->faker->word,
            'minCommissionAmount' => $this->faker->randomFloat(2, 100, 1000),
            'maxCommissionAmount' => $this->faker->randomFloat(2, 1000, 5000),
            'timeout' => $this->faker->numberBetween(30, 120),
            'istest' => $this->faker->boolean,
            'buyer_id' => $this->faker->numberBetween(1, 5),
            'buyer_tier_id' => $this->faker->word,
            'affiliate_lead_price' => $this->faker->randomFloat(2, 10, 100),
            'buyer_lead_price' => $this->faker->randomFloat(2, 50, 200),
            'leadStatus' => $this->faker->numberBetween(1, 3),
            'model_type' => $this->faker->randomElement(['CPA', 'CPF', 'Hybrid']),
            'quality_score' => $this->faker->numberBetween(0, 100),
            'isRedirected' => $this->faker->boolean,
            'redirectUrl' => $this->faker->url,
        ];
    }
}
