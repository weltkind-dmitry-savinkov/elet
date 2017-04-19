<?php

namespace App\Modules\Roles\Console;

use Illuminate\Console\Command;

use App\Modules\Roles\Models\Module;
use App\Modules\Roles\Models\Operation;
use App\Modules\Roles\Models\Permission;
use App\Modules\Roles\Models\Role;

class AddModules extends Command
{
    protected $signature = 'roles:add:modules';

    public function handle()
    {
        try {

            $modules    = config('modules');
            $operations = Operation::all()->pluck('id');

            foreach ($modules['items'] as $slug => $module) {
                if (empty($module['menu']) || !isset($module['menu']['items'])) {
                    continue;
                }

                $moduleEntity = Module::create();

                echo $module['menu']['items'][0]['title'] . "\n";

                $moduleEntity->name = $module['menu']['items'][0]['title'];
                $moduleEntity->slug = $slug;

                $moduleEntity->save();

                $id = $moduleEntity->id;

                $ids = [];

                foreach ($operations as $operation_id) {
                    $permission = new Permission();

                    $permission->module_id    = $id;
                    $permission->operation_id = $operation_id;

                    $permission->save();

                    $ids[] = $permission->id;
                }

                $roles = Role::all();

                foreach ($roles as $role) {
                    $role->permissions()->attach($ids, ['allowed' => 1]);
                }

                $this->info('Module added: ' . $slug);
            }
                } catch(\Exception $e) {
                    $this->error('Не удалось добавить модуль.');
                    $this->error($e->getMessage());
                }
    }
}
