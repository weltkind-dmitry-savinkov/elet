<!DOCTYPE html>
<html class="no-js" lang="{!! lang() !!}">

<head>

    <meta charset="utf-8">

    @hasSection('meta-title')
    <title>@yield('meta-title')</title>
    @elseif(isset($meta->title) && $meta->title)
        <title>{{$meta->title}}</title>
    @endif

    @if(isset($og->site_name) && $og->site_name)
        <meta property="og:site_name" content="{{$og->site_name}}" />
    @endif

    @if(isset($og->image) && $og->image)
        <meta property="og:image" content="{{$og->image}}" />
    @endif

    @if(isset($og->title) && $og->title)
        <meta property="og:title" content="{{$og->title}}" />
    @endif

    @if(isset($og->description) && $og->description)
        <meta property="og:description" content="{{$og->description}}" />
    @endif


    @if(isset($meta->keywords) && $meta->keywords)
        <meta name="keywords" content="{{$meta->keywords}}" />
    @endif

    @if(isset($meta->description) && $meta->description)
        <meta name="description" content="{{$meta->description}}" />
    @endif

    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="noodp, noydir">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="theme-color" content="#ffffff">

    <meta name="apple-mobile-web-app-title" content="Elet-Kapital">
    <meta name="application-name" content="Elet-Kapital">

    <link type="image/png" href="/favicons/favicon.ico" rel="icon" sizes="48x48">
    <link type="image/png" href="/favicons/favicon-32x32.png" rel="icon" sizes="32x32">
    <link type="image/png" href="/favicons/favicon-16x16.png" rel="icon" sizes="16x16">
    <link href="/favicons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="/favicons/safari-pinned-tab.svg" rel="mask-icon">
    <link href="/favicons/manifest.json" rel="manifest">




    <link href="/css/reset.css" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/modules.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">

    @stack('css')


    <script src="/js/jquery-2.2.4.min.js"></script>
    <script src="/js/modernizr.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="{{ asset('/js/CreditCalculator.js') }}"></script>
</head>

<body class="page">
<!--[if lt IE 9]>
<p class="browsehappy">@lang('index.old_browser')</p><![endif]-->

<div class="page__content">
    <div class="page__wrapper">
        <div class="page__header">
            <div class="header">
                <div class="header__wrapper">
                    <div class="header__left">
                        <div class="header__logo">
                            <div class="logo">
                                <a href="{{ home() }}">
                                    <img src="{{ asset('img/logo.png') }}" alt="Элет капитал">
                                </a>
                            </div>
                        </div>
                    </div>
                <div class="header__right">
                    <div class="header__top">
                        @include('parts.langs')

                        @include('parts.social-buttons')

                        @include('parts.search')
                    </div>
                    @include('parts.menu-header')
                </div>
            </div>
        </div>
        <div class="page__main">
            <div class="layout">
                @section('page_content')
                @show
            </div>
        </div>
    </div>
    <div class="page__buffer"></div>
    @include('parts.footer')
    </div>
</div>
<script src="/js/plugins.js"></script>
<script src="/js/main.js"></script>
<script src="{{ asset('js/Core.js') }}"></script>

@stack('js')

</body>

</html>

