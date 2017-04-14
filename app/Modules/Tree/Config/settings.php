<?php
return [

    'title'=>trans('tree::admin.title'),
    'localization'=>true,
    "modules"=>[""=>"",
        "news"=>trans('news::admin.title'),
        "articles"=>trans('articles::admin.title'),
        "gallery"=>trans('gallery::admin.title'),
        "feedback"=>trans('feedback::admin.title'),
        "credit" => trans('credit::admin.title'),
        "branches" => trans('branches::admin.title'),
        "order" => trans('order::admin.title_tree'),
        "partners" => trans('partners::admin.title'),
        "leadership" => trans('leaderships::admin.title')
        ],
    "templates"=> ["inner"=>trans('tree::admin.templates.inner'), "index"=>trans('tree::admin.templates.index')]
];