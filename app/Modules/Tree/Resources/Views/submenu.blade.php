<div class="submenu-main__submenu">
    <ul class="submenu-main-2">
        @foreach($menu as $item)
            <li class="submenu-main__item {{ count($item->children) ? 'submenu-main__item_arrow' : '' }}">
                <a class="submenu-main__link" href=" {!! URL::route($item->slug) !!}">
                    {{$item->title}}
                </a>
                @if(count($item->children))
                    {!! render_submenu($item->children) !!}
                @endif
            </li>
        @endforeach
    </ul>
</div>