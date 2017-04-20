@extends('admin::admin.index')

@section('title')
    <h2>Партнеры</h2>
@endsection

@section('th')
    <th>@sortablelink('title', trans('partners::fields.title'))</th>
    <th>@sortablelink('position', trans('partners::fields.url'))</th>
    <th>@lang('admin::admin.control')</th>
@endsection

@section('td')
    @foreach($entities as $entity)
        <tr @if (!$entity->active) class="unpublished" @endif>
            <td>{{ $entity->title }}</td>
            <td>{{ $entity->url }}</td>
            <td>
                @include (
                    'admin::common.controls.all',
                    ['routePrefix' => $routePrefix, 'id' => $entity->id]
                )
            </td>
        </tr>
    @endforeach
@endsection