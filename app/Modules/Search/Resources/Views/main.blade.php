<div class="header__search">
    <form action="{{ route('search') }}" method="post">
        {{ csrf_field() }}
        <div class="search-input">
            <input
                class="search-input__input"
                required minlength="3"
                type="text"
                placeholder="@lang('search::index.input_placeholder')"
                value="{{ $query }}"
                maxlength="255"
                name="query"
            >
            <input class="search-input__button" type="submit">
        </div>
    </form>
</div>
