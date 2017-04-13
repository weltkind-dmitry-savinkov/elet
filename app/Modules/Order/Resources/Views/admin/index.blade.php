@extends('admin::admin.index')

@section('th')
    <th>@sortablelink('fio', trans('order::fields.fio'))</th>
    <th>@sortablelink('phone', trans('order::fields.phone'))</th>
    <th>@sortablelink('area', trans('order::fields.area'))</th>
    <th>@sortablelink('city', trans('order::fields.city'))</th>
    <th>@sortablelink('amount', trans('order::fields.amount'))</th>
    <th>@sortablelink('status', trans('order::fields.status'))</th>
    <th>@lang('admin::admin.control')</th>
@endsection

@section('td')
    @foreach ($entities as $entity)
        <tr>
            <td>{{ $entity->fio }}</td>
            <td>{{ $entity->phone }}</td>
            <td>{{ $entity->area }}</td>
            <td>{{ $entity->city }}</td>
            <td>{{ $entity->amount }}</td>
            <td>{{ $entity->status->title }}</td>
            <td class="controls">
                @include(
                    'admin::common.controls.all',
                    [
                        'routePrefix' => $routePrefix,
                        'id'          => $entity->id
                    ]
                )
            </td>
        </tr>
    @endforeach
@endsection