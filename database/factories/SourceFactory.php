<?php

namespace App\Validation\database\factories;

use App\Models\Source;
use Illuminate\Database\Eloquent\Factories\Factory;

class SourceFactory extends Factory
{
    protected $model = Source::class;

    public function definition()
    {
        return [
            'userAgent' => $this->faker->userAgent,
            'creationUrl' => $this->faker->url,
            'referringUrl' => $this->faker->url,
            'ipAddress' => $this->faker->ipv4,
        ];
    }
}
