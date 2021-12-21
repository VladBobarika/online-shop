<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->realTextBetween(50, 100),
            'img' => $this->faker->imageUrl(600, 600),
            'price' => $this->faker->randomNumber(),
            'status' => $this->faker->boolean(),

        ];
    }
}
