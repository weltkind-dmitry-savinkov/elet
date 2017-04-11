@extends('layouts.app')

@section('page_content')
<div class="layout__wrapper">
    <div class="layout__content">
        <h1 class="page-title">{{ $credit->title }}</h1>
        <div>
            {!! $credit->description !!}
        </div>
    </div>

<div class="layout__sidebar">
    <div class="calc-small">
        <h2 class="calc-small__title">Кредитный калькулятор
        </h2>
        <form action="#">
            <div class="calc-small__item">
                <label>Валюта</label>
                <select>
                    <option value="1">Сомы</option>
                    <option value="2">Доллары</option>
                </select>
            </div>
            <div class="calc-small__item">
                <label for="summ">Сумма</label>
                <input id="summ" type="text" required="required">
            </div>
            <div class="calc-small__item">
                <label>Срок кредита</label>
                <div class="calc-small__slider-input">
                    <input id="slider_side_time_input" type="text">
                </div>
                <div class="calc-small__slider">
                    <input id="slider_side_time" type="text">
                </div>
                <div class="calc-small__values">
                    <div class="calc-small__val-left">2 мес.
                    </div>
                    <div class="calc-small__val-right">65 мес.
                    </div>
                </div>
            </div>
            <div class="calc-small__item">
                <label for="rate">Ставка</label>
                <input id="rate" type="text" required="required">
            </div>
            <div class="calc-small__item">
                <label>Тип платежей</label>
                <select>
                    <option value disabled="disabled" selected="selected">Виды платежа</option>
                    <option value="annuit">Аннуитетные платежи</option>
                    <option value="diff">Дифференцированные</option>
                </select>
            </div>
            <div class="calc-small__item">
                <label>Общая сумма выплат за весь период</label>
                <input type="text" disabled="disabled" value>
            </div>
            <div class="calc-small__item">
                <label>Сумма переплаты по кредиту</label>
                <input type="text" disabled="disabled" value>
            </div>
            <div class="calc-small__item">
                <input class="button button_high button_block button_lg" type="submit" value="Отправить заявку">
            </div>
            <div class="calc-small__item">
                <a href="#">Ознакомиться с графиком погашения</a>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
