<?php

namespace App\Modules\Leadership\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Modules\Leadership\Models\Leadership;

class IndexController extends Controller
{
    protected $routePrefix = 'leaderships';

    public function getModel()
    {
        return new Leadership();
    }

    public function customShow($id)
    {
        $entity = $this->getModel()->findOrFail($id);

        return view(
            $this->getShowViewName(),
            [
                'routePrefix'=>$this->routePrefix,
                'entity' => $entity,
                'title' => $entity->title
            ]
        );
    }
}