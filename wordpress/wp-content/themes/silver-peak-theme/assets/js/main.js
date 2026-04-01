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

    if (!toggleButton || !menuPanel) {
        return;
    }

    const desktopBreakpoint = window.matchMedia('(min-width: 64rem)');

    const syncMenuState = () => {
        if (desktopBreakpoint.matches) {
            menuPanel.hidden = false;
            toggleButton.setAttribute('aria-expanded', 'true');
            return;
        }

        const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
        menuPanel.hidden = !isExpanded;
    };

    toggleButton.addEventListener('click', () => {
        const isExpanded = toggleButton.getAttribute('aria-expanded') === 'true';
        toggleButton.setAttribute('aria-expanded', String(!isExpanded));
        syncMenuState();
    });

    document.addEventListener('keydown', (event) => {
        if (event.key !== 'Escape') {
            return;
        }

        if (desktopBreakpoint.matches || toggleButton.getAttribute('aria-expanded') !== 'true') {
            return;
        }

        toggleButton.setAttribute('aria-expanded', 'false');
        syncMenuState();
        toggleButton.focus();
    });

    desktopBreakpoint.addEventListener('change', syncMenuState);
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
