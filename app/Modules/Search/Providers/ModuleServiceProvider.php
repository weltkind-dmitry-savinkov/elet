<?php

namespace App\Modules\Search\Providers;

use App\Providers\ModuleProvider;

class ModuleServiceProvider extends ModuleProvider
{
    public $module = 'search';

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->make('view')->composer(['search::main','search::main-mobile'], 'App\Modules\Search\Http\ViewComposers\MainComposer');
    }
}
