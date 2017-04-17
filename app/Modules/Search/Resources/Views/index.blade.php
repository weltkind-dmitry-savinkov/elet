@extends('layouts.inner')

@section('content')

    <div class="b-search-results">
        @if (count($errors) > 0)
            @foreach ($errors as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif

        @if($total)
            <div class="b-search-results__top">
                <p class="b-search-info">
                    @lang('search::index.total_results', ['query' => $query,'total' => $total])
                </p>
            </div>
            <div class="b-search-results__list">

                @include('search::results', ['result' => $result])


            </div>
        @else
            @lang('search::index.nothing_found')
        @endif
    </div>

@endsection