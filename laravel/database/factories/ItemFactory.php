<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'price' => $this->faker->randomNumber(4, false)
        ];
    }
}
