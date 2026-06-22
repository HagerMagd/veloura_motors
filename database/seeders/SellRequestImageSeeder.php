<?php

namespace Database\Seeders;

use App\Models\SellRequest;
use App\Models\SellRequestImages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellRequestImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars=SellRequest::all();
        foreach($cars as $car){
            for($i=0;$i<3;$i++){ 
            SellRequestImages::create([
                'sell_request_id'=>$car->id,
                'image_path'=>fake()->url(),
            ]);

            }
           
        }
    }
}
