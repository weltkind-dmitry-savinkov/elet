@extends('admin::admin.index')

@section('th')
    <th>@sortablelink('iso_code', trans('rates::admin.iso_code'))</th>
    <th>@sortablelink('name', trans('rates::admin.name'))</th>
    <th>@lang('admin::admin.control')</th>
@endsection

@section('td')
    @foreach ($entities as $entity)
        <tr>
            <td>{{ $entity->iso_code }}</td>
            <td>{{ $entity->name }}</td>
            <td class="controls">@include ('admin::common.controls.all', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])</td>
        </tr>
    @endforeach
@endsection