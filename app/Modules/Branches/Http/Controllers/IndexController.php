<?php

namespace App\Modules\Branches\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Branches\Models\Branche;

class IndexController extends Controller
{
    public function getModel()
    {
        return new Branche;
    }
}