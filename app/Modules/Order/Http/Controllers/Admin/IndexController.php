<?php

namespace App\Modules\Order\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;
use App\Modules\Order\Models\Order;


class IndexController extends Admin
{
    public function getModel(){
        return new Order();
    }
}
