<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::if('requestIs', function ($value) {
            return request()->is($value);
        });

        Blade::if('requestRoute', function ($value) {
            return request()->routeIs($value);
        });
    }
}
