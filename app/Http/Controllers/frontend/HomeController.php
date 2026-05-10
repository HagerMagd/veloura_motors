<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Feature;
use App\Models\HeroSection;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        //herp section
        $hero_section = HeroSection::first();

        // Statistics section
        $car_count = Car::count();
        $brand_count = Brand::count();
        $user_count = User::count();

        //lastest cars
        $latest_cars = Car::with('carimages')->where('status', 1)->latest()->take(4)->get();
        //features
        $features = Feature::where('status', 1)->latest()->take(3)->get();

        //advantages
        $advantages = Advantage::where('status', 1)->latest()->take(6)->get();
        //featured_cars
        $featured_cars = Car::with('carimages')->where('status', 1)->where('featured', 1)->latest()->take(3)->get();
        //testimonials
        $testimonials=Testimonial::latest()->take(3)->get();

        //brands

        $brands=Brand::all();
        return view('frontend.index', compact(
            'hero_section',
            'car_count',
            'latest_cars',
            'features',
            'advantages',
            'user_count',
            'brand_count',
            'featured_cars',
            'testimonials',
            'brands',
        ));
    }
}
