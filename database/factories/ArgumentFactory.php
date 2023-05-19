<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArgumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2),
            'body' => $this->faker->sentence(12),
        ];
    }
}
