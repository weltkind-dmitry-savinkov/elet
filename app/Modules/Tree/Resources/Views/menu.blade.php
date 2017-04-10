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
                                            @foreach($item->children as $children)
                                                <li class="submenu-main__item">
                                                    <a class="submenu-main__link" href=" {!! URL::route($children->slug) !!}">
                                                        {{$children->title}}
                                                    </a>
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
