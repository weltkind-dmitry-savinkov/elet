@extends('layouts.app')

@section('page_content')
    @include('credit::main')
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
                @include('rates::main')
        </div>
    </div>
@endsection
