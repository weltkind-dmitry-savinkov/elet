@extends('admin::admin.index')

@section('th')
    <th>@sortablelink('title', trans('Название'))</th>
    <th>@sortablelink('region', trans('Регион'))</th>
    <th>@sortablelink('address', trans('Адрес'))</th>
    <th>@sortablelink('phone', trans('Телефон'))</th>
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