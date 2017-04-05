@extends('admin::admin.form')

@section('form_content')
    {!! BootForm::open([
            'model'        => $entity,
            'store'        => $routePrefix . 'store',
            'update'       => $routePrefix . 'update',
            'autocomplete' => 'off',
            'files'        => true
        ])
    !!}

    <div class="col-md-6">
        {!! BootForm::text('title', trans('Наименование')) !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::select(
            'region',
            trans('Область'),
            [
                'г.Бишкек',
                'Чуйская область',
                'Ошская область',
                'Джалалабадская область',
                'Талаская область',
                'Иссык-Кульская область',
                'Нарынская область',
                'Баткенская область'
            ]
        ) !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::text('phone', trans('Телефон')) !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::text('operating_time', trans('Время работы')) !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::textarea('address', trans('Адрес')) !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::select(
                'work_days',
                trans('Дни работы'),
                [
                    'Пн',
                    'Вт',
                    'Ср',
                    'Чт',
                    'Пт',
                    'Сб',
                    'Вс'
                ],
                null,
                ['multiple' => true, 'size' => 10]
            )
        !!}
    </div>

    <div class="col-md-12">
        <div id="googleMap"></div>
    </div>
@endsection