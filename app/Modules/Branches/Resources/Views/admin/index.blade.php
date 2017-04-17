@extends('admin::admin.index')

@section('th')
    <th>@sortablelink('title', trans('branches::admin.name'))</th>
    <th>@sortablelink('region', trans('branches::admin.region'))</th>
    <th>@sortablelink('address', trans('branches::admin.address'))</th>
    <th>@sortablelink('phone', trans('branches::admin.phone'))</th>
    <th>@lang('admin::admin.control')</th>
@endsection

@section('td')
    @foreach($entities as $entity)
        <tr>
            <td>{{ $entity->title }}</td>
            <td>{{ $entity->region }}</td>
            <td>{{ $entity->address }}</td>
            <td>{{ $entity->phone }}</td>
            <td class="controls">@include ('admin::common.controls.all', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])</td>
        </tr>
    @endforeach
@endsection()