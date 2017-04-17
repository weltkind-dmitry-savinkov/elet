@extends('layouts.inner')

@section('content')
    <div class="layout__content">
        <div class="primary">
            {!! $page->content !!}
        </div>
        <ul class="list-big">
            @foreach($items as $item)
                <li class="list-big__item">
                    <a class="list-big__mask" href="{{route('credit.customShow', ['id' => $item->id])}}"></a>
                    <div class="list-big__left">
                        <div class="list-big__image">
                            <a href="{{route('credit.customShow', ['id' => $item->id])}}">
                                <img src="{{$item->imagePath('thumb')}}" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="list-big__right">
                        <h2 class="list-big__title">
                            <a href="{{route('credit.customShow', ['id' => $item->id])}}">{{$item->title}}</a>
                        </h2>
                        <div class="list-big__content">{!!str_limit($item->description, 610)!!}
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="layout__sidebar sticky">
        @include('tree::right-menu')
    </div>
<div class="page__buffer"></div>
@endsection
