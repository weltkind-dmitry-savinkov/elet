<?php

namespace App\Modules\Partners\Providers;

use App\Providers\ModuleProvider;

class ModuleServiceProvider extends ModuleProvider
{
    public $module = 'partners';
    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    public function boot()
    {
        parent::boot();

        \App::make('translator')->addNamespace($this->module, __DIR__.'/../Resources/Lang');
    }
}
