<div class="bg_white py-55_55">
    <div class="often_searched container">
        <h2>Займы России</h2>

            <div class="often_searched_block">

                <div class="often_searched_list row">
                    @foreach($cities as $city)

                        @if($loop->iteration < 13)
                            <span class="often_searched_list__item">
                                <a href="{{route('subdomain.index', ['subdomain' => $city->slug])}}" class="often_searched_list__item_link">{{ $city->cityName }}</a>
                            </span>
                        @endif

                    @endforeach
                </div>

                @if(count($cities) > 12)

                    <div class="often_searched_block__other">
                        <div class="often_searched_list row">
                            @foreach($cities as $city)

                                @if($loop->iteration > 20)
                                    <span class="often_searched_list__item">
                                        <a href="{{route('subdomain.index', ['subdomain' => $city->slug])}}" class="often_searched_list__item_link">{{ $city->cityName }}</a>
                                    </span>
                                @endif

                            @endforeach
                        </div>
                    </div>

                    <span class="often_searched_block__btn _show_other">
                        <span class="often_searched_block__btn_text">Развернуть</span>

                        <span class="often_searched_block__btn_icon">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.53329 5.53366C3.66663 5.40033 3.79996 5.33366 3.99996 5.33366C4.19996 5.33366 4.33329 5.40033 4.46663 5.53366L7.99996 9.06699L11.5333 5.53366C11.8 5.26699 12.2 5.26699 12.4666 5.53366C12.7333 5.80033 12.7333 6.20033 12.4666 6.46699L8.46663 10.467C8.19996 10.7337 7.79996 10.7337 7.53329 10.467L3.53329 6.46699C3.26663 6.20033 3.26663 5.80033 3.53329 5.53366Z" fill="#808080"/>
                            </svg>
                        </span>
                    </span>

                @endif

            </div>

    </div>
</div>
