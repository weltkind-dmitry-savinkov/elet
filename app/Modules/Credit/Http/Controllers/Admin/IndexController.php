<?php

namespace App\Modules\Credit\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;

use App\Modules\Credit\Models\Credit;

class IndexController extends Admin
{
    public function getModel()
    {
        return new Credit();
    }
}