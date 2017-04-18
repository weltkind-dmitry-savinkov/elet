<?php

namespace App\Modules\Order\Http\Controllers;

use Mail;

use Illuminate\Http\Request;

use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Http\Controllers\Controller;

use App\Modules\Order\Models\Order;

use App\Modules\Order\Mail\CreateOrder;

use App\Modules\Settings\Models\Settings;

class IndexController extends Controller
{

    use ValidatesRequests;

    public function getModel()
    {
        return new Order();
    }

    public function index()
    {
        return view($this->getIndexViewName());
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->getRules($request), $this->getMessages());

        $data = $request->all();

        unset($data['captcha']);

        $entity = $this->getModel()->create($data);

        $this->notify($entity);

        return redirect()->back()->with('message', trans('order::index.accepted'));

    }

    public function getRules($request)
    {
        return [
            'fio'             => 'required|string|max:255',
            'area'            => 'string|max:400',
            'date_birth'      => 'required|date_format:d/m/Y',
            'city'            => 'string|max:255',
            'address'         => 'string|max:255',
            'phone'           => 'required|integer',
            'purpose'         => 'string',
            'amount'          => 'required|integer',
            'term'            => 'required|integer',
            'inn'             => 'integer',
            'monthly_amount'  => 'integer',
            'passport_series' => 'required|string',
            'date_issue'      => 'required|date_format:d/m/Y',
            'captcha'         => 'required|captcha',
            'issued_by'       => 'required|string',
            'passport_number' => 'required|string',
        ];
    }

    public function getMessages()
    {
        return [
            'required'=>'Это поле обязательно для заполнения'
        ];
    }

    public function notify($entity)
    {
        $email = Settings::where('key', 'order.email')->first()->value;

        Mail::to($email)->send(new CreateOrder($entity));
    }
}