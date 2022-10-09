<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Language;
use App\Models\CountryLanguage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountryLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = Language::all();

        // Populate the pivot table
        Country::all()->each(function ($country) use ($languages) { 
            $country->languages()->attach(
                $languages->random(rand(1, 3))->pluck('id')->toArray()
            ); 
        });
    }
}
