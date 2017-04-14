<?php

namespace App\Modules\Slider\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Slider\Models\Slider;

class IndexController extends Controller
{

    public function getModel()
    {
        return new Slider();
    }

}