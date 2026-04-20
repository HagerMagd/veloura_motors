<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /** @use HasFactory<\Database\Factories\SettingFactory> */
    use HasFactory;
 protected $fillable = ['bio','site_name','site_email','phone','logo','country','city','street','year','facebook','instagram','whatsapp'];

}
