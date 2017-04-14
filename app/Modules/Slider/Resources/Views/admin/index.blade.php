@extends('admin::admin.index')

@section('th')
    <th style="width: 180px;">@sortablelink('title', trans('slider::admin.fields.title'))</th>
    <th style="width: 150px;">@sortablelink('main_image', trans('slider::admin.fields.image'))</th>
    <th style="width: 200px;">@sortablelink('link', trans('slider::admin.fields.link'))</th>
    <th>@sortablelink('priority', trans('slider::admin.fields.priority'))</th>
    <th>{{ trans('slider::admin.fields.control') }}</th>
@endsection

@section('td')
    @foreach ($entities as $entity)
        <tr @if (!$entity->active) class="unpublished" @endif>
            <td>{{ $entity->title }}</td>
            <td><img src="/uploads/slider/mini/{{ $entity->image }}" alt=""></td>
            <td><a href="{{ $entity->link }}">{{ $entity->link }}</a></td>
            <td>@include ('admin::common.controls.priority', ['routePrefix'=>$routePrefix, 'entity'=>$entity])</td>
            <td class="controls">@include ('admin::common.controls.all', ['routePrefix'=>$routePrefix, 'id'=>$entity->id])</td>
        </tr>
    @endforeach
@endsection