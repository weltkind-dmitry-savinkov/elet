<?php

namespace App\Modules\Rates\Providers;

use App\Providers\ModuleProvider;

class ModuleServiceProvider extends ModuleProvider
{
    public $module = 'rates';

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
