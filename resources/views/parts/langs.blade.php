<div class="header__lang">
    <div class="lang-block">
        @foreach(Config::get('localization.locales') as $code => $locale)
            <a
                class="lang-block__item
                {{ App::isLocale($code)
                    ? 'lang-block__item_active'
                    : ''
                }}" href="{{ url($code) }}">
                    {{ $locale['label'] }}
                </a>
        @endforeach
    </div>
</div>