<?php

namespace Makkinga\CarbonHelper;

use Illuminate\Support\ServiceProvider;

class CarbonHelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('carbon', function () {
            return new CarbonHelperController();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}