<div class="submenu-main__submenu">
    <ul class="submenu-main-{{ $level }}">
        @foreach($menu as $item)
            <li class="submenu-main-{{ $level }}__item {{ count($item->children) ? 'submenu-main__item_arrow' : '' }}">
                @if($item->entity_id)
                    <a
                        class="submenu-main-{{ $level }}__link"
                        href="{!! URL::route($item->module, ['id' => $item->entity_id]) !!}"
                    >
                        {{$item->title}}
                    </a>
                @else
                    <a class="submenu-main-{{ $level }}__link" href=" {!! URL::route($item->slug) !!}">
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