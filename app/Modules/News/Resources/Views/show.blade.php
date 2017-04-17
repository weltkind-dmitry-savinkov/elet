@extends('layouts.inner')

@section('content')
    <div class="layout__content">
        <article class="news-full">
            <div class="news-full__date">
                <time datetime="{{Date::_('d.m.Y H:i:s')}}">{{Date::_('d.m.Y H:i:s')}}</time>
            </div>
            <div class="news-full__content primary">
                {!! $entity->content !!}
                <a class="get-back" href="{{route('news')}}">@lang('news::index.back')</a>
            </div>
        </article>
    </div>
    <div class="layout__sidebar sticky">
            @include('tree::right-menu')
        </div>
@endsection
