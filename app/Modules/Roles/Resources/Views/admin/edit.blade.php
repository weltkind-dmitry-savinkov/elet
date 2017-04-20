@extends('admin::admin.form')

@section('content')
    <div class="panel-body">
        @include('admin::common.errors')

        <form action="{{ route('admin.roles.update', ['role' => $entity->id]) }}" method="POST">
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
                    <tbody>
                        @foreach($permissions as $moduleId => $permission)
                            <tr>
                                <td>{{ $permission['name'] }}</td>
                                @foreach($permission['operations'] as $id => $allowed)
                                    <td class="text-center">
                                        <input
                                            type="hidden"
                                            value="0"
                                            name="permissions[{{ $id }}][allowed]"
                                        />

                                        <input
                                            type="checkbox"
                                            name="permissions[{{ $id }}][allowed]"
                                            value="1"
                                            {{ $allowed ? 'checked' : '' }}
                                        />
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
@endsection