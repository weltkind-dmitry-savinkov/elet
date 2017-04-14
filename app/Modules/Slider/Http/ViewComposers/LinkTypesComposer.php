<?php
namespace App\Modules\Slider\Http\ViewComposers;

use Illuminate\View\View;

class LinkTypesComposer
{
    public function compose(View $view){
        $linkTypes = [
            'in' => trans('slider::admin.fields.linkIn'),
            'out' => trans('slider::admin.fields.linkOut'),
        ];

        $view->with('linkTypes', $linkTypes);
    }
}