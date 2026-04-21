<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = ['title','subtitle','image','btn1_txt','btn2_txt','btn3_txt','btn1_link','btn2_link','btn3_link'];
}
