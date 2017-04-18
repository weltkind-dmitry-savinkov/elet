<?php

namespace App\Modules\Credit\Http\Controllers;

use App\Modules\Tree\Helpers\Breadcrumbs;

use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function getModel()
    {
        return null;
    }

    public function index(){
        return view('credit::calculator');
    }
}