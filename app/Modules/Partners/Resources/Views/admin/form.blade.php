@extends('admin::admin.form')

@section('form_content')
    {!! BootForm::open(
        [
            'model'        => $entity,
            'store'        => $routePrefix . 'store',
            'update'       => $routePrefix . 'update',
            'autocomplete' => 'off',
            'files'        => true

        ]
    ) !!}

    <div class="col-md-6">
        {!! BootForm::text('title', trans('partners::fields.title')) !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::text('url', trans('partners::fields.url')) !!}
    </div>

    <div class="col-md-6">
        @include(
            'admin::common.forms.image',
            [
                'entity'      => $entity,
                'routePrefix' => $routePrefix,
                'field'       => 'image'
            ]
        )
    </div>

    <div class="col-md-6">
        {!! BootForm::hidden('active', 0) !!}
        {!! BootForm::checkbox('active', trans('admin::fields.active'), 1) !!}
    </div>
@endsection