<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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
        /**
         * This will make sure that wherever in the routes the id variable is used
         * it will automatically apply the constraint to those variable and we don't
         * need to worry there.
         *
         * This is global constraint, but it can be overridden in the individual routes.
         */
        Route::pattern('id', '[0-9]+');
        //
    }
}
