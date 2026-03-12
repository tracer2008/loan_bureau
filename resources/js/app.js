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
    ///////////Accordion//////////////
    ///////////////////////////////////
    var acc = document.querySelectorAll(".accordion_title");

    acc.forEach(function (elem) {
        elem.addEventListener("click", function() {
            this.classList.toggle("active");

            this.parentNode.classList.toggle('active');

            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    });

});
