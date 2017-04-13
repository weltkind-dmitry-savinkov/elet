@extends('layouts.app')

@section('page_content')
    @include('credit::main')
    <div class="layout layout_gradient">
        <div class="layout__wrapper">
            <div class="block-medium">
                @include('tree::service-menu')
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
