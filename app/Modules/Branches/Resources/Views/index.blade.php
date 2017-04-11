@extends('layouts.app')

@section('page_content')
<div class="layout__wrapper">
    <div class="layout__content">
        <h1 class="page-title">Филиалы</h1>
        <div class="affiliates">
            <div class="affiliates__top">
                <form action="#" method="post">
                    <div class="affiliates__input">
                        <div class="affiliates__label">Показать:
                        </div>
                        <div class="affiliates__select">
                            <select>
                                <option data-field="id" value="">Всё</option>
                                @foreach($items as $item)
                                    <option
                                        data-field="id"
                                        value="{{ $item->id }}"
                                        {{ request()->has('id')
                                            ? request('id') == $item->id
                                                ? 'selected'
                                                : ''
                                            : ''
                                        }}
                                    >
                                        {{ $item->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="affiliates__input">
                        <div class="affiliates__label">Область:
                        </div>
                        <div class="affiliates__select">
                            <select>
                                <option data-field="region" value="">Все регионы</option>
                                @foreach($regions as $region)
                                    <option
                                        data-field="region"
                                        value="{{ $region->id }}"
                                        {{ request()->has('region')
                                            ? request('region') == $region->id
                                                ? 'selected'
                                                : ''
                                            : ''
                                        }}
                                    >
                                        {{ $region->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="affiliates__map" id="map">
            </div>
            <div class="affiliates__list">
                <ul class="list-affiliates">
                    @foreach($items as $item)
                        <li class="list-affiliates__item">
                            <div class="list-affiliates__left">
                                <h2 class="list-affiliates__title">
                                    <a href="#">{{ $item->title }}</a>
                                </h2>
                            </div>
                            <div class="list-affiliates__center">
                                <table>
                                    <tr>
                                        <td>Адрес:</td>
                                        <td>{{ $item->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Телефоны:</td>
                                        <td>
                                            <a href="tel:+{{$item->phone}}">
                                                +{{$item->phone}}
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="list-affiliates__right">
                                <table>
                                    <tr>
                                        <td>Время работы:</td>
                                        <td>{{ $item->operating_time }}</td>
                                    </tr>
                                </table>
                                <a data-lat="{{ $item->lat }}" data-lng="{{ $item->lng }}" class="list-affiliates__link" href="#">Смотреть на карте</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
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
@endsection

@push('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAtkpXohTFtMdq1IgvRXedAqD0hEGcnSA"></script>
<script type="text/javascript" src="{{ asset('js/GoogleMap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/Branches.js') }}"></script>
@if($items)
    <script type="text/javascript">Branches.set({!!json_encode($items->toJson())!!})</script>
@endif
@endpush