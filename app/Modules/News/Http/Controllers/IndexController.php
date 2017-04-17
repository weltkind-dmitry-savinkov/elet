<?php

namespace App\Modules\News\Http\Controllers;

use App\Modules\Tree\Helpers\Breadcrumbs;

use App\Http\Controllers\Controller;

use App\Modules\News\Models\News;

class IndexController extends Controller
{


    public function getModel()
    {
        return new News;
    }

    public function index() {
        Breadcrumbs::add(trans('news::index.title'), route('news'));

        return view(
            $this->getIndexViewName(),
            [
                'items'       => $this->getModel()->active()->paginate($this->perPage),
                'routePrefix' => $this->routePrefix,
                'pageTitle'   => trans('news::index.title')
            ]
        );
    }

    public function customShow($id){

        $entity = $this->getModel()->findOrFail($id);

        Breadcrumbs::add(trans('news::index.title'), route('news'));
        Breadcrumbs::add($entity->title, route('news.customShow', ['id' => $entity->id]));

        return view(
            $this->getShowViewName(),
            [
                'routePrefix' => $this->routePrefix,
                'entity'      => $entity,
                'pageTitle'   => $entity->title
            ]
            );
    }

}