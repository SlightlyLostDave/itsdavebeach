var ItsDaveBeach = (function(name) {
    return name;
})(ItsDaveBeach || {});

ItsDaveBeach.Home = (function() {
    var setInitialState = function() {
        initTheme();
        initParallax();
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

            // Show the main content
            setTimeout(function() {
                document
                    .getElementById('content')
                    .classList.toggle('is-visible');

                setTimeout(function() {
                    // This is the stuff that was in the contanimshow() function

                    setTimeout(function() {
                        var blocks = document.querySelectorAll('.stage');

                        Array.prototype.forEach.call(blocks, function(el, i) {
                            setTimeout(function() {
                                el.classList.toggle('is-visible');
                            }, 480);
                        });
                    }, 250);
                }, 500);
            }, 500);
        };
    };

    var initParallax = function() {};

    return {
        init: function() {
            setInitialState();
        }
    };
})();

ItsDaveBeach.Core.ready(ItsDaveBeach.Home.init());
