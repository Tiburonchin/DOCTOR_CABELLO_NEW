/**
 * Hero Section Animations
 * Premium staggered entry, scroll parallax, text scramble.
 * WordPress-optimized: lazy video, visibility-aware scramble, cleanup.
 *
 * Dependencies: gsap, gsap-scrolltrigger (enqueued via functions.php)
 */
(function () {
    'use strict';

    /* ==========================================
       GUARD — Bail if dependencies are missing
    ========================================== */
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    const heroSection = document.getElementById('hero-section');
    if (!heroSection) return;

    /* ==========================================
       0. LAZY VIDEO — Load source only when
          the page is ready (saves bandwidth,
          keeps bots from fetching heavy MP4)
    ========================================== */
    const heroVideo = document.getElementById('hero-video');
    if (heroVideo) {
        const source = heroVideo.querySelector('source[data-src]');
        if (source) {
            source.src = source.dataset.src;
            source.removeAttribute('data-src');
            heroVideo.load();
        }
        heroVideo.playbackRate = 0.75;
    }

    /* ==========================================
       1. INITIAL STATE — Everything hidden
    ========================================== */
    gsap.set('.hero-badge',            { autoAlpha: 0, y: 30 });
    gsap.set('.hero-title',            { yPercent: 120, rotateZ: 1.5 });
    gsap.set('.hero-title-line2',      { yPercent: 120, rotateZ: 1.5 });
    gsap.set('.hero-desc',             { autoAlpha: 0, y: 20 });
    gsap.set('.hero-btn-container',    { y: 40, autoAlpha: 0 });
    gsap.set('.hero-trust',            { y: 30, autoAlpha: 0 });
    gsap.set('.hero-scroll-indicator', { autoAlpha: 0, y: 20 });
    gsap.set('.hero-accent-line',      { scaleY: 0, transformOrigin: 'top center' });

    /* ==========================================
       2. ENTRANCE TIMELINE — Cinematic stagger
    ========================================== */
    const tlHero = gsap.timeline({ defaults: { ease: 'power4.out' } });

    window.addEventListener('load', () => {
        tlHero
            .to('.hero-accent-line', {
                scaleY: 1, duration: 1.8,
                ease: 'power2.inOut', stagger: 0.2
            }, 0)
            .to('.hero-badge', {
                autoAlpha: 1, y: 0, duration: 0.8,
                ease: 'power3.out'
            }, 0.3)
            .to('.hero-title', {
                yPercent: 0, rotateZ: 0, duration: 1.4
            }, 0.5)
            .to('.hero-title-line2', {
                yPercent: 0, rotateZ: 0, duration: 1.4
            }, 0.7)
            .to('.hero-desc', {
                autoAlpha: 1, y: 0, duration: 1.0
            }, '-=0.8')
            .to('.hero-btn-container', {
                y: 0, autoAlpha: 1, duration: 1,
                ease: 'back.out(1.5)'
            }, '-=0.6')
            .to('.hero-trust', {
                y: 0, autoAlpha: 1, duration: 0.9,
                ease: 'power3.out'
            }, '-=0.5')
            .to('.hero-scroll-indicator', {
                autoAlpha: 1, y: 0, duration: 0.8,
                ease: 'power2.out'
            }, '-=0.3');
    });

    /* ==========================================
       3. SCROLL PARALLAX EXIT
    ========================================== */
    const heroContent = document.querySelector('#hero-content');
    if (heroContent) {
        const exitTl = gsap.timeline({
            scrollTrigger: {
                trigger: '#hero-section',
                start: 'top top',
                end: 'bottom top',
                scrub: true
            }
        });

        exitTl
            .to('.hero-badge',          { y: -60, autoAlpha: 0, ease: 'none' }, 0)
            .to('.hero-title',          { y: -100, autoAlpha: 0, ease: 'none' }, 0.05)
            .to('.hero-title-line2',    { y: -80, autoAlpha: 0, ease: 'none' }, 0.08)
            .to('.hero-desc',           { y: -50, autoAlpha: 0, ease: 'none' }, 0.1)
            .to('.hero-btn-container',  { y: -30, autoAlpha: 0, ease: 'none' }, 0.15)
            .to('.hero-trust',          { y: -20, autoAlpha: 0, ease: 'none' }, 0.18)
            .to('.hero-scroll-indicator', { autoAlpha: 0, ease: 'none' }, 0)
            .to('#hero-video',          { scale: 1.08, ease: 'none' }, 0);
    }

    /* ==========================================
       4. SCROLL INDICATOR BOUNCE
    ========================================== */
    gsap.to('.hero-scroll-dot', {
        y: 12, duration: 1.2,
        ease: 'sine.inOut',
        yoyo: true, repeat: -1, delay: 3
    });

    /* ==========================================
       5. TEXT SCRAMBLE — Only runs while
          hero is in viewport (perf-safe)
    ========================================== */
    class TextScrambler {
        constructor(el) {
            this.el = el;
            this.chars = '!<>-_\\/[]{}—=+*^?#________';
            this.update = this.update.bind(this);
        }
        setText(newText) {
            const oldText = this.el.innerText;
            const length = Math.max(oldText.length, newText.length);
            const promise = new Promise((resolve) => this.resolve = resolve);
            this.queue = [];
            for (let i = 0; i < length; i++) {
                const from = oldText[i] || '';
                const to = newText[i] || '';
                const start = Math.floor(Math.random() * 40);
                const end = start + Math.floor(Math.random() * 40);
                this.queue.push({ from, to, start, end });
            }
            cancelAnimationFrame(this.frameRequest);
            this.frame = 0;
            this.update();
            return promise;
        }
        update() {
            let output = '';
            let complete = 0;
            for (let i = 0, n = this.queue.length; i < n; i++) {
                let { from, to, start, end, char } = this.queue[i];
                if (this.frame >= end) {
                    complete++;
                    output += to;
                } else if (this.frame >= start) {
                    if (!char || Math.random() < 0.28) {
                        char = this.randomChar();
                        this.queue[i].char = char;
                    }
                    output += `<span class="text-secondary-400/60">${char}</span>`;
                } else {
                    output += from;
                }
            }
            this.el.innerHTML = output;
            if (complete === this.queue.length) {
                this.resolve();
            } else {
                this.frameRequest = requestAnimationFrame(this.update);
                this.frame++;
            }
        }
        randomChar() {
            return this.chars[Math.floor(Math.random() * this.chars.length)];
        }
    }

    const phrases = [
        'Tecnología de vanguardia y especialistas altamente capacitados para brindarte los mejores resultados naturales y permanentes.',
        'Diseñamos de manera artística la línea frontal de tu cabello para lograr una apariencia indetectable y 100% natural.',
        'Recupera la densidad capilar sin dolor y con una recuperación exprés gracias a nuestra técnica de micro-extracción folicular.'
    ];

    let scrambleIndex = 0;
    let scrambleInterval = null;
    let heroVisible = true;
    const scramblerElement = document.getElementById('scramble-text');

    if (scramblerElement) {
        const scrambler = new TextScrambler(scramblerElement);

        function startScramble() {
            if (scrambleInterval) return;
            scrambleInterval = setInterval(() => {
                if (!heroVisible) return;
                scrambleIndex = (scrambleIndex + 1) % phrases.length;
                scrambler.setText(phrases[scrambleIndex]);
            }, 4500);
        }

        function stopScramble() {
            if (scrambleInterval) {
                clearInterval(scrambleInterval);
                scrambleInterval = null;
            }
        }

        // Only run the scramble effect when hero is visible
        ScrollTrigger.create({
            trigger: '#hero-section',
            start: 'top bottom',
            end: 'bottom top',
            onEnter: () => { heroVisible = true; startScramble(); },
            onLeave: () => { heroVisible = false; stopScramble(); },
            onEnterBack: () => { heroVisible = true; startScramble(); },
            onLeaveBack: () => { heroVisible = false; stopScramble(); },
        });

        // Start on load
        startScramble();
    }
})();
