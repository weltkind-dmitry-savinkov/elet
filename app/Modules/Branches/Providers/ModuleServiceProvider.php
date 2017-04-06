<?php

namespace App\Modules\Branches\Providers;

use App\Providers\ModuleProvider;

class ModuleServiceProvider extends ModuleProvider
{
    public $module = 'branches';

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
