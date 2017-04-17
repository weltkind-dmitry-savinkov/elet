@extends('admin::admin.index')

@section('th')
    <th>@sortablelink('title', trans('branches::admin.name'))</th>    <th>@lang('admin::admin.control')</th>
@endsection

@section('td')
    @foreach($entities as $entity)
        <tr>
            <td>{{ $entity->name }}</td>
            <td class="controls">@include ('admin::common.controls.all', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])</td>
        </tr>
    @endforeach
@endsection()