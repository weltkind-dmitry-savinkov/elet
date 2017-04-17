<?php

namespace App\Modules\Branches\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;

use App\Modules\Branches\Models\Region;

class RegionsController extends Admin
{

    public function getModel()
    {
        return new Region();
    }

    protected function setRoutePrefix(){
            $this->routePrefix = config('cms.uri').'.regions.';
    }

    public function getFormViewName(){
        return $this->viewPrefix.'regions.form';
    }

    public function getIndexViewName(){
        return $this->viewPrefix.'regions.index';
    }
}