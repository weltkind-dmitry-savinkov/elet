@extends('admin::admin.form')

@section('form_content')
    {!! BootForm::open([
        'model' => $entity,
        'store' => $routePrefix.'store',
        'update' => $routePrefix.'update',
        'autocomplete' => 'off',
        'files' => false
    ]) !!}

    <div class="col-md-6">
        {!! BootForm::text(
                'iso_code',
                trans('rates::admin.iso_code'),
                $entity->iso_code ? $entity->iso_code : ''
        ) !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::text(
                'name',
                trans('rates::admin.name'),
                $entity->name ? $entity->name : ''
        ) !!}
    </div>

@endsection