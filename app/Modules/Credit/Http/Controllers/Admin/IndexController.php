<?php

namespace App\Modules\Credit\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;
use App\Modules\Admin\Http\Controllers\Image;

use App\Modules\Credit\Models\Credit;

class IndexController extends Admin
{
    use Image;

    public function getModel()
    {
        return new Credit();
    }

    public function list() {
        $entities = $this->getModel()->pluck('title', 'id');

        return response()->json(['success' => true, 'data' => $entities]);
    }
}