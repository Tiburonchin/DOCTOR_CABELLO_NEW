/**
 * Social Bar — GSAP Animations
 * Floating vertical social media bar with staggered reveal,
 * magnetic hover, and scroll-aware visibility.
 *
 * Dependencies: gsap, gsap-scrolltrigger
 */
(function () {
    'use strict';

    const bar       = document.getElementById('social-bar');
    const inner     = document.getElementById('social-bar__inner');
    if (!bar || !inner) return;

    const links     = inner.querySelectorAll('.social-bar__link');
    const lineTop   = inner.querySelector('.social-bar__line--top');
    const lineBot   = inner.querySelector('.social-bar__line--bottom');
    const divider   = inner.querySelector('.social-bar__divider');

    /* ==========================================
       1. INITIAL STATE — everything hidden
    ========================================== */
    gsap.set(bar, { autoAlpha: 0, x: 60 });
    gsap.set(links, { autoAlpha: 0, x: 30, scale: 0.6 });
    gsap.set([lineTop, lineBot], { scaleY: 0 });
    if (divider) gsap.set(divider, { scaleX: 0 });

    /* ==========================================
       2. ENTRANCE TIMELINE — After Hero scroll
    ========================================== */
    const enterTL = gsap.timeline({
        paused: true,
        defaults: { ease: 'power3.out' }
    });

    enterTL
        .to(bar, {
            autoAlpha: 1, x: 0, duration: 0.7
        })
        .to(lineTop, {
            scaleY: 1, duration: 0.5, transformOrigin: 'top center'
        }, '-=0.3')
        .to(links, {
            autoAlpha: 1, x: 0, scale: 1,
            duration: 0.5,
            stagger: { each: 0.09, from: 'start' }
        }, '-=0.3')
        .to(divider, {
            scaleX: 1, duration: 0.4
        }, '-=0.2')
        .to(lineBot, {
            scaleY: 1, duration: 0.5, transformOrigin: 'bottom center'
        }, '-=0.3');

    /* ==========================================
       3. SCROLL TRIGGER — reveal logic
    ========================================== */
    const heroSection = document.getElementById('hero-section');
    const isHomePage  = document.body.classList.contains('home');

    // Solo esperamos al scroll del Hero si estamos en la Home.
    // En páginas internas (como analisis.php), la barra aparece tras un breve delay.
    if (heroSection && isHomePage) {
        ScrollTrigger.create({
            trigger: heroSection,
            start: 'bottom 70%',
            onEnter: () => enterTL.play(),
            onLeaveBack: () => enterTL.reverse(),
        });
    } else {
        // Fallback para páginas internas o sin hero: aparición directa
        gsap.delayedCall(0.8, () => enterTL.play());
    }

    /* ==========================================
       4. HIDE ON FOOTER — avoid overlap
    ========================================== */
    const footer = document.getElementById('site-footer');
    if (footer) {
        ScrollTrigger.create({
            trigger: footer,
            start: 'top 85%',
            end: 'bottom bottom',
            onEnter: () => gsap.to(bar, { autoAlpha: 0, x: 40, duration: 0.4, ease: 'power2.in' }),
            onLeaveBack: () => gsap.to(bar, { autoAlpha: 1, x: 0, duration: 0.5, ease: 'power2.out' }),
        });
    }

    /* ==========================================
       5. MAGNETIC HOVER EFFECT
    ========================================== */
    links.forEach(link => {
        const icon = link.querySelector('.social-bar__icon');

        link.addEventListener('mouseenter', () => {
            gsap.to(icon, {
                scale: 1.25,
                duration: 0.35,
                ease: 'back.out(2.5)'
            });
            gsap.to(link, {
                x: -5,
                duration: 0.3,
                ease: 'power2.out'
            });
        });

        link.addEventListener('mouseleave', () => {
            gsap.to(icon, {
                scale: 1,
                duration: 0.4,
                ease: 'elastic.out(1, 0.5)'
            });
            gsap.to(link, {
                x: 0,
                duration: 0.4,
                ease: 'power2.out'
            });
        });
    });

    /* ==========================================
       6. SUBTLE IDLE PULSE (breathing effect)
    ========================================== */
    gsap.to(inner, {
        y: -4,
        duration: 2.5,
        ease: 'sine.inOut',
        yoyo: true,
        repeat: -1,
        delay: 2
    });

})();
