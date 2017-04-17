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
        <h2 class="calc-small__title">
            {{ trans('calculator') }}
        </h2>
        <form action="#" id="smallCalc">
            <div class="calc-small__item">
                <label>{{ trans('credit::currency')}}</label>
                <select name="currency" id="currency">
                    <option value="1">{{ trans('credit::soms') }}</option>
                    <option value="2">{{ trans('credit::dollars') }}</option>
                </select>
            </div>
            <div class="calc-small__item">
                <label for="summ">{{ trans('credit::amount') }}</label>
                <input id="summ" name="summ" type="text" required="required">
            </div>
            <div class="calc-small__item">
                <label>{{ trans('credit::term') }}</label>
                <div class="calc-small__slider-input">
                    <input id="slider_side_time_input" name="time" type="text">
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
            <div class="calc-small__item">
                <label for="rate">{{ trans('credit::rate') }}</label>
                <input id="rate"  name="rate" type="text" required="required">
            </div>
            <div class="calc-small__item">
                <label>{{ trans('credit::type_payment') }}</label>
                <select name="payment_type">
                    <option value="annuityPayment" selected="selected">{{trans('credit::annuity_payments')}}</option>
                    <option value="differentialPayment">{{ trans('credit::differentiated') }}</option>
                </select>
            </div>
            <div class="calc-small__item">
                <label>{{ trans('credit::total_payment_period') }}</label>
                <input type="text" name="total_month_payment" id="total_month_payment" disabled="disabled" value>
            </div>
            <div class="calc-small__item">
                <label>{{ trans('credit::amount_overpayment_loan') }}</label>
                <input type="text" name="overpayment" id="overpayment" disabled="disabled" value>
            </div>
            <div class="calc-small__item">
                <input id="giveCreditBtn" class="button button_high button_block button_lg" type="button" value="{{ trans('send_request') }}">
            </div>
            <div class="calc-small__item">
                <a href="#">{{ trans('see_repayment_schedule') }}</a>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
