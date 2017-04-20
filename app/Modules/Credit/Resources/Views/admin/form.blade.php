@extends('admin::admin.form')

@section('form_content')
    {!! BootForm::open(
            [
                'model'        => $entity,
                'store'        => $routePrefix.'store',
                'update'       => $routePrefix.'update',
                'autocomplete' => 'off',
                'files'        => true
            ]
        )
    !!}

    <div class="col-md-6">
        {!! BootForm::text('title', 'Наименование') !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::number(
                'interest_rate',
                'Процетная ставка',
                $entity->interest_rate ? $entity->interest_rate : '',
                ['step' => 'any']
            )
        !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::hidden('active', 0) !!}
        {!! BootForm::checkbox('active', trans('admin::fields.active'), 1) !!}
    </div>

    <div class="col-md-3">
        @include(
            'admin::common.forms.image',
            [
                'entity'      => $entity,
                'routePrefix' => $routePrefix,
                'field'       => 'icon'
            ]
        )
    </div>

    <div class="col-md-12">
        {!! BootForm::textarea(
                'description',
                'Описание',
                $entity->description ? $entity->description : '',
                ['id' => 'creditDescription']
            )
        !!}
    </div>
@endsection