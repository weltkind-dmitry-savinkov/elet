@extends('layouts.inner')

@section('meta-title')
    @lang('branches::index.title')
@endsection

@section('content')
    <div class="layout__content">
        <h1 class="page-title">{{ trans('branches::index.title') }}</h1>
        <div class="affiliates">
            <div class="affiliates__top">
                <form action="#" method="post">
                    <div class="affiliates__input">
                        <div class="affiliates__label">
                            {{ trans('branches::index.show') }}
                        </div>
                        <div class="affiliates__select">
                            <select>
                                <option data-field="id" value="">
                                    {{ trans('branches::index.all') }}:
                                </option>
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
                        <div class="affiliates__label">
                            {{ trans('branches::index.region') }}:
                        </div>
                        <div class="affiliates__select">
                            <select>
                                <option data-field="region" value="">
                                    {{ trans('branches::index.region_all') }}
                                </option>
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
                                        <td>{{ trans('branches::index.address') }}:</td>
                                        <td>{{ $item->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('branches::index.phone') }}:</td>
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
                                        <td>
                                            {{ trans('branches::index.working_hours') }}:
                                        </td>
                                        <td>{{ $item->operating_time }}</td>
                                    </tr>
                                </table>
                                <a data-lat="{{ $item->lat }}" data-lng="{{ $item->lng }}" class="list-affiliates__link" href="#">
                                    {{ trans('branches::index.show_map') }}
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="layout__sidebar sticky">
        @include('tree::right-menu')
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