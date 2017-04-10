@extends('layouts.app')

@section('page_content')
<div class="layout">
    <div class="layout__wrapper">
<div class="layout__content">
    <h1 class="page-title">Кредитные продукты</h1>
    <div class="primary">
        <p>Компания предлагает своим клиентам индивидуальные беззалоговые и залоговые кредиты, которые позволят легко и быстро получить доступ к прогрессивным финансовым услугам, и таким образом удовлетворить текущие потребности
            осуществляемой деятельности. Компания ценит время каждого нашего клиента и в свою очередь профессиональные специалисты Компании готовы в максимально короткие сроки рассмотреть заявку каждого клиента и предложить
            наиболее удобные условия и гибкий график платежей по кредитам. </p>
        <p>За все время деятельности, Компанией были разработаны кредитные продукты, позволившие многим нашим клиентам расширить свой бизнес, улучшить качество предоставляемых услуг и увеличить обороты; сельским жителям собрать
            богатый урожай и увеличить поголовье скота; улучшить уровень благосостояния и повысить качество жизни.</p>
        <p>В настоящее время в Компании существуют следующие кредитные продукты:</p>
        <ul>
            <li>“Элет-кредиты” выдаются только для жителей сельской местности при обязательной рекомендации Сельского представителя Компании.</li>
            <li>“Доступные кредиты” для физических лиц и предпринимателей.</li>
            <li>“Обеспеченные кредиты” для физических и юридических лиц, предпринимателей.</li>
            <li>“До зарплаты” для сельских и городских жителей, имеющих постоянную работу.</li>
            <li>“Элет-Курулуш” для физических лиц и предпринимателей.</li>
        </ul>
        <br>
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
                    <div class="list-big__content">{!!$item->description!!}
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
</div>
<div class="page__buffer"></div>
@endsection
