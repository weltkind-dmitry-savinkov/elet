<?php

namespace App\Modules\Roles\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Modules\Admin\Http\Controllers\Admin;

use App\Modules\Roles\Models\Role;
use App\Modules\Roles\Models\Module;
use App\Modules\Roles\Models\Operation;

class IndexController extends Admin
{

    public function getModel()
    {
        return new Role();
    }

    public function create()
    {
        $modules    = Module::all();
        $operations = Operation::all();

        $entity = $this->getModel();

        return view(
            'roles::admin.create',
            [
                'entity'     => $entity,
                'modules'    => $modules,
                'operations' => $operations
            ]
        );
    }

    public function store(Request $request)
    {
        $entity = $this->getModel()->create();

        $data = [
            'name' => $request->input('name'),
            'permissions' => $request->input('permissions')
        ];

        $entity->saveData($data);

        return redirect()
            ->route($this->routePrefix.'edit', ['id'=>$entity->id])
            ->with('message', trans($this->messages['store']));
    }

    public function edit($id)
    {
        $entity      = $this->getModel()->findOrFail($id);
        $permissions = $entity->getModulesPermissions();
        $operations  = Operation::all();

        return view(
            'roles::admin.edit',
            [
                'entity' => $entity,
                'permissions' => $permissions,
                'operations' => $operations
            ]
        );
    }

    public function update(Request $request, $id)
    {

        $entity = $this->getModel()->findOrFail($id);

        $entity->updateData($request->all());

        return redirect()
            ->back()
            ->with('message', trans($this->messages['update']));
    }

}