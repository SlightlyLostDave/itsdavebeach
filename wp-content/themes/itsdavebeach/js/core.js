var ItsDaveBeach = (function(name) {
    return name;
})(ItsDaveBeach || {});

ItsDaveBeach.Core = (function() {
    var ready = function(fn) {
        if (
            document.attachEvent
                ? document.readyState === 'complete'
                : document.readyState !== 'loading'
        ) {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    };

    return {
        ready: ready
    };
})();
