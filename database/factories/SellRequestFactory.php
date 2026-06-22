<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class SellRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->word(),
            'phone'=>fake()->phoneNumber(),
            'car_name'=>fake()->word(),
            'car_brand'=>Brand::inRandomOrder()->first()->name,
            'model'=>fake()->bothify('Model-###'),
            'year'=>fake()->year(),
            'price'=>fake()->numberBetween(500000,1000000),
            'status'=>fake()->boolean(),
            'message'=>fake()->paragraph(),
            'maileage'=>fake()->numberBetween('10000','20000'),
            'transmission'=>fake()->word(),
            'fuel_type'=>fake()->word(),
            
        ];
    }
}
