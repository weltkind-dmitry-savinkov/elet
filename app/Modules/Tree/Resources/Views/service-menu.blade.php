<div class="block-medium__left">
    <div class="widget-block">
        <a class="widget-block__title" href="#">Онлайн - кредит</a>
        <div class="widget-block__button">
            <div class="button button_success button_block button_md">Оформить кредит
            </div>
        </div>
        <div class="widget-block__main">
            <ul class="list-small">
                @foreach($items as $item)
                    <li class="list-small__item">
                        <a class="list-small__link" href="{{$item->slug}}">
                            {{ $item->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>