<?php

namespace App\Validation\database\factories;

use App\Models\Affiliate;
use Illuminate\Database\Eloquent\Factories\Factory;

class AffiliateFactory extends Factory
{
    protected $model = Affiliate::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'affiliate_id' => $this->faker->randomNumber(),
            'sub_id' => $this->faker->randomNumber(),
            'offer_id' => $this->faker->randomNumber(),
            'aff_sub' => $this->faker->word,
            'aff_sub2' => $this->faker->word,
            'aff_sub3' => $this->faker->word,
            'aff_sub4' => $this->faker->word,
            'aff_sub5' => $this->faker->word,
            'postback_url' => $this->faker->word,
            'cpl_earnings' => 0.00,
        ];
    }
}
