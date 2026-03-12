<a href="{{$link}}" class="mfo_item mfo_item-card"
   onclick="ym(106515742,'reachGoal','zaim'); return true;"
   target="_blank" rel="nofollow"
   title="Подробнее о {{$name}}">
    <div class="mfo_item_top row">
        <img src="{{asset('images/offers/' . $img . '.jpg')}}" alt="{{$name}}" class="mfo_item__img" width="100" height="63">
        <div class="mfo_item_top__info">
            <div class="mfo_item__title">{{$name}}</div>
        </div>
    </div>

    <div class="grid_list">
        <div class="grid_item row">
            <span class="grid_item__title">Льготный период</span>
            <span class="grid_item__desc">до {{$period}} дней</span>
        </div>
        <div class="grid_item row">
            <span class="grid_item__title">Лимит</span>
            <span class="grid_item__desc">до {{$limit}} ₽</span>
        </div>
        <div class="grid_item row">
            <span class="grid_item__title">Обслуживание</span>
            <span class="grid_item__desc">{{$obsluzhivanie}}</span>
        </div>
    </div>

    <div class="mfo_item_buttons row">
        <span class="btn-default btn-default-full">Заказать карту </span>

        <div class="mfo_item_buttons__info">
            <span class="mfo_item_personal">Лиц № {{$lic}}</span>

            <span class="mfo_item_advertising">Реклама {{$advertising}}</span>
        </div>
    </div>
</a>
