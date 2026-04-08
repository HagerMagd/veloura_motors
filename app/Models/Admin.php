<?php

namespace App\Models;

use App\Models\Car;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /** @use HasFactory<\Database\Factories\AdminFactory> */
    use HasFactory;

    protected $fillable = ['name','email','password','status','role_id'];
    protected $casts = ['password'=>'hashed'];
    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function cars(){
        return $this->hasMany(Car::class);
    }
    
}

