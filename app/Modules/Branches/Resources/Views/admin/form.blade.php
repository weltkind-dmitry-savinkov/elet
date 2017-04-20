@extends('admin::admin.form')

@section('title')
    <h2><a href="{!! URL::route($routePrefix.'index') !!}">Филиальная сеть</a></h2>
@endsection

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
        {!! BootForm::text('title', 'Наименование') !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::select(
            'region_id',
            'Область',
            $regions
        ) !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::text('phone', 'Телефон') !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::text('operating_time', 'Время работы') !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::textarea('address', 'Адрес') !!}
    </div>

    <div class="col-md-6">
        <label for="work_days">Дни работы</label>
        <div>
            <select
                class="form-control"
                name="work_days[]"
                multiple="multiple"
                size="9"
            >
                @foreach($work_days as $index => $day)
                    <option
                        value="{{ $index }}"
                        {{ in_array($index, $selected_workd_days) ? 'selected' : ''}}
                    >
                        {{ $day }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-12">
        <label for="" class="control-label">Положение на карте</label>
        <div style="width: 100%; height: 400px" id="map"></div>
    </div>
    {!! BootForm::hidden(
            'lat',
            $entity->lat ? $entity->lat : '',
            ['id' => 'lat']
        )
    !!}

    {!! BootForm::hidden(
            'lng',
            $entity->lat ? $entity->lat : '',
            ['id' => 'lng']
        )
    !!}
@endsection

@push('js')
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAtkpXohTFtMdq1IgvRXedAqD0hEGcnSA">
    </script>
<script type="text/javascript" src="/js/GoogleMap.js"></script>
<script type="text/javascript" src="/js/Branches.js"></script>
@if($entity->lat && $entity->lng)
<script type="text/javascript">
    Branches.setMarker({{ $entity->lat }}, {{ $entity->lng }});
</script>
@endif
@endpush