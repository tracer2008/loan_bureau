<div class="modal modal_menu _modal_menu _modal ">

    <div class="modal_overlay "></div>

    <div class="modal__container modal_white">

{{--        <div class="modal__close _ocm"></div>--}}

        <div class="modal__content">

            <ul class="menu row mb-0">
                <li class="menu_item"><a href="#zaimy_na_kartu" class="menu_link">Займы на карту</a></li>
                <li class="menu_item"><a href="#kak_vzat_zaim" class="menu_link">Как взять займ</a></li>
                <li class="menu_item"><a href="#calculator" class="menu_link">Калькулятор займа</a></li>
                <li class="menu_item"><a href="#kak_oplatit_zaim" class="menu_link">Как оплатить займ</a></li>
                <li class="menu_item"><a href="#usloviya_zaimov" class="menu_link">Условия займов</a></li>
                <li class="menu_item"><a href="#kak_prodlit_zaim" class="menu_link">Как продлить займ</a></li>
                @if($subdomain != null)
                    <li class="menu_item">
                        <span class="city_wrap p_relative row">
                            <img src="{{asset('images/icons/map-marker.svg')}}" alt="" class="city_map_icon">
                            <span class="city_name _city_name">Белгород</span>
                        </span>
                    </li>
                @endif
            </ul>

        </div>

    </div>

</div>
