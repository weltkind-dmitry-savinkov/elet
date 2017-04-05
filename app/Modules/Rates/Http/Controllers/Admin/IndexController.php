<?php

namespace App\Modules\Rates\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;

use App\Modules\Rates\Models\Currency;

class IndexController extends Admin
{
    public function getModel()
    {
        return new Currency();
    }
}