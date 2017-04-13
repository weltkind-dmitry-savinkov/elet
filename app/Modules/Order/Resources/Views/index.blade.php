@extends('layouts.app')

@section('page_content')
<div class="layout__wrapper">
    <div class="layout__content">
        <h1 class="page-title">Заявка на кредит</h1>
        <div class="form-main form-main_margin-minus">
            <form action="{{ route('order.store') }}" method="post" novalidate>
                <div class="form-main__row">
                    <div class="form-main__left">
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="initials">Имя, фамилия, отчество
                                        <span class="color-high">*</span>
                                    </label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Имя - это такой звук, на который Вы обычно шевелитесь.
                                </div>
                            </div>
                            <div class="form-main__main">
                                <input
                                    id="initials"
                                    name="fio"
                                    type="text"
                                    required
                                    class="{{ $errors->get('fio') ? 'input-error styler' : '' }}"
                                    value="{{ old('fio') }}"
                                >
                                @if($errors->get('fio'))
                                    <div class="feedback__error">
                                        {{ implode('<br/>', $errors->get('fio')) }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="area">Область</label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Всплывающая подсказка
                                </div>
                            </div>
                            <div class="form-main__main">
                                <select id="area" name="area">
                                    <option value="1">Чуйская</option>
                                    <option value="2">Горная</option>
                                    <option value="3">Степная</option>
                                    <option value="4">Иссык-Кульская</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="address">Улица, дом, кв</label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Всплывающая подсказка
                                </div>
                            </div>
                            <div class="form-main__main">
                                <input
                                    id="address"
                                    type="text"
                                    name="address"
                                    class="{{ $errors->get('address') ? 'input-error styler' : '' }}"
                                    value="{{ old('address') }}"
                                >
                                @if($errors->get('address'))
                                    <div class="feedback__error">
                                        {{ implode('<br/>', $errors->get('address')) }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-main__right">
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="birth_date">Дата рождения
                                        <span class="color-high">*</span>
                                    </label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Всплывающая подсказка
                                </div>
                            </div>
                            <div class="form-main__main">
                                <input
                                    class="calendar-main {{ $errors->get('date_birth') ? 'input-error styler' : '' }}"
                                    id="birth_date"
                                    name="date_birth"
                                    type="text" required
                                    value="{{ old('date_birth') }}"
                                >
                                @if($errors->get('date_birth'))
                                    <div class="feedback__error">
                                        {{ implode('<br/>', $errors->get('date_birth')) }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="address_city">Город/село</label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Всплывающая подсказка
                                </div>
                            </div>
                            <div class="form-main__main">
                                <input
                                    id="address_city"
                                    name="city"
                                    type="text"
                                    class="{{ $errors->get('city') ? 'input-error styler' : '' }}"
                                    value="{{ old('city') }}"
                                >
                                @if($errors->get('city'))
                                    <div class="feedback__error">
                                        {{ implode('<br/>', $errors->get('city')) }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="phone">Телефон
                                        <span class="color-high">*</span>
                                    </label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Всплывающая подсказка
                                </div>
                            </div>
                            <div class="form-main__main">
                                <input
                                    id="phone"
                                    type="text"
                                    name="phone"
                                    required
                                    class="{{ $errors->get('phone') ? 'input-error styler' : '' }}"
                                    value="{{ old('phone') }}"
                                >
                                @if($errors->get('phone'))
                                    <div class="feedback__error">
                                        {{ implode('<br/>', $errors->get('phone')) }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-main__row">
                    <div class="form-main__item">
                        <div class="form-main__top">
                            <div class="form-main__label">
                                <label for="target">Цель кредита</label>
                            </div>
                            <div class="form-main__help">
                            </div>
                            <div class="form-main__tooltip">Всплывающая подсказка
                            </div>
                        </div>
                        <div class="form-main__main">
                            <input
                                id="target"
                                name="purpose"
                                type="text"
                                class="{{ $errors->get('purpose') ? 'input-error styler' : '' }}"
                                value="{{ old('purpose') }}"
                            >
                            @if($errors->get('purpose'))
                                <div class="feedback__error">
                                    {{ implode('<br/>', $errors->get('purpose')) }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-main__row">
                    <div class="form-main__left">
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="amount">Сумма кредита</label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Всплывающая подсказка
                                </div>
                            </div>
                            <div class="form-main__main">
                                <input
                                    id="amount"
                                    name="amount"
                                    type="text" min="0"
                                    class="{{ $errors->get('amount') ? 'input-error styler' : '' }}"
                                    value="{{ old('amount') }}"
                                >
                                @if($errors->get('amount'))
                                    <div class="feedback__error">
                                        {{ implode('<br/>', $errors->get('amount')) }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-main__slider">
                                <input id="amount_slider" name="amount" type="text">
                            </div>
                            <div class="form-main__values">
                                <div class="form-main__val-left">0
                                </div>
                                <div class="form-main__val-right">3 000 000
                                </div>
                            </div>
                        </div>
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="month_repayment">Ежемесячная сумма на погашение кредита</label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Всплывающая подсказка
                                </div>
                            </div>
                            <div class="form-main__main">
                                <input
                                    id="month_repayment"
                                    name="monthly_amount"
                                    type="text"
                                    min="0"
                                    class="{{ $errors->get('monthly_amount') ? 'input-error styler' : '' }}"
                                    value="{{ old('monthly_amount') }}"
                                >
                                @if($errors->get('monthly_amount'))
                                    <div class="feedback__error">
                                        {{ implode('<br/>', $errors->get('monthly_amount')) }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="passport_series">Серия паспорта
                                        <span class="color-high">*</span>
                                    </label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Всплывающая подсказка
                                </div>
                            </div>
                            <div class="form-main__main">
                                <input
                                    id="passport_series"
                                    name="passport_series"
                                    type="text"
                                    required
                                    class="{{ $errors->get('passport_series') ? 'input-error styler' : '' }}"
                                    value="{{ old('passport_series') }}"
                                >
                                @if($errors->get('passport_series'))
                                    <div class="feedback__error">
                                        {{ implode('<br/>', $errors->get('passport_series')) }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="passport_date">Дата выдачи паспорта
                                        <span class="color-high">*</span>
                                    </label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Всплывающая подсказка
                                </div>
                            </div>
                            <div class="form-main__main">
                                <input
                                    class="calendar-main {{ $errors->get('date_issue') ? 'input-error styler' : '' }}"
                                    id="passport_date"
                                    name="date_issue"
                                    type="text"
                                    required
                                    value="{{ old('date_issue') }}"
                                >
                                @if($errors->get('date_issue'))
                                    <div class="feedback__error">
                                        {{ implode('<br/>', $errors->get('date_issue')) }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="captcha">Введите защитный код
                                        <span class="color-high">*</span>
                                    </label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Всплывающая подсказка
                                </div>
                            </div>
                            <div class="form-main__main">
                                <div class="captcha">
                                    <div class="captcha__left">
                                        <div class="captcha__image">
                                            {!! captcha_img('flat') !!}
                                        </div>
                                    </div>
                                    <div class="captcha__right">
                                        <input
                                            type="text"
                                            name="captcha"
                                            id="captcha"
                                            placeholder="@lang('feedback::index.captcha_placeholder')"
                                            class="{{ $errors->get('captcha') ? 'input-error styler' : '' }}"
                                            >
                                            @if($errors->get('captcha'))
                                                <div class="feedback__error">
                                                    {{ implode('<br/>', $errors->get('captcha')) }}
                                                </div>
                                            @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-main__right">
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="request_time">Срок</label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Всплывающая подсказка
                                </div>
                            </div>
                            <div class="form-main__main">
                                <input
                                    id="request_time"
                                    name="term"
                                    type="text"
                                    class="{{ $errors->get('term') ? 'input-error styler' : '' }}"
                                    value="{{ old('term') }}"
                                >
                            </div>
                            <div class="form-main__slider">
                                <input
                                    id="request_time_slider"
                                    type="text">
                            </div>
                            <div class="form-main__values">
                                <div class="form-main__val-left">2 мес.
                                </div>
                                <div class="form-main__val-right">65 мес.
                                </div>
                            </div>
                        </div>
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="vat_id">ИНН</label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Всплывающая подсказка
                                </div>
                            </div>
                            <div class="form-main__main">
                                <input
                                    id="vat_id"
                                    name="inn"
                                    type="text"
                                    class="{{ $errors->get('inn') ? 'input-error styler' : '' }}"
                                    value="{{ old('inn') }}"
                                >
                            </div>
                        </div>
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="passport_number">Номер паспорта
                                        <span class="color-high">*</span>
                                    </label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Всплывающая подсказка
                                </div>
                            </div>
                            <div class="form-main__main">
                                <input
                                    id="passport_number"
                                    type="text"
                                    name="passport_number"
                                    required
                                    class="{{ $errors->get('passport_number') ? 'input-error styler' : '' }}"
                                    value="{{ old('passport_number') }}"
                                >
                                @if($errors->get('passport_number'))
                                    <div class="feedback__error">
                                        {{ implode('<br/>', $errors->get('passport_number')) }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-main__item">
                            <div class="form-main__top">
                                <div class="form-main__label">
                                    <label for="passport_issuer">Кем выдан паспорт
                                        <span class="color-high">*</span>
                                    </label>
                                </div>
                                <div class="form-main__help">
                                </div>
                                <div class="form-main__tooltip">Всплывающая подсказка
                                </div>
                            </div>
                            <div class="form-main__main">
                                <input
                                    id="passport_issuer"
                                    type="text"
                                    required
                                    name="issued_by"
                                    class="{{ $errors->get('issued_by') ? 'input-error styler' : '' }}"
                                    value="{{ old('issued_by') }}"
                                >
                                @if($errors->get('issued_by'))
                                    <div class="feedback__error">
                                        {{ implode('<br/>', $errors->get('issued_by')) }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-main__item form-main__item_buttons cf">
                            <div class="form-main__left">
                                <input class="button button_reset" type="reset" value="Сбросить форму">
                            </div>
                            <div class="form-main__right">
                                <input class="button button_high button_lg" type="submit" value="Отправить заявку">
                            </div>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <div class="layout__sidebar sticky">
        @include('tree::right-menu')
    </div>
</div>
@endsection