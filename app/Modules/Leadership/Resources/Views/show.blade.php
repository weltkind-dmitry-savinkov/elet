@extends('layouts.inner')

@section('content')
<h1 class="page-title">{{ $entity->title }}</h1>

<div class="person">
    <img class="person__image" src="{{ $entity->imagePath('full') }}" title="" alt="Иванов Иван Иванович">
    <h2 class="person__description">
        {{ $entity->position }}
    </h2>
    {!! $entity->description !!}
</div>
<a class="get-back" href="{{ route('leaderships.index') }}">Вернуться</a>
@endsection