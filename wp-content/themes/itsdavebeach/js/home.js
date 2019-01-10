var ItsDaveBeach = (function(name) {
    return name;
})(ItsDaveBeach || {});

ItsDaveBeach.Home = (function() {
    var setInitialState = function() {
        var scrollController = new ScrollMagic.Controller();
    };

    return {
        init: function() {
            setInitialState();
        }
    };
})();

ItsDaveBeach.Core.ready(ItsDaveBeach.Home.init());
