<?php

namespace App\Modules\Roles\Providers;

use App\Providers\ModuleProvider;
use App\Modules\Roles\Permission;

class ModuleServiceProvider extends ModuleProvider
{
    public $module = 'roles';

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

        $this->app->bind('PermissionService', function () {
            return new Permission();
        });
    }
}
