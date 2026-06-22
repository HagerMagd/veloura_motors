<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellRequest extends Model
{
    /** @use HasFactory<\Database\Factories\SellRequestFactory> */
    use HasFactory;
    protected $fillable = ['name','phone','status','message','car_name','model',
    'year','price','transmission','car_brand','maileage','fuel_type'];

    public function sellImages(){
        return $this->hasMany(SellRequestImages::class, 'sell_request_id');
    }
}
