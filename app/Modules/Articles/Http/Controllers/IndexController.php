<?php

namespace App\Modules\Articles\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Articles\Models\Article;

class IndexController extends Controller
{

    public function getModel()
    {
        return new Article();
    }

    public function customShow($id){
        $entity = $this->getModel()->findOrFail($id);

        return view(
            $this->getShowViewName(),
            [
                'routePrefix' => $this->routePrefix,
                'entity' => $entity,
                //'pageTitle' => $entity->title
            ]
        );
    }

}