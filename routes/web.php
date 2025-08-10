<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;




Route::get("/home",function(){
  return "Hello world";
});

Route::get("/about",function(){
    return "About";
});

Route::get("/contact",function(){
     return "Contact";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get("/prognoza",[WeatherController::class,'index']);









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
