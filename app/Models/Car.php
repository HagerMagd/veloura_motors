<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\BookingRequest;
use App\Models\Brand;
use App\Models\CarImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /** @use HasFactory<\Database\Factories\CarFactory> */
    use HasFactory;
    protected $fillable = ['name','model','year','price','mileage','fuel_type','transmission','desc','status','admin_id','brand_id'];
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
    public function booking_requests(){
        return $this->hasMany(BookingRequest::class);
    }
    public function carimages(){
        return $this->hasMany(CarImage::class);
    }
}

