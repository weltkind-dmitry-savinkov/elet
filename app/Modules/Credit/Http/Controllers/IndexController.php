<?php

namespace App\Modules\Credit\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Modules\Credit\Models\Credit;

class IndexController extends Controller
{
    public function getModel()
    {
        return new Credit();
    }
}