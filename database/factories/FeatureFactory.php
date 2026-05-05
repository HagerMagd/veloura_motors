<?php

namespace Database\Factories;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Feature>
 */
class FeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description'=>fake()->paragraph(),
            'title'=>fake()->sentence(2),
            'status'=>'1',
            'icon'=>'bi bi-star-fill',
        ];
    }
}
