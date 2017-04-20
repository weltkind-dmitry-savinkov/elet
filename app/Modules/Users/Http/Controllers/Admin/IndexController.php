<?php

namespace App\Modules\Users\Http\Controllers\Admin;

use View;

use Illuminate\Support\Facades\Auth;

use  App\Modules\Users\Models\User;

use App\Modules\Admin\Http\Controllers\Admin;

use App\Modules\Roles\Models\Role;


class IndexController extends Admin
{

    public function getModel(){
        return new User;
    }

    public function getRules($request, $id = false){

        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users'.($id?',id,'.$id:''),
            'password' => 'required|min:6'
        ];


        if (isset($request->password) && !$request->password){
            unset($request->password);
            unset($rules['password']);
        }

        return $rules;
    }

    public function create(){

        $entity = $this->getModel();
        $roles  = Role::all()->pluck('name', 'id');

        $this->after($entity);

        return view($this->getFormViewName(), ['entity'=>$entity, 'roles' => $roles]);
    }

    public function edit($id)
    {

        $entity = $this->getModel()->findOrFail($id);
        $roles  = Role::all()->pluck('name', 'id');

        View::share('entity', $entity);

        $this->after($entity);

        return view(
            $this->getFormViewName(),
            ['entity'=>$entity, 'routePrefix'=>$this->routePrefix, 'roles' => $roles]
        );

    }

    public function destroy($id){

        if (Auth::user()->id == $id){
            abort(403);
        }

        return parent::destroy($id);
    }
}
