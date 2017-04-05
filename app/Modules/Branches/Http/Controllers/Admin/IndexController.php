<?php

namespace App\Modules\Branches\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;

use App\Modules\Branches\Models\Branche;

class IndexController extends Admin
{
    public function getModel()
    {
        return new Branche();
    }
}