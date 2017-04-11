@extends('layouts.app')

@section('page_content')
<div class="layout__wrapper">
    <div class="layout__content">
        <h1 class="page-title">{{ $page->title }}</h1>
        <div class="primary">
            {!! $page->content !!}
        </div>
        <ul class="list-big">
            @foreach($items as $item)
                <li class="list-big__item">
                    <a class="list-big__mask" href="{{route('credit.show', ['id' => $item->id])}}"></a>
                    <div class="list-big__left">
                        <div class="list-big__image">
                            <a href="{{route('credit.show', ['id' => $item->id])}}">
                                <img src="{{$item->imagePath('thumb')}}" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="list-big__right">
                        <h2 class="list-big__title">
                            <a href="{{route('credit.show', ['id' => $item->id])}}">{{$item->title}}</a>
                        </h2>
                        <div class="list-big__content">{!!str_limit($item->description, 610)!!}
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="layout__sidebar sticky">
        <ul class="submenu-main submenu-main_real">
            <li class="submenu-main__item">
                <a class="submenu-main__link" href="#">Пункт субменю</a>
            </li>
            <li class="submenu-main__item submenu-main__item_arrow">
                <a class="submenu-main__link" href="#">Субменю...</a>
                <div class="submenu-main__submenu">
                    <ul class="submenu-main-2">
                        <li class="submenu-main-2__item">
                            <a class="submenu-main-2__link" href="#">Ещё один пункт чуть длиннее</a>
                        </li>
                        <li class="submenu-main-2__item">
                            <a class="submenu-main-2__link" href="#">2 субменю</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="submenu-main__item submenu-main__item_arrow">
                <a class="submenu-main__link" href="#">Пункт субменю</a>
                <div class="submenu-main__submenu">
                    <ul class="submenu-main-2">
                        <li class="submenu-main-2__item">
                            <a class="submenu-main-2__link" href="#">Ещё один пункт чуть длиннее</a>
                        </li>
                        <li class="submenu-main-2__item">
                            <a class="submenu-main-2__link" href="#">2 субменю</a>
                        </li>
                        <li class="submenu-main-2__item">
                            <a class="submenu-main-2__link" href="#">2 субменю</a>
                        </li>
                        <li class="submenu-main-2__item">
                            <a class="submenu-main-2__link" href="#">2 субменю</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="submenu-main__item">
                <a class="submenu-main__link" href="#">Ещё ссылка</a>
            </li>
            <li class="submenu-main__item">
                <a class="submenu-main__link" href="#">И ещё</a>
            </li>
            <li class="submenu-main__item">
                <a class="submenu-main__link" href="#">И ещё</a>
            </li>
            <li class="submenu-main__item">
                <a class="submenu-main__link" href="#">И ещё</a>
            </li>
        </ul>
    </div>
    </div>
<div class="page__buffer"></div>
@endsection
