<?php

namespace App\Modules\Partners\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;
use App\Modules\Admin\Http\Controllers\Image;

use App\Modules\Partners\Models\Partner;

class IndexController extends Admin
{
    use Image;

    public function getModel()
    {
        return new Partner();
    }
}