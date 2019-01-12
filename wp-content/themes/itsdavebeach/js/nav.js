'use strict';
var ItsDaveBeach = (function(name) {
    return name;
})(ItsDaveBeach || {});

ItsDaveBeach.Nav = (function() {
    var addEventListeners = function() {
        var $hamburger = document.querySelector('.hamburger'),
            $mainMenu = document.querySelector('.main-menu');

        $hamburger.addEventListener('click', function() {
            $hamburger.classList.toggle('is-active');
            $mainMenu.classList.toggle('is-active');
        });
    };

    return {
        init: function() {
            addEventListeners();
        }
    };
})();

ItsDaveBeach.Core.ready(ItsDaveBeach.Nav.init());
