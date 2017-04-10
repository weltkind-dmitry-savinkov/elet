<?php

namespace App\Modules\Credit\Http\ViewComposers;

use Illuminate\View\View;

use App\Modules\Credit\Models\Credit;

class MainComposer
{
    public function compose(View $view)
    {
        $credits = Credit::limit(5)->get();

        $view->with('credits', $credits);
    }
}