<?php

use App\Http\Controllers\frontend\CarController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\FeatureController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\SellRequestController;
use App\Http\Controllers\Frontend\TestimonialController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/cars',[CarController::class,'index'])->name('cars.index');
Route::get('/featuredCars',[CarController::class,'featuredCars'])->name('featuredCars');
Route::get('/latestcar',[CarController::class,'latestcar'])->name('latestcar');
Route::get('/brands/{id}',[CarController::class,'showBrandCars'])->name('show.brand');
Route::get('/cardateils/{id}',[CarController::class,'showcardatails'])->name('showcardatails');
Route::get('/booking-Request/{id}',[CarController::class,'BookingRequest'])->name('booking.request');
Route::get('/RequestCarForm',[CarController::class,'SellRequestForm'])->name('sellform');

//Sell request car form  
Route::get('/sellrequestcar',[SellRequestController::class,'index'])->name('sell.request.form');

Route::post('/sellrequestcar-store',[SellRequestController::class,'store'])->name('sell.request.store');

//Testimonial 

Route::get('/testimonial',[TestimonialController::class,'index'])->name('testimonial');
//contact-us
Route::get('/contact-us',[ContactUsController::class,'index'])->name('contact.us');
Route::post('/store',[ContactUsController::class,'store'])->name('contact.store');

