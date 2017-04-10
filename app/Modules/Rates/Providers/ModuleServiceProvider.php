<?php

namespace App\Modules\Rates\Providers;

use App\Providers\ModuleProvider;

use App\Modules\Rates\RatesParser;

use App\Modules\Rates\Models\Repository\Rate;

use App\Modules\Rates\Http\ViewComposers\MainComposer;

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

        $this->app->bind('RatesParser', function () {
            return new RatesParser();
        });

        $this->app->singleton('RateRepository', function () {
            return new Rate();
        });

        $this->app->make('view')->composer('rates::main', MainComposer::class);
    }
}
