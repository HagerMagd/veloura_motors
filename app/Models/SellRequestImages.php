<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellRequestImages extends Model
{
    /** @use HasFactory<\Database\Factories\SellRequestImagesFactory> */
    use HasFactory;
    protected $fillable = ['sell_request_id','image_path'];
    public function SellcarRequest(){
    return $this->belongsTo(SellRequest::class, 'sell_request_id');
    }
}
