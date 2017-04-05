@extends('admin::admin.index')

@section('th')
    <th>@sortablelink('title', trans('Название'))</th>
    <th>@sortablelink('region', trans('Регион'))</th>
    <th>@sortablelink('address', trans('Адрес'))</th>
    <th>@sortablelink('phone', trans('Телефон'))</th>
@endsection

@section('td')
    @foreach($entities as $entity)
        <td>{{ $entity->title }}</td>
        <td>{{ $entity->region }}</td>
        <td>{{ $entity->address }}</td>
        <td>{{ $entity->phone }}</td>
    @endforeach
@endsection()