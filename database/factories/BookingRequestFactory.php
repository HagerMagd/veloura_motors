<?php

namespace Database\Factories;

use App\Models\BookingRequest;
use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends Factory<BookingRequest>
 */
class BookingRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status'=>Arr::random(['pending','approved','rejected']),
            'messege'=>fake()->sentence(),
            'car_id'=>Car::inRandomOrder()->first()->id,
            'user_id'=>User::inRandomOrder()->first()->id,

        ];
    }
}
