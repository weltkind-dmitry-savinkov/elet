<?php

namespace App\Modules\Feedback\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;
use App\Modules\Feedback\Models\Feedback;
use Illuminate\Http\Request;

use App\Modules\Settings\Models\Settings;


class IndexController extends Admin
{

    public function getModel(){
        return new Feedback();
    }

    public function index() {

        $entity = $this->getModel();

        $entities = $entity->sortable()->admin()->paginate($this->perPage);

        $this->after($entities);

        $setting = Settings::firstOrNew(['key' => 'feedback.email']);

        return view(
            $this->getIndexViewName(),
            ['entities' => $entities, 'email' => $setting->value]
        );

    }

    public function create(){
        abort(404);
    }

    public function store(Request $request){
        abort(404);
    }


    public function update(Request $request, $id){
        abort(404);
    }

    public function saveEmail(Request $request) {
        $setting = Settings::firstOrNew(['key' => 'feedback.email']);
        $email   = $request->input('email');

        $setting->value = $email;

        $setting->save();

        return redirect()->back()->with('message', trans($this->messages['update']));
    }


}
