<?php

namespace App\Modules\Roles\Console;

use Illuminate\Console\Command;

use App\Modules\Roles\Models\Permission;
use App\Modules\Roles\Models\Operation;
use App\Modules\Roles\Models\Module;
use App\Modules\Roles\Models\Role;

class AddModule extends Command
{
    protected $signature = 'roles:add:module {slug} {name}';

    public function handle()
    {
        $slug = $this->argument('slug');
        $name = $this->argument('name');

        try {
            $module     = Module::create();
            $operations = Operation::all()->pluck('id');

            $module->name = $name;
            $module->slug = $slug;

            $module->save();

            $id = $module->id;

            $ids = [];

            foreach ($operations as $operation) {
                $permission = new Permission();

                $permission->module_id    = $id;
                $permission->operation_id = $id;

                $permission->save();

                $ids[] = $permission->id;
            }

            $roles = Role::all();

            foreach ($roles as $role) {
                $role->permissions()->attach($ids, ['allowed' => 1]);
            }

            $this->info('Module added');
        } catch(\Exception $e) {
            $this->error('Не удалось добавить модуль.');
            $this->error($e->getMessage());
        }
    }
}