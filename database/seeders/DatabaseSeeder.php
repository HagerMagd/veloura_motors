<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\User;
use Database\Seeders\SellRequestSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            BrandSeeder::class,
            CarSeeder::class,
            CarImageSeeder::class,
            UserSeeder::class,
            BookingRequestSeeder::class,
            TestimonialSeeder::class,
            HeroSectionSeeder::class,
            FeatureSeeder::class,
            AdvantageSeeder::class,
            SellRequestSeeder::class,
            SellRequestImageSeeder::class,

        ]);
    }
}
