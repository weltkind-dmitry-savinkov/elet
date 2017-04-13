
@if (count($items))
    <ul class="menu-small">
        @foreach ($items as $item)
        <li class="menu-small__item">
            <a class="menu-small__link" href="{!! URL::route($item->slug) !!}">{{$item->title}}</a>
        </li>
        @endforeach
    </ul>
@endif