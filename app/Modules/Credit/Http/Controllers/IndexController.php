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

    public function index(){

        return view(
            $this->getIndexViewName(),
            [
                'items' => $this->getModel()->active()->paginate($this->perPage),
                'routePrefix' => $this->routePrefix,
                'pageTitle' => trans('credit::index.products')
            ]
        );
    }

    public function customShow($id) {

        $credit = $this->getModel()->findOrFail($id);

        return view(
            $this->getShowViewName(),
            [
                'routePrefix' => $this->routePrefix,
                'credit' => $credit,
                'pageTitle' => $credit->title
            ]
        );
    }
}