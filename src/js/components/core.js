const core = {
    ready: function(fn) {
        if (
            document.attachEvent
                ? document.readyState === 'complete'
                : document.readyState !== 'loading'
        ) {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    }
};

export default core;
