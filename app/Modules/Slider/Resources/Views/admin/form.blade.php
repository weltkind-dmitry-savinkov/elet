@extends('admin::admin.form')

@section('form_content')


    {!! BootForm::open(['model' => $entity, 'store' => $routePrefix.'store', 'update' => $routePrefix.'update', 'autocomplete' => 'off',
    'files' => true]) !!}

    <div class="col-md-5">
        {!! BootForm::text('title', trans('slider::admin.fields.title')) !!}
        {!! BootForm::text('link', trans('slider::admin.fields.link'), null , [ 'placeholder' => 'https://www.google.com'] ) !!}
    </div>
    <div class="col-md-5 col-md-offset-1">
        {!! BootForm::hidden('active', 0) !!}
        {!! BootForm::checkbox('active', 'Опубликовать', 1) !!}
        {!! BootForm::select('link_type', trans('slider::admin.fields.linkType'),$linkTypes) !!}
    </div>
    <div class="clearfix"></div>

    <div class="col-md-5">
        @include('admin::common.forms.image', [
            'entity'        =>$entity,
            'routePrefix'   =>$routePrefix,
            'field'         =>'image',
            'helpBlock'     => 'Рекомендуемые размеры 1208х465'
            ])

    </div>


@endsection