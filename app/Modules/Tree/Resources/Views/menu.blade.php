@if (count($items))
<ul class="nav navbar-nav">
    @foreach ($items as $item)
    <li {!!  (Request::is($item->slug) ? 'class="active"' : '')  !!}>
        <a href="{!! URL::route($item->slug) !!}">{{$item->title}}</a>
    </li>
    @endforeach
</ul>
@endif
