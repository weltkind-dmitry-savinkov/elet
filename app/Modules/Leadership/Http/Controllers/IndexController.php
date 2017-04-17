<?php

namespace App\Modules\Leadership\Http\Controllers;

use App\Modules\Tree\Helpers\Breadcrumbs;

use App\Http\Controllers\Controller;

use App\Modules\Leadership\Models\Leadership;

class IndexController extends Controller
{
    protected $routePrefix = 'leaderships';

    public function getModel()
    {
        return new Leadership();
    }

    public function index() {
        return view(
            $this->getIndexViewName(),
            [
                'items'=>$this->getModel()->active()->paginate($this->perPage),
                'routePrefix'=>$this->routePrefix
            ]
        );
    }

    public function customShow($id){
        $entity = $this->getModel()->findOrFail($id);

        Breadcrumbs::add(trans('leadership::index.title'), route('leaderships.index'));
        Breadcrumbs::add($entity->title, route('leaderships.customShow', ['id' => $entity->id]));

        return view(
            $this->getShowViewName(),
            [
                'routePrefix'=>$this->routePrefix,
                'entity' => $entity,
                'pageTitle' => $entity->title
            ]
        );
    }
}