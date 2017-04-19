<?php

namespace App\Modules\Roles\Models;

use Kyslik\ColumnSortable\Sortable;

use App\Models\Model;

use App\Modules\Admin\Models\Users;

class Role extends Model
{

    use Sortable;

    public $timestamps = false;

    public function getModulesPermissions()
    {
        $permissions = [];

        foreach ($this->permissions as $permission) {
            $permissions[$permission->module->id]['name'] = $permission->module->name;
            $permissions[$permission->module->id]['operations'][$permission->id] = $permission->pivot->allowed;
        }

        return $permissions;
    }

    public function saveData(array $data)
    {

        $this->name = $data['name'];

        foreach ($data['permissions'] as $moduleId => $permission) {
            foreach ($permission as $operationId => $allowed) {
                $permissionEntity = new Permission();

                $permissionEntity->module_id    = $moduleId;
                $permissionEntity->operation_id = $operationId;

                $this
                    ->permissions()
                    ->save($permissionEntity, ['allowed' => $allowed]);
            }
        }

        $this->save();
    }

    public function updateData(array $data)
    {
        $this->name = $data['name'];

        $this->permissions()->sync($data['permissions']);

        $this->save();
    }

    public function admins()
    {
        return $this->hasMany(User::class);
    }

    public function permissions()
    {
        return $this
            ->belongsToMany(Permission::class)
            ->withPivot('allowed');
    }
}