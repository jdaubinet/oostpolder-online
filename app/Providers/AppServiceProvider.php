<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

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
        //

        //zet de standaard max waarde van een string naar 191 in verband met error
        //Tijdens migrate met string bij aan maken van tabels
        Schema::defaultStringLength(191);

        //Components komen hier
        Blade::component('website.components.news', 'newsMessage'); 
    }
}
