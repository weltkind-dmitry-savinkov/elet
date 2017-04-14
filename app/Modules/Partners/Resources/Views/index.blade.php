@extends('layouts.inner')

@section('content')

    <div class="partners">
        <table class="partners__list">
            <tbody>
                @php
                    $count = 1;
                @endphp
                @foreach($items as $index => $partner)
                    @if(($count == 1))
                        <tr>
                    @endif

                    <td class="partners__item">
                        <a class="partners__link-mask" href="http://{{ $partner->url }}"></a>
                        <div class="partners__title">{{ $partner->title }}
                        </div>
                        <div class="partners__image">
                            <img src="{{ $partner->imagePath('thumb') }}" alt="{{ $partner->title }}">
                        </div>
                        <a class="partners__link" href="http://{{ $partner->url }}">{{ $partner->url }}</a>
                    </td>

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
    </div>
@endsection