<?php

namespace App\Modules\Credit\Providers;

use App\Providers\ModuleProvider;

class ModuleServiceProvider extends ModuleProvider
{
    public $module = 'credit';

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
