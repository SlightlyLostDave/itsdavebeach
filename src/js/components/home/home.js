import $ from 'jquery';
import Scroll from './scroll';

const setInitialState = () => {
    window.onload = function() {
        const s = skrollr.init();

        s.destroy();
        skrollr.init({
            forceHeight: !1,
            easing: 'outCubic'
        });

        // Hide the loading spinner
        document.querySelector('.loading').classList.toggle('is-hidden');
        document.getElementById('content').classList.toggle('is-visible');

        setTimeout(function() {
            const blocks = document.querySelectorAll('.stage');

            Array.prototype.forEach.call(blocks, function(el, i) {
                setTimeout(function() {
                    el.classList.toggle('is-visible');
                }, 480);
            });
        }, 500);
    };
};

const addEventListeners = () => {
    document
        .querySelector('[data-start-btn]')
        .addEventListener('click', function(e) {
            const titleBG = e.currentTarget.getAttribute('data-bg');
            const titleText = e.currentTarget.getAttribute('data-text');

            Scroll.scroll(
                document.scrollingElement || document.documentElement,
                'scrollTop',
                '',
                document.documentElement.scrollTop,
                document.querySelector('#about').offsetTop + window.innerHeight,
                250,
                true,
                function() {
                    document.querySelector(
                        '.title-block__bg'
                    ).style.backgroundImage =
                        'url(/wp-content/themes/itsdavebeach/dist/images/content/title-cards/' +
                        titleBG +
                        ')';
                    document.querySelector(
                        '.title-block__text'
                    ).innerHTML = titleText;
                }
            );
        });
};

const homeInit = () => {
    setInitialState();
    addEventListeners();
};

$(document).ready(homeInit());
