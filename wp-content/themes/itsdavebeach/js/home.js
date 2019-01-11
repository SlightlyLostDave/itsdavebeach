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
            // Hide the loading spinner
            document.querySelector('.loading').classList.toggle('is-hidden');

            // Show the main content
            setTimeout(function() {
                document
                    .getElementById('content')
                    .classList.toggle('is-visible');

                setTimeout(function() {

                    // This is the stuff that was in the contanimshow() function
                    
                }, 500);
            }, 500);
        };
    };

    return {
        init: function() {
            setInitialState();
        }
    };
})();

ItsDaveBeach.Core.ready(ItsDaveBeach.Home.init());
