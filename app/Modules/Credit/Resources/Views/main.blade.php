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
            @if (count($credits))
                <div class="block-info__center">
                    <div class="tabs-small">
                        <div class="tabs-small__main">
                            @foreach($credits as $credit)
                                <div class="tabs-small__block">
                                    <div class="tabs-small__title">
                                        {{ $credit->title }}
                                    </div>
                                    <div class="tabs-small__content">
                                        <div class="tabs-small__text">
                                            {!! str_limit($credit->description, 150) !!}
                                        </div>
                                        <a class="tabs-small__more" href="{{route('credit.customShow', ['id' => $credit->id])}}">
                                            {{ trans('credit::index.more') }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            <div class="tabs-small__nav-wrapper">
                                <table class="tabs-small__nav">
                                    <tr>
                                        @foreach($credits as $credit)
                                            <td class="tabs-small__tab" data-interest-rate="{{ $credit->interest_rate }}">
                                                <img
                                                    class="tabs-small__icon-passive"
                                                    src="{{ $credit->imagePath('mini') }}"
                                                    title alt="{{ $credit->title }}"
                                                />
                                            </td>
                                        @endforeach
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-info__right">
                    <div class="range-block">
                        <div class="range-block__title">
                            {{ trans('credit::index.amount') }}
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
                        <div class="range-block__title">
                            {{ trans('credit::index.term') }}
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
                                <a class="button button_main button_block button_lg" id="calculateBtn" href="#">{{ trans('credit::index.calculate') }}</a>
                            </div>
                            <div class="range-block__right">
                                <a id="giveCreditBtn" class="button button_high button_block button_lg" href="#">{{ trans('credit::index.get') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>