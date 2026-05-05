<?php

namespace Database\Factories;

use App\Models\Advantage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Advantage>
 */
class AdvantageFactory extends Factory
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
