@extends('admin::admin.index')

@section('title')
    <h2>Филиальная сеть</h2>
@endsection

@section('th')
    <th>@sortablelink('title', 'Наименование')</th>
    <th>@sortablelink('region', 'Область')</th>
    <th>@sortablelink('address', 'Адрес')</th>
    <th>@sortablelink('phone', 'Телефон')</th>
    <th>@lang('admin::admin.control')</th>
@endsection

@section('td')
    @foreach($entities as $entity)
        <tr>
            <td>{{ $entity->title }}</td>
            <td>{{ $entity->region->name }}</td>
            <td>{{ $entity->address }}</td>
            <td>{{ $entity->phone }}</td>
            <td class="controls">@include ('admin::common.controls.all', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])</td>
        </tr>
    @endforeach
@endsection()