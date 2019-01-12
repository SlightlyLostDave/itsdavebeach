'use strict';
var ItsDaveBeach = (function(name) {
    return name;
})(ItsDaveBeach || {});

ItsDaveBeach.SinglePageNav = (function() {
    var $links,
        timer,
        didScroll = false;

    var setInitialState = function() {
        $links = Array.prototype.filter.call(
            document.querySelectorAll('#main-menu a'),
            function(a) {
                if ('' !== a.hash) {
                    return true;
                } else {
                    return false;
                }
            }
        );

        checkPosition();
        setTimer();
    };

    var addEventListeners = function() {
        for (var i = 0; i < $links.length; i++) {
            $links[i].addEventListener('click', handleClick);
        }
    };

    var handleClick = function(e) {
        var link = e.currentTarget,
            $el = document.querySelector(link.hash);

        e.preventDefault();

        if (null !== $el) {
            clearTimer();
            setActiveLink(link.hash);
            scroll($el, function() {
                document.querySelector(
                    '.title-block__bg'
                ).style.backgroundImage =
                    'url(/wp-content/themes/itsdavebeach/content/title-cards/' +
                    link.getAttribute('data-bg') +
                    '.jpg)';
                document.querySelector(
                    '.title-block__text'
                ).innerHTML = link.getAttribute('data-text');
            });
        }
    };

    var scroll = function(el, callback) {
        var scrollOffset = el.offsetTop,
            interval = setInterval(function() {
                if (scrollOffset - document.documentElement.scrollTop > 0) {
                    document.documentElement.scrollTop += 10;
                } else if (
                    scrollOffset - document.documentElement.scrollTop <=
                    0
                ) {
                    document.documentElement.scrollTop -= 10;
                } else {
                    clearInterval(interval);
                    callback();
                }
            }, 10);
    };

    var setTimer = function() {
        window.addEventListener('scroll', function() {
            didScroll = true;
        });

        timer = setInterval(function() {
            if (didScroll) {
                didScroll = false;
                checkPosition();
            }
        }, 250);
    };

    var clearTimer = function() {
        clearInterval(timer);

        didScroll = false;
    };

    var checkPosition = function() {
        var scrollPos = window.pageYOffset;

        var currentSection = getCurrentSection(scrollPos);

        if (null !== currentSection) {
            setActiveLink(currentSection);
        }
    };

    var getCoords = function($el) {
        var yPos = $el.getBoundingClientRect();

        return {
            top: Math.round(yPos.top + document.body.scrollTop) - 70
        };
    };

    var setActiveLink = function(href) {
        var $activeLink = document.querySelector(
            '#main-menu a[href="' + href + '"]'
        );

        if (!$activeLink.classList.contains('is-active')) {
            for (var i = 0; i < $links.length; i++) {
                $links[i].classList.remove('is-active');
            }

            $activeLink.classList.add('is-active');
        }
    };

    var getCurrentSection = function(scrollPos) {
        var hash, coords, section;

        for (var i = 0; i < $links.length; i++) {
            hash = $links[i].hash;

            var exists = document.querySelector(hash);
            if (null !== exists) {
                coords = getCoords(exists);

                if (scrollPos >= coords.top - 120) {
                    section = hash;
                }
            }
        }

        var pageBottom =
            Math.max(
                document.body.scrollHeight,
                document.body.offsetHeight,
                document.documentElement.clientHeight,
                document.documentElement.scrollHeight,
                document.documentElement.offsetHeight
            ) - window.innerHeight;
        if (scrollPos == pageBottom) {
            var numOfLinks = $links.length;

            if (numOfLinks > 0) {
                section = $links[numOfLinks - 1].hash;
            }
        }

        return section || (0 === $links.length ? null : $links[0].hash);
    };

    return {
        init: function() {
            setInitialState();
            addEventListeners();
        }
    };
})();

ItsDaveBeach.Core.ready(ItsDaveBeach.SinglePageNav.init());
