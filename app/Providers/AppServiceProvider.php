<?php

namespace App\Providers;

use App\Models\Status;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


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
        view::composer('layouts.partials._statuses', function ($view) {
            $view->with('statuses',\App\Models\Status::all());
            
        });
       
    }
}
