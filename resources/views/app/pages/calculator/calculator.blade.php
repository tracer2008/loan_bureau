<div class="container mb-80">
    <div class="calculator_wrap row">
        <div class="calculator_left">
            <h2 id="calculator">Калькулятор займа</h2>

            <div class="calculator_body">
                @include('app.pages.calculator._calculator')
            </div>
        </div>

        <div class="calculator_right">
            @include('app.pages.zaimy_na_kartu._card_item', [
                    'img' => 'card',
                    'link' => 'https://bankprofi.ru/r/2-1M5z9UpYqmum9JAs4woAyr',
                    'name' => 'Виртуальная кредитная карта Займер',
                    'period' => '180',
                    'limit' => '100 000',
                    'obsluzhivanie' => 'Бесплатно',
                    'lic' => '651303532004088',
                    'advertising' => 'ПАО МФК "ЗАЙМЕР"',
                ])

            <div class="mfo_list row">
                @include('app.pages.zaimy_na_kartu._zaim_item', [
                    'img' => '9',
                    'link' => 'https://bankprofi.ru/r/1-QGS8osVDU5DBRoB5F2aDAz',
                    'name' => 'Вебзайм',
                    'sum' => '30 000',
                    'term' => '30',
                    'lic' => '1903550009325',
                    'advertising' => 'ООО МКК "АКАДЕМИЧЕСКАЯ"',
                ])
                @include('app.pages.zaimy_na_kartu._zaim_item', [
                    'img' => '10',
                    'link' => 'https://bankprofi.ru/r/1-4uwXceHVLckGGPmDxd6NWa',
                    'name' => 'Каранга',
                    'sum' => '1 000 000',
                    'term' => '2190',
                    'lic' => '2104150009681',
                    'advertising' => 'ООО МФК "ОНЛАЙНЕР"',
                ])
            </div>
        </div>
    </div>
</div>
