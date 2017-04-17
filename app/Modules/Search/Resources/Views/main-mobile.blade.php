<button class="btn-search__button"></button>
<div class="btn-search__drowdown">
    <form action="{{ route('search') }}" method="post">
        {{ csrf_field() }}
        <input class="search-input search-input__drop" type="text" placeholder="@lang('search::index.input_placeholder')" name="query" required minlength="3" value="{{ $query }}" maxlength="255">
        <button class="search-btn"></button>
    </form>
</div>