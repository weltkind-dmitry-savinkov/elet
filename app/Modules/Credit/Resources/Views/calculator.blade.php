@extends('layouts.inner')

@section('content')

<div class="layout__content">
    <div class="calc-small calc-small_inline">
        <form action="#">
            <div class="calc-small__row">
                <div class="calc-small__left">
                    <div class="calc-small__item">
                        <label>Валюта</label>
                        <select>
                            <option value="1">Сомы</option>
                            <option value="2">Доллары</option>
                        </select>
                    </div>
                </div>
                <div class="calc-small__right">
                    <div class="calc-small__item">
                        <label for="summ">Сумма</label>
                        <input id="summ" name="summ" type="text" required>
                    </div>
                </div>
            </div>
            <div class="calc-small__item">
                <label>Срок кредита</label>
                <div class="calc-small__slider-input">
                    <input id="slider_side_time_input" name="slider_side_time_input" type="text">
                </div>
                <div class="calc-small__slider">
                    <input id="slider_side_time" name="slider_side_time" type="text">
                </div>
                <div class="calc-small__values">
                    <div class="calc-small__val-left">2 мес.
                    </div>
                    <div class="calc-small__val-right">65 мес.
                    </div>
                </div>
            </div>
            <div class="calc-small__row">
                <div class="calc-small__left">
                    <div class="calc-small__item">
                        <label for="rate">Ставка</label>
                        <input id="rate" name="rate" type="text" required>
                    </div>
                </div>
                <div class="calc-small__right">
                    <div class="calc-small__item">
                        <label>Тип платежей</label>
                        <select name="payment_type" id="payment_type">
                            <option value disabled selected>Виды платежа</option>
                            <option value="annuityPayment">Аннуитетные платежи</option>
                            <option value="differentialPayment">Дифференцированные</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="calc-small__item">
                <input id="calculatorBtn" class="button button_high button_block button_lg" type="button" value="Подсчитать">
            </div>
            <h2 class="calc-small__title">Результат:
            </h2>
            <div class="calc-small__row">
                <div class="calc-small__left">
                    <div class="calc-small__item">
                        <label>Общая сумма выплат за весь период</label>
                        <input type="text" name="overpayment" id="overpayment" disabled value>
                    </div>
                </div>
                <div class="calc-small__right">
                    <div class="calc-small__item">
                        <label>Сумма переплаты по кредиту</label>
                        <input type="text" name="total_month_payment" id="total_month_payment" disabled value>
                    </div>
                </div>
            </div>
            <div class="calc-small__item">
                <a  id="inline" class="fancybox" href="#paymentsInfo">Ознакомиться с графиком погашения</a>
            </div>
        </form>
    </div>
</div>
<div class="layout__sidebar sticky">
    @include('tree::right-menu')
</div>
</div>
<div style="display: none;">
    <div id="paymentsInfo"></div>
</div>

@endsection