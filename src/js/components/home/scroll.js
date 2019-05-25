const Scroll = {
    scroll(el, style, unit, from, to, time, prop, beforeScroll) {
        if (!el) {
            return;
        }

        beforeScroll();

        var start = new Date().getTime(),
            timer = setInterval(function() {
                var step = Math.min(1, (new Date().getTime() - start) / time);

                if (prop) {
                    el[style] = from + step * (to - from) + unit;
                } else {
                    el.style[style] = from + step * (to - from) + unit;
                }

                if (step === 1) {
                    clearInterval(timer);
                }
            }, 10);

        if (prop) {
            el[style] = from + unit;
        } else {
            el.style[style] = from + unit;
        }
    }
};

export default Scroll;
