@extends('layouts.app')

@section('page_content')
    @include('credit::main')
    <div class="layout layout_gradient">
        <div class="layout__wrapper">
            <div class="block-medium">
                @include('tree::service-menu')
                <div class="block-medium__center">
                    @include('slider::main')
                </div>
                @include('rates::main')
        </div>
    </div>
@endsection
