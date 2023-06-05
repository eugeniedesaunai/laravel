<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(),
            'duration' => rand(300, 15000), // Entre 5 minutes et un peu plus de 4 heures
            'release' => $this->faker->date(),
        ];
    }
}
