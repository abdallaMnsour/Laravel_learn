<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServicProvider extends ServiceProvider
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
        // View::share(['username' => 'abdalla', 'age' => 22]);
        // View::composer('*', function ($vw) {
        //     $vw->with(['username' => 'abdalla']);
        // });
    }
}
