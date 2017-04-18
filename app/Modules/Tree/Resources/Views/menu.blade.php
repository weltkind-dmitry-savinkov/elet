@if (count($items))
<div class="header__menu">
    <div class="menu-main">
        <table>
            <tbody>
                <tr>
                    @foreach($items as $item)
                        <td class="menu-main__item menu-main__item_arrow">
                            <a class="menu-main__link" href="{!! URL::route($item->slug) !!}">
                                {{ $item->title }}
                            </a>
                            @if($item->children)
                                <div class="menu-main__submenu">
                                    <ul class="submenu-main">
                                        @foreach($item->children as $item)
                                            <li class="submenu-main__item {{ count($item->children) ? 'submenu-main__item_arrow' : '' }}">
                                                @if($item->entity_id)
                                                    <a
                                                        class="submenu-main__link"
                                                        href="{!! URL::route($item->module, ['id' => $item->entity_id]) !!}"
                                                    >
                                                        {{$item->title}}
                                                    </a>
                                                @else
                                                    <a class="submenu-main__link" href=" {!! URL::route($item->slug) !!}">
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
                            @endif
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endif
