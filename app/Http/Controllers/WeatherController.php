<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        $prognoza = [
          "Beograd" => 22,
            "Novi sad" => 23,
            "Sarajevo" => 24,
            "Zagreb" => 26,

        ];

        return view('weather', compact('prognoza'));
    }
}
