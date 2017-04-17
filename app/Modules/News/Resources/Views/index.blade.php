@extends('layouts.inner')

@section('meta-title')
    {{ $pageTitle }}
@endsection

@section('content')
    <div class="news-list">
        @if (count($items))
            @foreach($items as $entity)
                <div class="news-list__item">
                    <a class="news-list__mask" href="{{ route('news.customShow', ['id' => $entity->id]) }}"></a>
                    <div class="news-list__left">
                        <div class="news-list__image">
                            @if($entity->image_mini)
                                <img class="fit-cover" src="{{$entity->image_mini}}" alt="{{$entity->title}}">
                            @else
                                <img class="fit-cover" src="{{asset('img/nophoto.png')}}" alt="{{$entity->title}}">
                            @endif
                        </div>
                    </div>
                    <div class="news-list__right">
                        <h2 class="news-list__title">
                            <a href="#">{{ $entity->title }}</a>
                        </h2>
                        <div class="news-list__date">
                            <time datetime="2016-01-06T18:26">{!! Date::_('d.m.Y H:i:s') !!}</time>
                        </div>
                        <div class="news-list__content">
                            {{ nl2br(e($entity->preview)) }}
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection