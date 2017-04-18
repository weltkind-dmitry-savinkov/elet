<?php

namespace App\Modules\Articles\Providers;


use App\Providers\ModuleProvider;

use App\Modules\Articles\Models\Repository\Article as ArticlesRepository;

class ModuleServiceProvider extends ModuleProvider
{

    public $module = 'articles';

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ArticlesRepository', function () {
            return new ArticlesRepository();
        });
        $this->app->register(RouteServiceProvider::class);

    }


}
