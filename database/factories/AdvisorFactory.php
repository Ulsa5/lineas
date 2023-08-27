<?php

namespace Database\Factories;

use App\Models\Telco;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Advisor>
 */
class AdvisorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'telefono' => $this->faker->numerify('########'),
            'correo' => $this->faker->unique()->safeEmail(),
            'asesor' => $this->faker->randomElement(['venta','post venta']),
            'telco_id' => Telco::all()->random()->id,
        ];
    }
}
