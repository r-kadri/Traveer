<?php

namespace Database\Seeders;

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
        CountryLanguage::factory(14)->create();
    }
}
