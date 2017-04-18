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
                    @if($entity->image_mini)
                        <div class="news-list__left">
                            <div class="news-list__image">
                                <img class="fit" src="{{$entity->image_mini}}" alt="{{$entity->title}}">
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
                    @else
                        <h2 class="news-list__title">
                                <a href="#">{{ $entity->title }}</a>
                        </h2>
                        <div class="news-list__date">
                            <time datetime="2016-01-06T18:26">{!! Date::_('d.m.Y H:i:s') !!}</time>
                        </div>
                        <div class="news-list__content">
                            {{ nl2br(e($entity->preview)) }}
                        </div>
                    @endif
                </div>
            @endforeach
        @endif
    </div>
@endsection