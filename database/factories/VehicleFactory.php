<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'year' => fake()->randomNumber(4, true),
            'make' => fake()->word(),
            'model' => fake()->word(),
            'trim_level' => fake()->word(),
            'description' => fake()->paragraph(),
            'project_expectations' => fake()->paragraph(),
            'details' => fake()->paragraph(),
            'color' => fake()->colorName(),
            'engine' => fake()->word(),
            'cylinders' => fake()->randomDigitNot(9),
            'horsepower' => fake()->randomNumber(3, true),
            'torque' => fake()->randomNumber(3, true),
            'transmission' => fake()->word(),
            'speeds' => fake()->randomDigit(),
            'is_manual' => fake()->boolean(),
            'rear_end' => fake()->word(),
            'brakes' => fake()->word(),
            'front_suspension' => fake()->sentence(),
            'rear_suspension' => fake()->sentence(),
        ];
    }
}
