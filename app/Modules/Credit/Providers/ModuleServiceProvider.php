<?php

namespace App\Modules\Credit\Providers;

use App\Providers\ModuleProvider;

use App\Modules\Credit\Http\ViewComposers\MainComposer;

use App\Modules\Credit\Models\Repository\Credit as CreditRepository;

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

        $this->app->bind('CreditRepository', function () {
            return new CreditRepository();
        });

        $this->app->make('view')->composer('credit::main', MainComposer::class);
    }
}
