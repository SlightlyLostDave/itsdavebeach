'use strict';
var ItsDaveBeach = (function(name) {
    return name;
})(ItsDaveBeach || {});

ItsDaveBeach.ContentPage = (function() {
    var setInitialState = function() {
        window.onload = function() {
            // Hide the loading spinner
            document.querySelector('.loading').classList.toggle('is-hidden');
            document.getElementById('content').classList.toggle('is-visible');

            var blocks = document.querySelectorAll('.stage');

            Array.prototype.forEach.call(blocks, function(el, i) {
                el.classList.toggle('is-visible');
            });
        };
    };

    return {
        init: function() {
            setInitialState();
        }
    };
})();

ItsDaveBeach.Core.ready(ItsDaveBeach.ContentPage.init());
