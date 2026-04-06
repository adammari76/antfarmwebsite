document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('mainNavbar');
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const handleNavbarState = () => {
        if (!navbar) return;
        navbar.classList.toggle('nav-scrolled', window.scrollY > 30);
    };

    handleNavbarState();
    window.addEventListener('scroll', handleNavbarState, { passive: true });

    const revealItems = document.querySelectorAll('.reveal-up');
    if (revealItems.length) {
        if (prefersReducedMotion || !('IntersectionObserver' in window)) {
            revealItems.forEach((el) => el.classList.add('is-visible'));
        } else {
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.18, rootMargin: '0px 0px -40px 0px' });

            revealItems.forEach((el, index) => {
                el.style.transitionDelay = `${Math.min(index * 40, 240)}ms`;
                observer.observe(el);
            });
        }
    }

    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach((link) => {
        link.addEventListener('click', (event) => {
            const targetId = link.getAttribute('href');
            if (!targetId || targetId === '#') return;
            const target = document.querySelector(targetId);
            if (!target) return;

            event.preventDefault();
            target.scrollIntoView({ behavior: prefersReducedMotion ? 'auto' : 'smooth', block: 'start' });
        });
    });
});
