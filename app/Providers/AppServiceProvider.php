<?php

namespace App\Providers;
use Laravel\Laravel\Passport;
use Illuminate\Support\Facades\Gate;

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

    protected $policies = [
        'App/Model'=>'App\Policies\ModelPolicy',
        'App\Product'=>'App\Policies\ProductPolicy'
    ];

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
