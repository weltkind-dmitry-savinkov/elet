@extends('admin::admin.form')

@section('content')
    <div class="panel-body">
        @include('admin::common.errors')

        <form action="{{ route('admin.roles.store') }}" method="POST">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name" class="control-label">Наименовани</label>
                    <div>
                        <input
                            class="form-control"
                            id="name"
                            name="name"
                            type="text"
                            value="{{ $entity->name ? $entity->name : '' }}"
                        />
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <th>Наименование модуля</th>
                        @foreach($operations as $operation)
                            <th class="text-center">{{ $operation->name }}</th>
                        @endforeach
                    </thead>
                    @foreach($modules as $module)
                        <tr>
                            <td>{{ $module->name }}</td>
                            @foreach($operations as $operation)
                                <td class="text-center">
                                    <input
                                        type="hidden"
                                        name="permissions[{{ $module->id }}][{{ $operation->id }}]"
                                        value="0"
                                    />
                                    <input
                                        type="checkbox"
                                        name="permissions[{{ $module->id }}][{{ $operation->id }}]"
                                        value="1"
                                        checked
                                    />
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>
            </div>
            {{ csrf_field() }}
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
@endsection