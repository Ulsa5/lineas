<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Occupation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
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
            'dpi' => $this->faker->numerify('#############'),
            'department_id' => Department::all()->random()->id,
            'occupation_id' => Occupation::all()->random()->id,
        ];
    }
}
