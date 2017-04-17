@extends('layouts.inner')

@section('content')

<div class="person">
    <img class="person__image" src="{{ $entity->imagePath('full') }}" title="" alt="{{ $entity->title }}">
    <h2 class="person__description">
        {{ $entity->position }}
    </h2>
    {!! $entity->description !!}
</div>
<a class="get-back" href="{{ route('leaderships.index') }}">@lang('leadership::index.back')</a>
@endsection