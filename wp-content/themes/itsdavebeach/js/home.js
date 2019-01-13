'use strict';
var ItsDaveBeach = (function(name) {
    return name;
})(ItsDaveBeach || {});

ItsDaveBeach.Home = (function() {
    var setInitialState = function() {
        initTheme();
    };

    var addEventListeners = function() {
        document
            .querySelector('[data-start-btn]')
            .addEventListener('click', function(e) {
                ItsDaveBeach.Scroll.scroll(
                    document.scrollingElement || document.documentElement,
                    'scrollTop',
                    '',
                    0,
                    e.currentTarget.offsetTop,
                    200,
                    true,
                    function() {
                        document.querySelector(
                            '.title-block__bg'
                        ).style.backgroundImage =
                            'url(/wp-content/themes/itsdavebeach/media/content/title-cards/' +
                            e.currentTarget.getAttribute('data-bg') +
                            ')';
                        document.querySelector(
                            '.title-block__text'
                        ).innerHTML = e.currentTarget.getAttribute('data-text');
                    }
                );
            });
    };

    var initTheme = function() {
        window.onload = function() {
            var s = skrollr.init();
            s.destroy();
            skrollr.init({
                forceHeight: !1,
                easing: 'outCubic'
            });

            // Hide the loading spinner
            document.querySelector('.loading').classList.toggle('is-hidden');
            document.getElementById('content').classList.toggle('is-visible');

            setTimeout(function() {
                var blocks = document.querySelectorAll('.stage');

                Array.prototype.forEach.call(blocks, function(el, i) {
                    setTimeout(function() {
                        el.classList.toggle('is-visible');
                    }, 480);
                });
            }, 500);
        };
    };

    return {
        init: function() {
            setInitialState();
            addEventListeners();
        }
    };
})();

ItsDaveBeach.Core.ready(ItsDaveBeach.Home.init());
