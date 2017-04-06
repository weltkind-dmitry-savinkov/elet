<?php

namespace App\Modules\Branches\Http\Controllers\Admin;

use View;

use App\Modules\Admin\Http\Controllers\Admin;

use App\Modules\Branches\Models\Branche;
use App\Modules\Branches\Models\Region;

class IndexController extends Admin
{

    private $workDays = ['Пн','Вт','Ср','Чт','Пт','Сб','Вс'];

    public function getModel()
    {
        return new Branche();
    }

    public function create(){

        $entity = $this->getModel();

        $this->after($entity);

        $regions = Region::orderBy('id')->pluck('name', 'id');

        $selectedDays = $entity->work_days
            ? explode(',', $entity->work_days)
            : [];

        return view(
            $this->getFormViewName(),
            [
                'entity'              => $entity,
                'regions'             => $regions,
                'selected_workd_days' => $selectedDays,
                'work_days'           => $this->workDays
            ]
        );
    }

    public function edit($id)
    {
        $entity = $this->getModel()->findOrFail($id);

        View::share('entity', $entity);

        $this->after($entity);


        $regions = Region::orderBy('id')->pluck('name', 'id');

        $selectedDays = $entity->work_days
            ? explode(',', $entity->work_days)
            : [];

        return view(
            $this->getFormViewName(),
            [
                'entity'              => $entity,
                'regions'             => $regions,
                'selected_workd_days' => $selectedDays,
                'work_days'           => $this->workDays
            ]
        );
    }
}