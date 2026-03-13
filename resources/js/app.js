require('./bootstrap');

import Support from "./support";
window.support = new Support();

import './range-slider';

document.addEventListener('DOMContentLoaded', () => {

    const anchors = document.querySelectorAll('a[href*="#"]')

    for (let anchor of anchors) {

        anchor.addEventListener('click', function (e) {
            e.preventDefault()

            let blockID = this.getAttribute('href').substring(1);

            const scrollTarget = document.getElementById(blockID);

            // const topOffset = document.querySelector('.scrollto').offsetHeight;
            const topOffset = 100; // если не нужен отступ сверху
            const elementPosition = scrollTarget.getBoundingClientRect().top;
            const offsetPosition = elementPosition - topOffset;

            window.scrollBy({
                top: offsetPosition,
                behavior: 'smooth'
            });

            document.querySelector('.mobile_menu_wrap').classList.remove('show');
        })
    }



    ////////////////////////////////////////////////
    ///////////Закрытие модальных окон//////////////
    ////////////////////////////////////////////////
    const modals_remove = document.querySelectorAll('._ocm');
    const modals = document.querySelectorAll('._modal');

    modals_remove.forEach(function (elem) {
        elem.addEventListener('click', function () {
            modals.forEach(function (el) {
                el.classList.remove('show');
            });
        });
    });


    ///////////////////////////////////
    /////РАСКРЫТИЕ В БОЛЬШОМ ФУТЕРЕ////
    ///////////////////////////////////

    if (document.querySelector('._show_other')) {
        var others = document.querySelectorAll('._show_other');

        others.forEach(function (elem) {
            elem.addEventListener("click", function() {

                let block = elem.parentNode.querySelector('.often_searched_block__other');

                if (block.style.maxHeight) {
                    block.style.maxHeight = null;
                } else {
                    block.style.maxHeight = block.scrollHeight + "px";
                }

                elem.classList.toggle('active');

                if (elem.querySelector('.often_searched_block__btn_text').innerText === 'Развернуть') {
                    elem.querySelector('.often_searched_block__btn_text').innerText = 'Свернуть';
                } else {
                    elem.querySelector('.often_searched_block__btn_text').innerText = 'Развернуть';
                }
            });
        });
    }

});
