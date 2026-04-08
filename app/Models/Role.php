<?php

namespace App\Models;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use HasFactory;
    protected $fillable = ['role_name','permessions'];
    protected $casts = ['permessions'=>'array'];
    public function admins(){
        return $this->hasMany(Admin::class);

    }
    
}
