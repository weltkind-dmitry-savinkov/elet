<?php

namespace App\Modules\Roles\Facades;

use Illuminate\Support\Facades\Facade;

class Permission extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'PermissionService';
    }
}