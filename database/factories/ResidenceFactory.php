<?php

namespace App\Validation\database\factories;

use App\Models\Residence;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResidenceFactory extends Factory
{
    protected $model = Residence::class;

    public function definition()
    {
        return [
            'houseNumber' => $this->faker->buildingNumber,
            'houseName' => $this->faker->secondaryAddress,
            'residentialStatus' => $this->faker->randomElement(['Owner', 'Renter']),
            'addressStreet1' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'state' => $this->faker->stateAbbr,
            'zip' => $this->faker->postcode,
            'monthsAtAddress' => $this->faker->numberBetween(1, 120),
        ];
    }
}
