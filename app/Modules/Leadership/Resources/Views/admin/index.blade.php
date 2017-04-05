@extends('admin::admin.index')

@section('th')
    <th>@sortablelink('title', 'ФИО')</th>
    <th>@sortablelink('position', 'Должность')</th>
    <th>@lang('admin::admin.control')</th>
@endsection

@section('td')
    @foreach($entities as $entity)
        <tr @if (!$entity->active) class="unpublished" @endif>
            <td>{{ $entity->title }}</td>
            <td>{{ $entity->position }}</td>
            <td>
                @include (
                    'admin::common.controls.all',
                    ['routePrefix' => $routePrefix, 'id' => $entity->id]
                )
            </td>
        </tr>
    @endforeach
@endsection