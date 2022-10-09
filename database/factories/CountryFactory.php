<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'France',
                'Spain',
                'Italia',
                'Algeria',
                'Tunisia',
                'Palestine'
            ]),
            'description' => $this->faker->sentence(15),
            'areaKm2' => $this->faker->randomNumber(2)
        ];
    }
}
