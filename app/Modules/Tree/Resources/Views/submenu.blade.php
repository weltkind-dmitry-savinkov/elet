<div class="submenu-main__submenu">
    <ul class="submenu-main-2">
        @foreach($menu as $item)
            <li class="submenu-main-2__item {{ count($item->children) ? 'submenu-main__item_arrow' : '' }}">
                @if($item->entity_id)
                    <a
                        class="submenu-main-2__link"
                        href="{!! URL::route($item->module, ['id' => $item->entity_id]) !!}"
                    >
                        {{$item->title}}
                    </a>
                @else
                    <a class="submenu-main-2__link" href=" {!! URL::route($item->slug) !!}">
                        {{$item->title}}
                    </a>
                @endif
                @if(count($item->children))
                    {!! render_submenu($item->children) !!}
                @endif
            </li>
        @endforeach
    </ul>
</div>