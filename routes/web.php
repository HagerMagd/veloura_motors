<?php

use App\Http\Controllers\frontend\CarController;
use App\Http\Controllers\frontend\FeatureController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/cars',[CarController::class,'index'])->name('cars.index');
Route::get('/featuredCars',[CarControlle::class,'featuredCars'])->name('featuredCars');

