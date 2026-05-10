<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
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
        re
    
    }
}
