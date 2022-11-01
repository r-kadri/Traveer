<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::get('https://restcountries.com/v3.1/all')->json();
        foreach ($response as $country) {
            Country::create([
                'name' => $country['name']['common'],
                'areaKm2' => $country['area']
            ]);
        }

        // necessary since years
        Country::where('name', 'Israel')->delete();
    }
}
