import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    // --- Scroll to section ---
    function scrollToSection(sectionId) {
        const el = document.getElementById(sectionId);
        if (el) el.scrollIntoView({ behavior: 'smooth' });
    }

    document.querySelectorAll('[data-scroll]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            const id = this.getAttribute('data-scroll');
            if (id) scrollToSection(id);
        });
    });

    // --- Active section (IntersectionObserver) ---
    const sectionIds = ['home', 'about', 'services', 'industries', 'contact'];
    const navLinks = document.querySelectorAll('.nav-link');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');

    function setActiveSection(activeId) {
        navLinks.forEach(function (link) {
            const id = link.getAttribute('data-scroll');
            link.classList.toggle('text-red-600', id === activeId);
            link.classList.toggle('text-gray-700', id !== activeId);
        });
        mobileLinks.forEach(function (link) {
            const id = link.getAttribute('data-scroll');
            link.classList.toggle('bg-red-50', id === activeId);
            link.classList.toggle('text-red-600', id === activeId);
            link.classList.toggle('text-gray-700', id !== activeId);
            link.classList.toggle('hover:bg-gray-50', id !== activeId);
        });
    }

    const observer = new IntersectionObserver(
        function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) setActiveSection(entry.target.id);
            });
        },
        { root: null, rootMargin: '-50% 0px -50% 0px', threshold: 0 }
    );
    sectionIds.forEach(function (id) {
        const el = document.getElementById(id);
        if (el) observer.observe(el);
    });

    // --- Mobile menu ---
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIconOpen = document.getElementById('menu-icon-open');
    const menuIconClose = document.getElementById('menu-icon-close');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function () {
            const isOpen = !mobileMenu.classList.contains('hidden');
            mobileMenu.classList.toggle('hidden', isOpen);
            if (menuIconOpen) menuIconOpen.classList.toggle('hidden', !isOpen);
            if (menuIconClose) menuIconClose.classList.toggle('hidden', isOpen);
            document.body.style.overflow = isOpen ? '' : 'hidden';
        });
    }
    document.querySelectorAll('.mobile-nav-link').forEach(function (link) {
        link.addEventListener('click', function () {
            mobileMenu.classList.add('hidden');
            if (menuIconOpen) menuIconOpen.classList.remove('hidden');
            if (menuIconClose) menuIconClose.classList.add('hidden');
            document.body.style.overflow = '';
        });
    });

    // --- Hero counter animation ---
    const statEls = document.querySelectorAll('.hero-stat');
    if (statEls.length) {
        const duration = 2000;
        const steps = 60;
        const interval = duration / steps;
        let step = 0;
        const targets = {};
        statEls.forEach(function (el) {
            targets[el] = parseInt(el.getAttribute('data-target'), 10) || 0;
        });
        const timer = setInterval(function () {
            step++;
            const progress = Math.min(step / steps, 1);
            statEls.forEach(function (el) {
                const target = targets[el];
                const suffix = target === 100 ? '%' : '+';
                el.textContent = Math.floor(target * progress) + suffix;
            });
            if (step >= steps) {
                statEls.forEach(function (el) {
                    const target = targets[el];
                    el.textContent = target + (target === 100 ? '%' : '+');
                });
                clearInterval(timer);
            }
        }, interval);
    }

    // --- Hero background parallax ---
    const heroBg = document.querySelector('.hero-bg-image');
    if (heroBg) {
        window.addEventListener('scroll', function () {
            const y = window.scrollY * 0.5;
            heroBg.style.transform = 'translateY(' + y + 'px)';
        }, { passive: true });
    }

    // --- Contact form ---
    const contactForm = document.getElementById('contact-form');
    const contactSuccess = document.getElementById('contact-success');
    if (contactForm && contactSuccess) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();
            contactSuccess.classList.remove('hidden');
            contactForm.reset();
            setTimeout(function () {
                contactSuccess.classList.add('hidden');
            }, 5000);
        });
    }

    // --- Modals ---
    function openModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.remove('hidden');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            document.addEventListener('keydown', handleModalEscape);
        }
    }
    function closeModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.add('hidden');
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            document.removeEventListener('keydown', handleModalEscape);
        }
    }
    function handleModalEscape(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('[id^="modal-"]').forEach(function (m) {
                if (!m.classList.contains('hidden')) closeModal(m.id);
            });
        }
    }
    document.getElementById('privacy-btn')?.addEventListener('click', function () { openModal('modal-privacy'); });
    document.getElementById('terms-btn')?.addEventListener('click', function () { openModal('modal-terms'); });
    document.querySelectorAll('.modal-backdrop, .modal-close').forEach(function (el) {
        el.addEventListener('click', function () {
            const id = this.getAttribute('data-close');
            if (id) closeModal(id);
        });
    });

    // --- Scroll to top ---
    const scrollTopBtn = document.getElementById('scroll-top');
    if (scrollTopBtn) {
        function updateScrollTopVisibility() {
            const show = window.scrollY >= 300;
            scrollTopBtn.style.visibility = show ? 'visible' : 'hidden';
            scrollTopBtn.style.opacity = show ? '1' : '0';
            scrollTopBtn.style.pointerEvents = show ? 'auto' : 'none';
        }
        updateScrollTopVisibility();
        window.addEventListener('scroll', updateScrollTopVisibility, { passive: true });
        scrollTopBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
});
