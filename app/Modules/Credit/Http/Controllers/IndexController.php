<?php

namespace App\Modules\Credit\Http\Controllers;

use App\Modules\Tree\Helpers\Breadcrumbs;

use App\Http\Controllers\Controller;

use App\Modules\Credit\Models\Credit;

class IndexController extends Controller
{
    public function getModel()
    {
        return new Credit();
    }

    public function customShow($id) {
        Breadcrumbs::add('Test',route('credit.show',$id));

        $credit = $this->getModel()->findOrFail($id);

        return view(
            $this->getShowViewName(),
            ['routePrefix' => $this->routePrefix, 'credit' => $credit]
        );
    }
}