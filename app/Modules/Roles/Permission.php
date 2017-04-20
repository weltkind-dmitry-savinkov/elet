<?php

namespace App\Modules\Roles;

use Auth;

class Permission
{
    public function allowed($user, $module, $operation)
    {

        $rolesConfig = config('roles');

        if ($user->role->id == $rolesConfig['main_role']) {
            return true;
        }

        $permissions = $user->role->permissions;

        $aliases = $rolesConfig['aliases'];

        if (isset($aliases[$operation])) {
            $operation = $aliases[$operation];
        }

        foreach ($permissions as $permission) {
            $neededModule    = $permission->module->slug == $module;
            $neededOperation = $permission->operation->slug == $operation;

            if ($neededModule && $neededOperation) {
                return $permission->pivot->allowed;
            }
        }

        return true;
    }

    public function can($operation, $module = null)
    {
        if (!$module) {
            $module = module();
        }

        $user = Auth::guard('admin')->user();

        return $this->allowed($user, $module, $operation);
    }
}