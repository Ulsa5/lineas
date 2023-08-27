<?php

namespace Database\Factories;

use App\Models\Telco;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'minutos' => $this->faker->word(),
            'internet' => $this->faker->word().' GB',
            'beneficios' => $this->faker->word(),
            'costo' => $this->faker->randomElement([100,150,199,250,299,399,450,499,599,750]),
            'contrato' => $this->faker->randomElement([12,18,24]),
            'telco_id' => Telco::all()->random()->id,
        ];
    }
}
