<?php

namespace App\Providers;

use App\ViewComposer\ViewComposer;
use Illuminate\Support\Facades\View;
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
        // View::share(['username' => 'abdalla', 'age' => 22]);
        
        // View::composer(['queryProject.main', 'queryProject.test'], function ($vw) {
        //     $vw->with([
        //         'username' => 'abdalla',
        //         'age' => '22',
        //     ]);
        // });

        // View::composer('*', ViewComposer::class);
        
    }
}
