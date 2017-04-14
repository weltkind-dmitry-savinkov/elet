@extends('layouts.inner')
@section('h1')
Слайдер
@endsection

@section('content')
    @if (count($entities))
<div class="b-rewards-list">
    <ul>
        @foreach($entities as $entity)

        <li class="b-rewards-list__item">
            <div class="b-reward">
                <div class="b-reward__img"><img src="/uploads/slider/full/{{$entity->image}}" alt="{{$entity->title}}"></div><a href="/uploads/slider/full/{{$entity->image}}" class="js-cbox-modal b-reward__mask"></a>
                <div class="b-reward__name">
                    <h2 class="b-reward__title">{{$entity->title}}</h2>
                </div>
            </div>
        </li>
       @endforeach
    </ul>
    <div class="clear"></div>
</div>
    @else
        <p>Нет записей</p>
@endif
@endsection