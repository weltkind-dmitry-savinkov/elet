<div class="block-medium__right">
    <div class="widget-block">
        <a class="widget-block__title" href="#">Курсы валют НБКР</a>
        <div class="widget-block__main">
            <div class="exchange">
                @foreach($currencies as $currency)
                    <div class="exchange__item">
                        <div class="exchange__flag">
                            <img src="uploads/flags/{{$currency->name}}.png" alt="{{$currency->name}}">
                        </div>
                        <div class="exchange__text">{{$currency->name}}
                        </div>
                        <div class="exchange__value {{ $currency->rates()->latest()->first()->course > 0? 'exchange__value_up' : 'exchange__value_down'}}">{{$currency->rates()->latest()->first()->course}}
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</div>
</div>