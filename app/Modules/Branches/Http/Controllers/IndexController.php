<?php

namespace App\Modules\Branches\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Modules\Tree\Helpers\Breadcrumbs;

use App\Modules\Branches\Models\Branche;
use App\Modules\Branches\Models\Region;

class IndexController extends Controller
{
    public function getModel()
    {
        return new Branche;
    }

    public function index() {

        Breadcrumbs::add(
            trans('Главная'),
            home()
        );

        Breadcrumbs::add(
            trans('branches::index.title'),
            route('credit.index')
        );

        $regions = Region::all();
        $qb      = $this->getModel()->select();

        if (request()->has('id')) {
            $qb->where('id', request()->input('id'));
        }

        if (request()->has('region')) {
            $qb->where('region_id', request()->input('region'));
        }

        $items = $qb->orderBy('id')->paginate($this->perPage);

        return view(
            $this->getIndexViewName(),
            [
                'items'       => $items,
                'regions'     => $regions,
                'routePrefix' => $this->routePrefix
            ]
        );
    }
}