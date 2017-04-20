@extends('admin::admin.form')

@section('title')
    <h2><a href="{!! URL::route($routePrefix.'index') !!}">Справочник регионов</a></h2>
@endsection

@section('form_content')

    {!! BootForm::open(['model' => $entity, 'store' => $routePrefix.'store', 'update' => $routePrefix.'update', 'autocomplete' => 'off',
   'files' => true]) !!}

    <div class="col-md-12">
        {!! BootForm::text('name', 'Наименование') !!}
    </div>


@endsection