<?php

namespace App\Modules\Leadership\Providers;

use App\Providers\ModuleProvider;

class ModuleServiceProvider extends ModuleProvider
{
    public $module = 'leadership';

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
