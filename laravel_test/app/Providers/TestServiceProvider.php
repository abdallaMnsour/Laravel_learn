<?php

namespace App\Providers;

use App\ViewComposer\ViewComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
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
        View::controller('*', ViewComposer::class);
    }
}
