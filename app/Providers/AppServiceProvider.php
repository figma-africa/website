<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
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
        Blade::component('layouts.components.communityLeaders', 'communityLeaders');
        Blade::component('layouts.components.ourCommunity', 'ourCommunity');
        Blade::component('layouts.components.ecoSystem', 'ecoSystem');
        Blade::component('layouts.components.gridImageGallery', 'gridImageGallery');
        Blade::component('layouts.components.flexImageGallery', 'flexImageGallery');
    }
}
