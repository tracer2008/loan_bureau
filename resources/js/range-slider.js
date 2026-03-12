import noUiSlider from 'nouislider';


let rangeSlider = {

    $urlParams: {},

    init() {
        this.$urlParams = new URLSearchParams(window.location.search);

        this.slider();

        if (document.querySelector('._loan_calculate')) {
            let btn = document.querySelector('._loan_calculate');
            let block = document.querySelector('._cbe');
            btn.addEventListener('click', event => {
                block.classList.add('active');
                setTimeout(() => {
                    block.classList.remove('active');
                }, 200)
            });
        }

    },

    calculatorStart() {
        let interest_rate = 0.8;
        let loan_sum = document.querySelector('._loan_amount').value;
        let loan_days = document.querySelector('._loan_term').value;

        let val_sum_wrap = document.querySelector('._val_sum');
        let val_sum_total_wrap = document.querySelector('._val_sum_total');
        let val_term_wrap = document.querySelector('._term_val');


        if (loan_sum !== '' && loan_days !== '') {

            let val_sum_plus = (loan_sum * interest_rate) / 100 * loan_days;

            val_sum_total_wrap.innerText = (parseInt(loan_sum) + parseInt(val_sum_plus)).toLocaleString();
            val_sum_wrap.innerText = parseInt(loan_sum).toLocaleString();
            val_term_wrap.innerText = parseInt(loan_days).toLocaleString();
            // val_sum_total_wrap.innerText = (parseInt(loan_sum));
        }
    },

    slider() {

        document.addEventListener("DOMContentLoaded", () => {

            let slider1 = document.querySelector('#loan_amount_slider');

            if(slider1 !== null) {

                let input_1 = document.querySelector('._loan_amount');

                if (slider1) {
                    noUiSlider.create(slider1, {
                        start: 15000,
                        connect: true,
                        step: 1000,
                        range: {
                            'min': 1000,
                            'max': 100000
                        },
                        format: {
                            from: function(value) {
                                return parseInt(value);
                            },
                            to: function(value) {
                                return parseInt(value);
                            }
                        },
                        pips: {
                            mode: 'values',
                            values: [1000, 50000, 100000],
                            density: 4
                        },
                    });

                    slider1.noUiSlider.on('update', function (values, handle) {
                        input_1.value = values[handle];
                        rangeSlider.calculatorStart();
                    });
                }

            }

            let slider3 = document.querySelector('#loan_term_slider');

            if(slider3 !== null) {

                let input_3 = document.querySelector('._loan_term');

                noUiSlider.create(slider3, {
                    start: 45,
                    connect: true,
                    step: 1,
                    range: {
                        'min': 7,
                        'max': 90
                    },
                    format: {
                        from: function(value) {
                            return parseInt(value);
                        },
                        to: function(value) {
                            return parseInt(value);
                        }
                    },
                    pips: {
                        mode: 'values',
                        values: [7, 45, 90],
                        density: 4
                    },
                });

                slider3.noUiSlider.on('update', function (values, handle) {
                    input_3.value = values[handle];
                    rangeSlider.calculatorStart();
                });

            }


        });

    }

}

rangeSlider.init();
