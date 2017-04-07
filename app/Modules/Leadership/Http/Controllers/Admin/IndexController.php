<?php

namespace App\Modules\Leadership\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;
use App\Modules\Admin\Http\Controllers\Image;

use App\Modules\Leadership\Models\Leadership;

class IndexController extends Admin
{
    use Image;

    public function getModel()
    {
        return new Leadership();
    }
}