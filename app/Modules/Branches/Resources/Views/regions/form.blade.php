@extends('admin::admin.form')

@section('form_content')

    {!! BootForm::open(['model' => $entity, 'store' => $routePrefix.'store', 'update' => $routePrefix.'update', 'autocomplete' => 'off',
   'files' => true]) !!}

    <div class="col-md-12">
        {!! BootForm::text('name', trans('branches::admin.name')) !!}
    </div>


@endsection