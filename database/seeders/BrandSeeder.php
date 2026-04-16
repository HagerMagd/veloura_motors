<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Mercedes', 'logo_path' => 'brands/mercedes.png'],
            ['name' => 'BMW', 'logo_path' => 'brands/bmw.png'],
            ['name' => 'Audi', 'logo_path' => 'brands/audi.png'],
            ['name' => 'Porsche', 'logo_path' => 'brands/porsche.png'],
            ['name' => 'Ferrari', 'logo_path' => 'brands/ferrari.png'],
            ['name' => 'Bentley', 'logo_path' => 'brands/bentley.png'],
        ];
        foreach ($brands as $brand){
            Brand::create($brand);
        }
    }
}
