<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CountryLanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $countries = Country::all();
        $countriesIds = array();
        foreach ($countries as $c) {
            $countriesIds[] = $c->id;
        }

        $languages = Language::all();
        $languagesIds = array();
        foreach ($languages as $l) {
            $languagesIds[] = $l->id;
        }

        return [
            'country_id' => $this->faker->randomElement($countriesIds),
            'language_id' => $this->faker->randomElement($languagesIds)
        ];
    }
}
