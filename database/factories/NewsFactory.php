<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'header' => "Header: " . $this->faker->text(),
            'description' => "Description: " . $this->faker->text(),
        ];
    }
}
