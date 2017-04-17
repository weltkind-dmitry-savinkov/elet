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
        {!! BootForm::text('title', trans('branches::admin.name')) !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::select(
            'region_id',
            trans('branches::admin.region'),
            $regions
        ) !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::text('phone', trans('branches::admin.phone')) !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::text('operating_time', trans('branches::admin.operating_time')) !!}
    </div>

    <div class="col-md-6">
        {!! BootForm::textarea('address', trans('branches::admin.address')) !!}
    </div>

    <div class="col-md-6">
        <label for="work_days">{{trans('branches::admin.work_days')}}</label>
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
        <label for="" class="control-label">{{ trans('branches::admin.position_map') }}</label>
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