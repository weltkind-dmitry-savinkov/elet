@extends('admin::admin.index')

@section('th')
    <th style="width: 200px;">
        @sortablelink('name', trans('admin::fields.title'))
    </th>
    <th>
        @lang('admin::admin.control')
    </th>
@endsection

@section('td')
    @foreach ($entities as $entity)
        <tr>
            <td>{{ $entity->name }}</td>
            <td class="controls">
                @include (
                    'admin::common.controls.all',
                    ['routePrefix'=>$routePrefix, 'id'=>$entity->id]
                )
            </td>
        </tr>
    @endforeach
@endsection