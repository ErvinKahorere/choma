<?php

namespace App\Providers;

use App\Category;
use App\City;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('inc.navbar', function ($view){
            $view->with('cities', City::all());
        });

        view()->composer('inc.sidebar', function ($view){
            $view->with('categories', Category::all());
        });



       
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
