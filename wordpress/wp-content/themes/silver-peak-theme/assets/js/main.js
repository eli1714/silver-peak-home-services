'use strict';

document.documentElement.classList.add('js-ready');

document.addEventListener('DOMContentLoaded', () => {
    initMobileNav();
    initFaqAccordions();
    initHeaderState();
});

function initMobileNav() {
    const toggleButton = document.querySelector('.nav-toggle');
    const menuPanel = document.querySelector('#primary-menu-panel');
    const backdrop = document.querySelector('.nav-backdrop');

    if (!toggleButton || !menuPanel) {
        return;
    }

    const desktopBreakpoint = window.matchMedia('(min-width: 1024px)');
    const menuLinks = menuPanel.querySelectorAll('a');

    const setExpanded = (expanded) => {
        toggleButton.setAttribute('aria-expanded', String(expanded));

        if (desktopBreakpoint.matches) {
            menuPanel.hidden = false;

            if (backdrop) {
                backdrop.hidden = true;
            }

            return;
        }

        menuPanel.hidden = !expanded;

        if (backdrop) {
            backdrop.hidden = !expanded;
        }
    };

    const closeMenu = ({ focusToggle = true } = {}) => {
        if (desktopBreakpoint.matches) {
            return;
        }

        setExpanded(false);

        if (focusToggle) {
            toggleButton.focus();
        }
    };

    const syncMenuState = () => {
        if (desktopBreakpoint.matches) {
            setExpanded(true);
            return;
        }

        const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
        setExpanded(isExpanded);
    };

    toggleButton.addEventListener('click', () => {
        const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
        setExpanded(!isExpanded);
    });

    if (backdrop) {
        backdrop.addEventListener('click', () => {
            closeMenu();
        });
    }

    menuLinks.forEach((link) => {
        link.addEventListener('click', () => {
            if (!desktopBreakpoint.matches) {
                closeMenu({ focusToggle: false });
            }
        });
    });

    document.addEventListener('keydown', (event) => {
        if (event.key !== 'Escape') {
            return;
        }

        if (desktopBreakpoint.matches || toggleButton.getAttribute('aria-expanded') !== 'true') {
            return;
        }

        closeMenu();
    });

    document.addEventListener('click', (event) => {
        if (desktopBreakpoint.matches || toggleButton.getAttribute('aria-expanded') !== 'true') {
            return;
        }

        if (menuPanel.contains(event.target) || toggleButton.contains(event.target)) {
            return;
        }

        closeMenu({ focusToggle: false });
    });

    desktopBreakpoint.addEventListener('change', syncMenuState);
    setExpanded(false);
    syncMenuState();
}

function initFaqAccordions() {
    const faqItems = document.querySelectorAll('.faq-item');

    if (!faqItems.length) {
        return;
    }

    faqItems.forEach((item) => {
        item.addEventListener('toggle', () => {
            if (!item.open) {
                return;
            }

            faqItems.forEach((otherItem) => {
                if (otherItem !== item) {
                    otherItem.open = false;
                }
            });
        });
    });
}

function initHeaderState() {
    const header = document.querySelector('.site-header');

    if (!header) {
        return;
    }

    const updateHeaderState = () => {
        header.classList.toggle('site-header--scrolled', window.scrollY > 12);
    };

    updateHeaderState();
    window.addEventListener('scroll', updateHeaderState, { passive: true });
}
