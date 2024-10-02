<?php

namespace App\Providers;
use App\Models\Testimoni;
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
        // View::composer(['home', 'about', 'contact', 'shop', 'services'], function ($view) {
        //     $data = Testimoni::all();
        //     $view->with('testimonis', $data);
        // });
    }
}
