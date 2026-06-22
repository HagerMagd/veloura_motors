<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars =Car::with('carimages')->where('status',1)->latest()->paginate(9);

        return view('frontend.showcar',compact('cars'));
    }

    public function featuredCars(){
        $featuredCars=Car::with('carimages')->where('featured','1')->latest()->paginate(9);
                return view('frontend.featuredcars',compact('featuredCars'));

    }
    public function latestcar(){
    $latest_cars = Car::with('carimages')->where('status', 1)->latest()->paginate(9);
        return view('frontend.latestcars',compact('latest_cars'));
    }

    public function showBrandCars($id){
    $brands=Brand::with('cars.carimages')->findOrFail($id);
        return view('frontend.brands',compact('brands'));
    }
    public function showcardatails($id){
        $car_datalis=Car::with(['carimages','brand'])->findOrFail($id);
        return view('frontend.cardatails',compact('car_datalis'));
    }
    public function SellRequestForm(){
        return view('frontend.sellRequestForm');
    }
    public function BookingRequest($id){
        $car=Car::with('carimages')->findOrFail($id);
        return view('frontend.bookingRequest',compact('car'));

    }


    
}
