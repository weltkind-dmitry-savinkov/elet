@extends('admin::admin.index')

@section('title')
    <h2>Кредитные продукты</h2>
@endsection

@section('th')
    <th>@sortablelink('title', 'Наименование')</th>
    <th>@sortablelink('interest_rate', 'Процетная ставка')</th>
    <th>@sortablelink('created_at', 'Добавлено')</th>
    <th>@lang('admin::admin.control')</th>
@endsection

@section('td')
    @foreach ($entities as $entity)
        <tr @if (!$entity->active) class="unpublished" @endif>
            <td>{{ $entity->title }}</td>
            <td>{{ $entity->interest_rate }}</td>
            <td>{{ $entity->created_at }}</td>
            <td class="controls">@include ('admin::common.controls.all', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])</td>
        </tr>
    @endforeach
@endsection