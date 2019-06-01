import $ from 'jquery';
import Scroll from './scroll';

class SinglePageNav {
    constructor() {
        this.$links = [];
        this.timer = null;
        this.didScroll = false;

        this.setInitialState();
        this.addEventListeners();
    }

    setInitialState() {
        this.$links = Array.prototype.filter.call(
            document.querySelectorAll('#main-menu a'),
            function(a) {
                if ('' !== a.hash) {
                    return true;
                } else {
                    return false;
                }
            }
        );

        this.checkPosition();
        this.setTimer();
    }

    addEventListeners() {
        for (let i = 0; i < this.$links.length; i++) {
            this.$links[i].addEventListener(
                'click',
                this.handleClick.bind(this)
            );
        }
    }

    handleClick(e) {
        const link = e.currentTarget;
        const $el = document.querySelector(link.hash);

        e.preventDefault();

        if (null !== $el) {
            this.clearTimer();
            this.setActiveLink(link.hash);

            Scroll.scroll(
                document.scrollingElement || document.documentElement,
                'scrollTop',
                '',
                document.documentElement.scrollTop,
                $el.offsetTop + window.innerHeight,
                250,
                true,
                function() {
                    document.querySelector(
                        '.title-block__bg'
                    ).style.backgroundImage =
                        'url(/wp-content/themes/itsdavebeach/dist/images/content/title-cards/' +
                        link.getAttribute('data-bg') +
                        ')';
                    document.querySelector(
                        '.title-block__text'
                    ).innerHTML = link.getAttribute('data-text');
                }
            );
        }
    }

    setTimer() {
        const self = this;

        window.addEventListener('scroll', function() {
            self.didScroll = true;
        });

        self.timer = setInterval(function() {
            if (self.didScroll) {
                self.didScroll = false;
                self.checkPosition();
            }
        }, 250);
    }

    clearTimer() {
        clearInterval(this.timer);

        this.didScroll = false;
    }

    checkPosition() {
        const scrollPos = window.pageYOffset;

        const currentSection = this.getCurrentSection(scrollPos);

        if (null !== currentSection) {
            this.setActiveLink(currentSection);
            this.setBGAndTitle(currentSection);
        }
    }

    getCoords($el) {
        const yPos = Math.round($el.offset().top);

        return {
            top: yPos
        };
    }

    setActiveLink(href) {
        const $activeLink = document.querySelector(
            '#main-menu a[href="' + href + '"]'
        );

        if (!$activeLink.classList.contains('is-active')) {
            for (let i = 0; i < this.$links.length; i++) {
                this.$links[i].classList.remove('is-active');
            }

            $activeLink.classList.add('is-active');
        }
    }

    setBGAndTitle(section) {
        const $link = document.querySelector(
            '.main-menu__menu-item a[href="' + section + '"]'
        );
        const sectionBG = $link.getAttribute('data-bg');
        const sectionText = $link.getAttribute('data-text');

        document.querySelector('.title-block__bg').style.backgroundImage =
            'url(/wp-content/themes/itsdavebeach/dist/images/content/title-cards/' +
            sectionBG +
            ')';
        document.querySelector('.title-block__text').innerHTML = sectionText;
    }

    getCurrentSection(scrollPos) {
        let section = null;

        for (let i = 0; i < this.$links.length; i++) {
            const hash = this.$links[i].hash;
            const exists = document.querySelector(hash);

            if (null !== exists) {
                const coords = this.getCoords($(hash));

                if (scrollPos >= coords.top - 120) {
                    section = hash;
                }
            }
        }

        const pageBottom =
            Math.max(
                document.body.scrollHeight,
                document.body.offsetHeight,
                document.documentElement.clientHeight,
                document.documentElement.scrollHeight,
                document.documentElement.offsetHeight
            ) - window.innerHeight;

        if (scrollPos == pageBottom) {
            const numOfLinks = this.$links.length;

            if (numOfLinks > 0) {
                section = this.$links[numOfLinks - 1].hash;
            }
        }

        return (
            section || (0 === this.$links.length ? null : this.$links[0].hash)
        );
    }
}

$(document).ready(new SinglePageNav());
