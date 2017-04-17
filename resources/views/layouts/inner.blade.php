@extends('layouts.app')
@section('page_content')
<div class="layout__wrapper">
    @include('tree::breadcrumbs')

    <h1 class="page-title">
        @yield('h1', isset($pageTitle) ? $pageTitle : @$meta->h1)
    </h1>

     @yield('content')
</div>

        <!-- END FORMS-->
@endsection