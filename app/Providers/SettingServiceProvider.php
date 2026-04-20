<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('settings')) {
            $settings = Setting::firstOrCreate(
                [],
                [
                    "site_name" => 'Veloura Motors',
                    "logo" => 'logo',
                    'bio'=>'Welcome To Our Veloura Motors Website',
                    "site_email" => 'Veloura@gmail.com',
                    'phone' => '01289490393',
                    'year' => '2026',
                    'country' => 'Egypt',
                    'city' => 'Damitta',
                    'street' => 'near nail',
                     'facebook' => 'https://www.facebook.com/',
                    'instagram'=>'https://www.instagram.com/',
                    'whatsapp'=> 'https://wa.me/',
                ]
            );
            $settings->whatsapp = 'https://wa.me/' . $settings->phone;
            view()->share('settings', $settings);
        }
    }
}
