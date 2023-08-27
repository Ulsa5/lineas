<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Smartphone>
 */
class SmartphoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'marca' => $this->faker->randomElement(['samsung','lg','motorola','oppo','huawei','xiaomi','one plus','honor']),
            'modelo' => $this->faker->name(),
            'color' => $this->faker->colorName(),
            'imei' => $this->faker->numerify('#################'),
        ];
    }
}
