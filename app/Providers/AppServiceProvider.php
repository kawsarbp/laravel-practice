<?php

namespace App\Providers;

use App\View\Components\SinglePost;
use App\View\Components\Test;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
//migrate file
use Illuminate\Support\Facades\Schema;
//migrate file
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
        //migrate file
        Schema::defaultStringLength(191);
        //migrate file
        Blade::component('single-post',SinglePost::class);

    }
}
