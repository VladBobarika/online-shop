<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
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
            'status' => $this->faker->boolean(),
            'creation_year' => $this->faker->year(),
            'logo' => $this->faker->imageUrl(600, 600),
        ];
    }
}
