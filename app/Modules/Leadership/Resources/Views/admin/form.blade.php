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
        {!! BootForm::text('title', trans('leadership::admin.full_name')) !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::text('position', trans('leadership::admin.position')) !!}
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

    <div class="col-md-12">
        {!! BootForm::textarea(
                'description',
                trans('Описание'),
                $entity ? $entity->description : '',
                ['id' => 'content']
            )
        !!}
    </div>
@endsection