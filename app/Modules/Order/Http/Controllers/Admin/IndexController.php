<?php

namespace App\Modules\Order\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Modules\Admin\Http\Controllers\Admin;

use App\Modules\Order\Models\Order;

use App\Modules\Settings\Models\Settings;

class IndexController extends Admin
{
    public function getModel() {
        return new Order();
    }

    public function index() {

        $entity = $this->getModel();

        $entities = $entity->sortable()->admin()->paginate($this->perPage);

        $this->after($entities);

        $setting = Settings::where('key', 'order.email')->first();

        return view(
            $this->getIndexViewName(),
            ['entities' => $entities, 'email' => $setting->value]
        );

    }

    public function saveEmail(Request $request) {

        $setting = Settings::firstOrNew(['key' => 'order.email']);
        $email   = $request->input('email');

        $setting->value = $email;

        $setting->save();

        return redirect()->back()->with('message', trans($this->messages['update']));
    }
}
