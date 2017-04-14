@extends('admin::admin.index')

@section('topmenu')
    <div class="header-module-controls">
        @include('admin::common.topmenu.list', ['routePrefix'=>$routePrefix])
    </div>
@endsection

@section('additing_block')
        <form action="{{ route('order.admin.email.save') }}" method="post">
            <div class="col-md-3">
                <label for="email">
                    {{ trans('order::fields.recipient_email') }}
                </label>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" value="{{ $email }}" />
                </div>
            </div>
            <div class="col-md-3">
                <label for="" class="form-controle"></label>
                <div class="form-group">
                    <input type="submit" value="Сохранить" class="btn btn-primary">
                </div>
            </div>
            {{ csrf_field() }}
        </form>
@endsection

@section('th')
    <th>@sortablelink('fio', trans('order::fields.fio'))</th>
    <th>@sortablelink('phone', trans('order::fields.phone'))</th>
    <th>@sortablelink('area', trans('order::fields.area'))</th>
    <th>@sortablelink('city', trans('order::fields.city'))</th>
    <th>@sortablelink('amount', trans('order::fields.amount'))</th>
    <th>@sortablelink('status', trans('order::fields.status'))</th>
    <th>@lang('admin::admin.control')</th>
@endsection

@section('td')
    @foreach ($entities as $entity)
        <tr>
            <td>{{ $entity->fio }}</td>
            <td>{{ $entity->phone }}</td>
            <td>{{ $entity->area }}</td>
            <td>{{ $entity->city }}</td>
            <td>{{ $entity->amount }}</td>
            <td>{{ $entity->status->title }}</td>
            <td class="controls">
                @include(
                    'admin::common.controls.edit',
                    [
                        'routePrefix' => $routePrefix,
                        'id'          => $entity->id
                    ]
                )
            </td>
        </tr>
    @endforeach
@endsection