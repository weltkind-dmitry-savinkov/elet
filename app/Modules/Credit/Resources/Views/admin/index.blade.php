@extends('admin::admin.index')

@section('th')
    <th>@sortablelink('title', trans('credit::admin.name'))</th>
    <th>@sortablelink('interest_rate', trans('credit::admin.rate'))</th>
    <th>@sortablelink('created_at', trans('credit::admin.created_at'))</th>
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