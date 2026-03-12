<header id="header" class="header">
    <div class="container">

        <div class="header_body row justify_align">
            <div class="header_left row">
                <a href="{{route('index')}}" class="logo__link">
                    <img src="{{asset('images/logo.svg')}}" alt="" class="logo">
                </a>

                <div class="menu_wrap">
                    <ul class="menu row mb-0">
                        <li class="menu_item"><a href="#zaimy_na_kartu" class="menu_link">Займы на карту</a></li>
                        <li class="menu_item"><a href="#kak_vzat_zaim" class="menu_link">Как взять займ</a></li>
                        <li class="menu_item"><a href="#calculator" class="menu_link">Калькулятор займа</a></li>
                        <li class="menu_item"><a href="#kak_oplatit_zaim" class="menu_link">Как оплатить займ</a></li>
                        <li class="menu_item"><a href="#usloviya_zaimov" class="menu_link">Условия займов</a></li>
                        <li class="menu_item"><a href="#kak_prodlit_zaim" class="menu_link">Как продлить займ</a></li>
                    </ul>
                </div>
            </div>

            <div class="header_right row">
                <span class="city_wrap p_relative row">
                    <img src="{{asset('images/icons/map-marker.svg')}}" alt="" class="city_map_icon">
                    <span class="city_name _city_name">Белгород</span>
                </span>
            </div>

            <div class="mobile_icons">
                <span class="mobile_icon mobile_icon-burger row" onclick="support.openMenu(this)">
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>
                </span>
            </div>

{{--            <div class="mobile_menu_wrap ">--}}
{{--                <ul class="menu row mb-0">--}}
{{--                    <li class="menu_item"><a href="#services" class="menu_link">Займы на карту</a></li>--}}
{{--                    <li class="menu_item"><a href="#services" class="menu_link">Как взять займ</a></li>--}}
{{--                    <li class="menu_item"><a href="#services" class="menu_link">Калькулятор займа</a></li>--}}
{{--                    <li class="menu_item"><a href="#services" class="menu_link">Как оплатить займ</a></li>--}}
{{--                    <li class="menu_item"><a href="#services" class="menu_link">Условия займов</a></li>--}}
{{--                    <li class="menu_item"><a href="#services" class="menu_link">Как продлить займ</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}

        </div>

    </div>
</header>
