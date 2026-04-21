<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $hero_section=HeroSection::first();
        $car_count=Car::count();
        return view('frontend.index',compact('hero_section','car_count'));
    }
}
