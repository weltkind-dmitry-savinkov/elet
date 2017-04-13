<ul class="submenu-main submenu-main_real">
    @foreach($items as $item)
    <li class="submenu-main__item {{ $item->children ? 'submenu-main__item_arrow' : '' }}">
        <a class="submenu-main__link" href="{!! URL::route($item->slug) !!}">
            {{ $item->title }}
        </a>
        @if($item->children)
            <div class="submenu-main__submenu">
                <ul class="submenu-main-2">
                    @foreach($item->children as $item)
                        <li class="submenu-main-2__item {{ count($item->children) ? 'submenu-main__item_arrow' : '' }}">
                            <a class="submenu-main-2__link" href=" {!! URL::route($item->slug) !!}">
                                {{$item->title}}
                            </a>
                            @if(count($item->children))
                                {!! render_submenu($item->children) !!}
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </li>
    @endforeach
</ul>