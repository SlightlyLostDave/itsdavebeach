var ItsDaveBeach = (function(name) {
    return name;
})(ItsDaveBeach || {});

ItsDaveBeach.Nav = (function() {
    return {
        init: function() {
            setInitialState();
        }
    };
})();

ItsDaveBeach.Core.ready(init());
