<?php

namespace Database\Seeders;

use App\Models\WeatherModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserWeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $city = $this->command->getOutput()->ask("What city would you like to use?", );
        if($city == null)
        {
            $this->command->getOutput()->error("No city was specified.");
        }
        $temperature = $this->command->getOutput()->ask("What temperature would you like to use?",);
        if($temperature == null)
        {
            $this->command->getOutput()->error("No temperature was specified.");
        }

        WeatherModel::create
        ([
           "city" => $city,
           "temperature" => $temperature,
        ]);

        $this->command->getOutput()->info("Weather was created.");
    }
}
