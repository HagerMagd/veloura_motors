<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Feature;
use App\Models\HeroSection;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $hero_section=HeroSection::first();
        $car_count=Car::count();
        $brand_count=Brand::count();
        $user_count=User::count();
        $latest_cars= Car::with('carimages')->where('status',1)->latest()->take(4)->get();
        $features=Feature::where('status',1)->latest()->take(3)->get();
        $advantages=Advantage::where('status',1)->latest()->take(6)->get();
        $featured_cars=Car::with('carimages')->where('status',1)->where('featured',1)->latest()->take(3)->get();

        
        return view('frontend.index',compact('hero_section','car_count',
        'latest_cars','features','advantages','user_count','brand_count','featured_cars'));
    }
}
