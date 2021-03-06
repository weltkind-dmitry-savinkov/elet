<h6>Заявка на получение кредита</h6>
<table class="table">
        <tr>
            <td><strong>{{ trans('order::fields.status') }}</strong></td>
            <td>Новый</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.created_at') }}</strong></td>
            <td>{{ $entity->created_at }}</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.fio') }}</strong></td>
            <td>{{ $entity->fio }}</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.date_birth') }}</strong></td>
            <td>{{ $entity->date_birth }}</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.area') }}</strong></td>
            <td>{{ $entity->area }}</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.city') }}</strong></td>
            <td>{{ $entity->city }}</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.address') }}</strong></td>
            <td>{{ $entity->address }}</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.phone') }}</strong></td>
            <td>{{ $entity->phone }}</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.purpose') }}</strong></td>
            <td>{{ $entity->purpose }}</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.amount') }}</strong></td>
            <td>{{ $entity->amount }}</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.monthly_amount') }}</strong></td>
            <td>{{ $entity->monthly_amount }}</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.word_password') }}</strong></td>
            <td>{{ $entity->word_password }}</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.passport_series') }}</strong></td>
            <td>{{ $entity->passport_series }}</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.passport_number') }}</strong></td>
            <td>{{ $entity->passport_number }}</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.date_issue') }}</strong></td>
            <td>{{ $entity->date_issue }}</td>
        </tr>
        <tr>
            <td><strong>{{ trans('order::fields.inn') }}</strong></td>
            <td>{{ $entity->inn }}</td>
        </tr>
    </table>