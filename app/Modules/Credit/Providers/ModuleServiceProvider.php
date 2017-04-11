<?php

namespace App\Modules\Credit\Providers;

use App\Providers\ModuleProvider;

use App\Modules\Credit\Http\ViewComposers\MainComposer;

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

        $this->app->make('view')->composer('credit::main', MainComposer::class);
    }
}
