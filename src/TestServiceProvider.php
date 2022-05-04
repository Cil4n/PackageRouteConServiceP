<?php

namespace Billy\Test;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ .  '/TestRoute.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       // include __DIR__.'/TestRoute.php';
    }
}
