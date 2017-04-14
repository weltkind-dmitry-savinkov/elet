@extends('layouts.inner')

@section('content')
    <table class="leaders">
        <tbody>
            @php
                $count = 1;
            @endphp
            @foreach($items as $index => $leader)
                @if(($count == 1))
                    <tr>
                @endif

                <tr>
                    <td class="leaders__item">
                        <a class="leaders__mask" href="{{ route('leaderships.customShow', ['id' => $leader->id]) }}"></a>
                        <a class="leaders__image" href="{{ route('leaderships.customShow', ['id' => $leader->id]) }}">
                            <img class="fit" src="{{ $leader->imagePath('full') }}" alt="{{ $leader->title }}">
                        </a>
                        <a class="leaders__title" href="{{ route('leaderships.customShow', ['id' => $leader->id]) }}">{{ $leader->title }}</a>
                        <div class="leaders__text">
                            {{ $leader->position }}
                        </div>
                    </td>
                </tr>

                @if($count == 4)
                    </tr>
                    @php
                        $count = 1;
                    @endphp
                @else
                    @php
                        $count++;
                    @endphp
                @endif
            @endforeach
        </tbody>
    </table>
    {{  $items->appends(\Request::except('page'))->links('common.paginate') }}
@endsection