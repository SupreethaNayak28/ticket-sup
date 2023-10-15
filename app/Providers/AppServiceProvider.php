<?php

namespace App\Providers;

use App\Models\Status;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // View composer to share statuses
        \View::composer('layouts.partials._statuses', function ($view) {
            $statuses = \App\Status::all();
            
        });
       
    }
}