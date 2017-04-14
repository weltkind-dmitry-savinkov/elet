<?php
namespace App\Modules\Slider\Http\ViewComposers;

use Illuminate\View\View;

class ColorComposer
{
    public function compose(View $view){
        $colors = [
            '#FFFFFF' => trans('slider::admin.colors.white'),
            '#000000' => trans('slider::admin.colors.black'),
            '#2D2E83' => trans('slider::admin.colors.purple'),
            '#FFFF00' => trans('slider::admin.colors.yellow'),
            '#0000FF' => trans('slider::admin.colors.blue'),
            '#54BD06' => trans('slider::admin.colors.green'),
        ];

        $view->with('colors', $colors);
    }
}