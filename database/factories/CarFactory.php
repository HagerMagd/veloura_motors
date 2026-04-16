<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->randomElement(['BMW X5','Audi A6','Mercedes C200','Ferrari Roma']),
            'model'=>fake()->bothify('Model-###'),
            'year'=>fake()->numberBetween(2014,2025),
            'price'=>fake()->numberBetween(50000,300000),
            'mileage'=>fake()->numberBetween(1000,57835),
            'fuel_type'=>Arr::random(['petrol','diesel','electric','hybrid']),
            'transmission'=>Arr::random(['manual','automatic']),
            'desc'=>fake()->sentence(),
            'status'=>1,
            'brand_id'=>Brand::inRandomOrder()->first()->id,
            'admin_id'=>Admin::inRandomOrder()->first()->id,
        ];
    }
}
