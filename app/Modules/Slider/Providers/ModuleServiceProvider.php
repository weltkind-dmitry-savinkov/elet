<?php

namespace App\Modules\Slider\Providers;

use App\Providers\ModuleProvider;

class ModuleServiceProvider extends ModuleProvider
{

    public $module = 'slider';

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

        $this->app->make('view')->composer(['slider::admin.form'], 'App\Modules\Slider\Http\ViewComposers\ColorComposer');
        $this->app->make('view')->composer(['slider::admin.form'], 'App\Modules\Slider\Http\ViewComposers\LinkTypesComposer');
        $this->app->make('view')->composer(['slider::main'], 'App\Modules\Slider\Http\ViewComposers\SliderComposer');
    }


}
