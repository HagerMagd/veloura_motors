<?php

namespace App\Providers;

use App\Models\Brand;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

    public function boot(): void
    {
        Paginator::useBootstrapFive();

        if (Schema::hasTable('brands')) {
            $all_brands = Brand::all();
            view()->share([
                'all_brands' => $all_brands,
            ]);
        }
    }
}
