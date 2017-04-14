<?php

namespace App\Modules\Slider\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;
use App\Modules\Slider\Models\Slider;
use App\Modules\Admin\Http\Controllers\Image;
use App\Modules\Admin\Http\Controllers\Priority;


class IndexController extends Admin
{

    use Image, Priority;

    public function getModel(){
        return new Slider();
    }

    public function getRules($request, $id = false)
    {
        return  [
            'title' => 'sometimes|required|max:255',
        ];
    }
}
