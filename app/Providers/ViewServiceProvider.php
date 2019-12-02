<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer('layouts.base','App\Providers\ViewComposers\BaseComposer');
    }
}
