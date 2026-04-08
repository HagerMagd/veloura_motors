<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    /** @use HasFactory<\Database\Factories\CarImageFactory> */
    use HasFactory;
    protected $fillable = ['path','car_id'];
    public function car(){
        return $this->belongsTo(Car::class);
    }
}
