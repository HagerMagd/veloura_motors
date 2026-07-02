<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials=Testimonial::latest()->paginate(9);
        return view('frontend.testimonials',compact('testimonials'));
    }
}
