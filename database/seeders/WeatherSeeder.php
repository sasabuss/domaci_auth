<?php

namespace Database\Seeders;

use App\Models\WeatherModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prognoza = [
            "Beograd" => 22,
            "Novi sad" => 23,
            "Sarajevo" => 24,
            "Zagreb" => 26,

        ];

        foreach ($prognoza as $city => $temperature)
        {
            WeatherModel::create([
                'city' => $city,
                'temperature' => $temperature,]);
        };

    }
}
