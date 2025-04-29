<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        // Arrays for more realistic data generation
        $continents = ['North America', 'South America', 'Europe', 'Asia', 'Africa', 'Australia', 'Antarctica'];
        $countries = [
            'United States', 'Canada', 'United Kingdom', 'France', 'Germany', 'Spain', 'Italy',
            'Japan', 'China', 'Australia', 'Brazil', 'Argentina', 'Mexico', 'India', 'South Africa',
            'Russia', 'Sweden', 'Norway', 'Egypt', 'Kenya', 'Nigeria', 'South Korea', 'Thailand'
        ];
        
        $cities = [];
        
        for ($i = 0; $i < 20; $i++) {
            $country = $faker->randomElement($countries);
            $continent = $faker->randomElement($continents);
            $isCapital = $faker->boolean(20); // 20% chance of being a capital
            
            $cities[] = [
                'name' => $faker->city,
                'country' => $country,
                'continent' => $continent,
                'population' => $faker->numberBetween(100000, 20000000),
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude,
                'known_for' => $faker->sentence(3, true),
                'founded_year' => $faker->numberBetween(100, 2000),
                'is_capital' => $isCapital,
                'annual_tourists' => $faker->numberBetween(500000, 70000000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        
        DB::table('cities')->insert($cities);
    }
}