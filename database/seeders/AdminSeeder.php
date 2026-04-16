<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin=Role::where('role_name','admin')->first();
        Admin::create([
        'name'=>'hager magd',
        'email'=>'hagermagd44@gmail',
        'password'=>'123456789',
        'status'=>1,
        'role_id'=>$admin->id,
        ]);
    }
}
