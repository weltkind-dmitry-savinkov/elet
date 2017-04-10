<?php

namespace App\Modules\Rates\Http\ViewComposers;

use Illuminate\View\View;

use App\Modules\Rates\Models\Currency;

class MainComposer
{
    public function compose(View $view)
    {
        $currencies = Currency::all();

        $view->with('currencies', $currencies);
    }
}