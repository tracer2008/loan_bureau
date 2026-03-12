<a href="{{$link}}" class="mfo_item"
   onclick="ym(106515742,'reachGoal','zaim'); return true;"
   target="_blank" rel="nofollow"
   title="Подробнее о {{$name}}">
    <div class="mfo_item_top row">
        <img src="{{asset('images/offers/' . $img . '.jpg')}}" alt="{{$name}}" class="mfo_item__img" width="60" height="60">
        <div class="mfo_item_top__info">
            <div class="mfo_item__title">{{$name}}</div>
        </div>
    </div>

    <div class="grid_list">
        <div class="grid_item row">
            <span class="grid_item__title">Сумма</span>
            <span class="grid_item__desc">до {{$sum}} ₽</span>
        </div>
        <div class="grid_item row">
            <span class="grid_item__title">Срок</span>
            <span class="grid_item__desc">до {{$term}} дней</span>
        </div>
    </div>

    <div class="mfo_item_buttons row">
        <span class="btn-default btn-default-full btn-desktop">Получить деньги</span>
        <span class="btn-default btn-default-full btn-mobile">Оформить</span>
    </div>

    <span class="mfo_item_personal">Лиц № {{$lic}}</span>

    <span class="mfo_item_advertising">Реклама {{$advertising}}</span>
</a>
