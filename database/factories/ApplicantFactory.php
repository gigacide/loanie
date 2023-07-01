<?php

namespace App\Validation\database\factories;

use App\Models\Applicant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Applicant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nameTitle' => $this->faker->title,
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'dateOfBirthDay' => $this->faker->numberBetween(1, 28),
            'dateOfBirthMonth' => $this->faker->numberBetween(1, 12),
            'dateOfBirthYear' => $this->faker->numberBetween(1950, 2000),
            'ssn' => $this->faker->regexify('[0-9]{3}-[0-9]{2}-[0-9]{4}'),
            'email' => $this->faker->email,
            'homePhoneNumber' => $this->faker->phoneNumber,
            'cellPhoneNumber' => $this->faker->phoneNumber,
            'workPhoneNumber' => $this->faker->phoneNumber,
            'maritalStatus' => $this->faker->randomElement(['Single', 'Married']),
            'dependants' => $this->faker->numberBetween(0, 5),
            'inMilitary' => $this->faker->boolean,
            'drivingLicenseState' => $this->faker->stateAbbr,
            'drivingLicenseNumber' => $this->faker->regexify('[A-Z0-9]{10}'),
            'creditType' => $this->faker->randomElement(['Excellent', 'Good', 'Fair']),
            'callTime' => $this->faker->randomElement(['Morning', 'Afternoon', 'Evening']),
        ];
    }
}
