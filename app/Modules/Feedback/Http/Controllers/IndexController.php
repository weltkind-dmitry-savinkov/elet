<?php

namespace App\Modules\Feedback\Http\Controllers;

use Mail;

use Illuminate\Http\Request;

use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Http\Controllers\Controller;

use App\Modules\Feedback\Models\Feedback;

use App\Modules\Feedback\Mail\CreateFeedback;

use App\Modules\Settings\Models\Settings;

class IndexController extends Controller
{

    use ValidatesRequests;

    public function index(){

        return view('feedback::index');
    }

    public function store(Request $request){

        $this->validate($request, $this->getRules($request), $this->getMessages());

        $arr = $request->all();
        $arr['ip'] = ip2long($request->ip());
        $arr['date'] = date('Y-m-d H:i:s');

        $entity = $this->getModel()->create($arr);

        $email = Settings::where('key', 'feedback.email')->first()->value;

        Mail::to($email)->send(new CreateFeedback($entity));

        return redirect()->back()->with('message', 'Ваше сообщение успешно отправлено. Наши менеджеры свяжуться с вами в ближайшее время.');


    }

    public function getRules($request){
        return [
            'name'=>'required|max:255',
            'email'=>'required|email',
            'captcha' => 'required|captcha',
            'phone' => 'required|integer'

        ];
    }

    public function getMessages(){
        return [
            'required'=>'Это поле обязательно для заполнения',
            'email'=>'Укажите корректный электронный адрес',
            'phone'=>'Номер телефона должен состоять только из цифр',

        ];
    }



    public function getModel()
    {
        return new Feedback();
    }
}