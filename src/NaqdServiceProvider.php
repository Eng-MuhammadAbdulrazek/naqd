<?php

namespace Medo19\Naqd;

use Illuminate\Support\ServiceProvider;
use Medo19\Naqd\Naqd;

class NaqdServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('naqd', function () {
            return new Naqd();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/data/currencies.json' => base_path('resources/currencies.json'),
        ], 'currencies-config');
    }
}
