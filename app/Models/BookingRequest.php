<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
    /** @use HasFactory<\Database\Factories\BookingRequestFactory> */
    use HasFactory;
    protected $fillable = ['messege','ststus','user_id','car_id'];
    public function car(){
        return $this->belongsTo(Car::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
