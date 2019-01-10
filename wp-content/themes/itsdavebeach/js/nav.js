var ItsDaveBeach = (function(name) {
    return name;
})(ItsDaveBeach || {});

ItsDaveBeach.Nav = (function() {
    var addEventListeners = function() {
        var $hamburger = document.querySelector('.hamburger');

        $hamburger.addEventListener('click', function() {
            $hamburger.classList.toggle('is-active');
        });

    };

    return {
        init: function() {
            addEventListeners();
        }
    };
})();

ItsDaveBeach.Core.ready(ItsDaveBeach.Nav.init());
