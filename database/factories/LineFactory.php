<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Plan;
use App\Models\Telco;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Line>
 */
class LineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero' => $this->faker->numerify('########'),
            'icc' => $this->faker->numerify('#################'),
            'client_id' => Client::all()->random()->id,
            'telco_id' => Telco::all()->random()->id,
            'plan_id' => Plan::all()->random()->id,
        ];
    }
}
