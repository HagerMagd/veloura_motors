<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'job_title' => fake()->jobTitle(),
            'image' => fake()->randomElement([
                'testimonials/1.jpg',
                'testimonials/2.jpg',
                'testimonials/3.jpg',
            ]),
            'comment' => fake()->paragraph(),
            'rating' => fake()->numberBetween(1, 5),

        ];
    }
}
