<?php

namespace App\Modules\Partners\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Modules\Partners\Models\Partner;

class IndexController extends Controller
{

    public function getModel()
    {
        return new Partner();
    }
}