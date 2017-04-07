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

    @stack('css')


    <script src="/js/jquery-2.2.4.min.js"></script>
    <script src="/js/modernizr.js"></script>
    <script src="/js/bootstrap.js"></script>
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
                                <a href="index.html">
                                    <img src="img/logo.png" alt="Элет капитал">
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
                <div class="layout__wrapper">
                    <div class="block-info">
                        <div class="block-info__left">
                            <div class="info-small">
                                <div class="info-small__title">Справочный центр
                                </div>
                                <a class="info-small__link" href="tel:+996770551100">
                                    <img class="info-small__icon" src="img/phone-orange.png" title alt="Тел:">
                                    <span class="info-small__text">+996 770
                                        <b>551 100</b>
                                    </span>
                                </a>
                                <a class="info-small__link" href="mailto:info@ab.kg">
                                    <img class="info-small__icon" src="img/mail-orange.png" title alt="Email:">
                                    <span class="info-small__text">info@ab.kg</span>
                                </a>
                            </div>
                        </div>
                        <div class="block-info__center">
                            <div class="tabs-small">
                                <div class="tabs-small__main">
                                    <div class="tabs-small__block">
                                        <div class="tabs-small__title">Кредит на квартиру
                                        </div>
                                        <div class="tabs-small__content">
                                            <div class="tabs-small__text">Получите кредит быстро, тут может быть любой другой текст, который описывает данный калькулятор.
                                            </div>
                                            <a class="tabs-small__more" href="#">Узнать больше</a>
                                        </div>
                                    </div>
                                    <div class="tabs-small__block">
                                        <div class="tabs-small__title">Кредит на машину
                                        </div>
                                        <div class="tabs-small__content">
                                            <div class="tabs-small__text">Получите кредит быстро, тут может быть любой другой текст, который описывает данный калькулятор.
                                            </div>
                                            <a class="tabs-small__more" href="#">Узнать больше</a>
                                        </div>
                                    </div>
                                    <div class="tabs-small__block">
                                        <div class="tabs-small__title">Кредит на еду
                                        </div>
                                        <div class="tabs-small__content">
                                            <div class="tabs-small__text">Получите кредит быстро, тут может быть любой другой текст, который описывает данный калькулятор.
                                            </div>
                                            <a class="tabs-small__more" href="#">Узнать больше</a>
                                        </div>
                                    </div>
                                    <div class="tabs-small__block">
                                        <div class="tabs-small__title">Кредит на шприцы
                                        </div>
                                        <div class="tabs-small__content">
                                            <div class="tabs-small__text">Получите кредит быстро, тут может быть любой другой текст, который описывает данный калькулятор.
                                            </div>
                                            <a class="tabs-small__more" href="#">Узнать больше</a>
                                        </div>
                                    </div>
                                    <div class="tabs-small__block">
                                        <div class="tabs-small__title">Кредит на петлю
                                        </div>
                                        <div class="tabs-small__content">
                                            <div class="tabs-small__text">Получите кредит быстро, тут может быть любой другой текст, который описывает данный калькулятор.
                                            </div>
                                            <a class="tabs-small__more" href="#">Узнать больше</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs-small__nav-wrapper">
                                    <div class="tabs-small__nav">
                                        <div class="tabs-small__tab tabs-small__tab_cash">
                                        </div>
                                        <div class="tabs-small__tab tabs-small__tab_home">
                                        </div>
                                        <div class="tabs-small__tab tabs-small__tab_take">
                                        </div>
                                        <div class="tabs-small__tab tabs-small__tab_hands">
                                        </div>
                                        <div class="tabs-small__tab tabs-small__tab_time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-info__right">
                            <div class="range-block">
                                <div class="range-block__title">Сумма кредита:
                                </div>
                                <div class="range-block__input">
                                    <div class="range-small">
                                        <div class="range-small__slider">
                                            <input id="slider_summ" type="text">
                                        </div>
                                        <div class="range-small__value" id="slider_summ_value">0
                                        </div>
                                    </div>
                                </div>
                                <div class="range-block__title">Срок кредита:
                                </div>
                                <div class="range-block__input">
                                    <div class="range-small">
                                        <div class="range-small__slider">
                                            <input id="slider_time" type="text">
                                        </div>
                                        <div class="range-small__value" id="slider_time_value">0
                                        </div>
                                    </div>
                                </div>
                                <div class="range-block__bottom">
                                    <div class="range-block__left">
                                        <a class="button button_main button_block button_lg" href="#">Рассчитать</a>
                                    </div>
                                    <div class="range-block__right">
                                        <a class="button button_high button_block button_lg" href="#">Получить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layout layout_gradient">
                <div class="layout__wrapper">
                    <div class="block-medium">
                        <div class="block-medium__left">
                            <div class="widget-block">
                                <a class="widget-block__title" href="#">Онлайн - кредит</a>
                                <div class="widget-block__button">
                                    <div class="button button_success button_block button_md">Оформить кредит
                                    </div>
                                </div>
                                <div class="widget-block__main">
                                    <ul class="list-small">
                                        <li class="list-small__item">
                                            <a class="list-small__link" href="#">График приема посетителей</a>
                                        </li>
                                        <li class="list-small__item">
                                            <a class="list-small__link" href="#">Оставить предложение, жалобу</a>
                                        </li>
                                        <li class="list-small__item">
                                            <a class="list-small__link" href="#">Отделения и филиалы</a>
                                        </li>
                                        <li class="list-small__item">
                                            <a class="list-small__link" href="#">Погашение кредита через терминалы</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="block-medium__center">
                            <div class="carousel-main">
                                <div class="carousel-main__track">
                                    <div class="carousel-main__item">
                                        <a class="carousel-main__link" href="#"></a>
                                        <div class="carousel-main__title">Ипотечные
                                            <br> кредиты
                                        </div>
                                        <img src="uploads/slider/1.jpg" alt="img">
                                    </div>
                                    <div class="carousel-main__item">
                                        <a class="carousel-main__link" href="#"></a>
                                        <div class="carousel-main__title">Тебе становится хлуджше
                                        </div>
                                        <img src="uploads/slider/2.jpg" alt="img">
                                    </div>
                                    <div class="carousel-main__item">
                                        <a class="carousel-main__link" href="#"></a>
                                        <div class="carousel-main__title">ГРАФОН
                                        </div>
                                        <img src="uploads/slider/3.jpg" alt="img">
                                    </div>
                                    <div class="carousel-main__item">
                                        <a class="carousel-main__link" href="#"></a>
                                        <div class="carousel-main__title">Переиначивать
                                        </div>
                                        <img src="uploads/slider/2.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-medium__right">
                            <div class="widget-block">
                                <a class="widget-block__title" href="#">Курсы валют НБКР</a>
                                <div class="widget-block__main">
                                    <div class="exchange">
                                        <div class="exchange__item">
                                            <div class="exchange__flag">
                                                <img src="uploads/flags/us.png" alt="USD">
                                            </div>
                                            <div class="exchange__text">USD
                                            </div>
                                            <div class="exchange__value exchange__value_up">69.49
                                            </div>
                                        </div>
                                        <div class="exchange__line">
                                        </div>
                                        <div class="exchange__item">
                                            <div class="exchange__flag">
                                                <img src="uploads/flags/eu.png" alt="USD">
                                            </div>
                                            <div class="exchange__text">EUR
                                            </div>
                                            <div class="exchange__value exchange__value_down">123.49
                                            </div>
                                        </div>
                                        <div class="exchange__line">
                                        </div>
                                        <div class="exchange__item">
                                            <div class="exchange__flag">
                                                <img src="uploads/flags/ru.png" alt="USD">
                                            </div>
                                            <div class="exchange__text">RUB
                                            </div>
                                            <div class="exchange__value exchange__value_down">436.49
                                            </div>
                                        </div>
                                        <div class="exchange__line">
                                        </div>
                                        <div class="exchange__item">
                                            <div class="exchange__flag">
                                                <img src="uploads/flags/kz.png" alt="USD">
                                            </div>
                                            <div class="exchange__text">KZT
                                            </div>
                                            <div class="exchange__value exchange__value_up">0.49
                                            </div>
                                        </div>
                                        <div class="exchange__line">
                                        </div>
                                        <div class="exchange__item">
                                            <div class="exchange__flag">
                                                <img src="uploads/flags/uz.png" alt="USD">
                                            </div>
                                            <div class="exchange__text">UZS
                                            </div>
                                            <div class="exchange__value exchange__value_up">567.49
                                            </div>
                                        </div>
                                        <div class="exchange__line">
                                        </div>
                                        <div class="exchange__item">
                                            <div class="exchange__flag">
                                                <img src="uploads/flags/cn.png" alt="USD">
                                            </div>
                                            <div class="exchange__text">CNY
                                            </div>
                                            <div class="exchange__value exchange__value_down">88.49
                                            </div>
                                        </div>
                                        <div class="exchange__line">
                                        </div>
                                        <div class="exchange__item">
                                            <div class="exchange__flag">
                                                <img src="uploads/flags/en.png" alt="USD">
                                            </div>
                                            <div class="exchange__text">GBP
                                            </div>
                                            <div class="exchange__value exchange__value_down">78.678
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page__buffer"></div>
    </div>
    @include('parts.footer')
</div>

<script src="/js/plugins.js"></script>
<script src="/js/main.js"></script>

@stack('js')

</body>

</html>

