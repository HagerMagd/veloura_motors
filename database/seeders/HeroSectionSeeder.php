<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       HeroSection::create([
        'title'=>'Find Your Perfect Luxury Vehicle',
        'subtitle'=>'Discover an exclusive collection of premium automobiles. From elegant sedans to powerful sports cars, we bring you the finest in automotive excellence.',
        'image'=>'assets/images/hero-car.jpg',
        'btn1_text'=>'Browse Cars',
        'btn2_text'=>'Sell Your Cars',
        'btn3_text'=>'Contact',
       ]);
    }
}
