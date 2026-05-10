<?php
/**
 * Ambient Light - Elementos decorativos de fondo
 * Círculos de luz difuminados que se mueven sutilmente.
 */
?>
/* Explanation: Move inline backgrounds into a scoped <style> to reduce collisions and keep the same visuals. */
<style>
/* Scoped ambient-light styles to avoid global contamination */
#ambient-light-container { z-index: -1; opacity: .8; }
.ambient-wash {
    background:
        radial-gradient(circle at 18% 14%, rgba(36,80,176,0.10) 0%, rgba(36,80,176,0.05) 14%, transparent 38%),
        radial-gradient(circle at 78% 28%, rgba(224,96,192,0.09) 0%, rgba(224,96,192,0.04) 12%, transparent 36%),
        radial-gradient(circle at 46% 82%, rgba(37,150,190,0.07) 0%, rgba(37,150,190,0.03) 14%, transparent 40%);
}
.ambient-blob { position: absolute; border-radius: 9999px; pointer-events: none; mix-blend-mode: screen; }
.ambient-blob { filter: saturate(1.25); }
.ambient-focus {
    left: 4%; top: 10%; height: 300px; width: 300px; filter: blur(80px);
    background: radial-gradient(circle, rgba(36,80,176,0.72) 0%, rgba(36,80,176,0.30) 26%, rgba(36,80,176,0.14) 42%, transparent 72%);
}
.ambient-trace {
    left: 60%; top: 20%; height: 250px; width: 250px; filter: blur(72px);
    background: radial-gradient(circle, rgba(0,174,239,0.48) 0%, rgba(0,174,239,0.22) 24%, rgba(0,174,239,0.10) 42%, transparent 72%);
}
.ambient-accent {
    left: 18%; top: 64%; height: 220px; width: 220px; filter: blur(68px);
    background: radial-gradient(circle, rgba(224,96,192,0.48) 0%, rgba(224,96,192,0.20) 24%, rgba(224,96,192,0.10) 42%, transparent 72%);
}
.ambient-tail {
    right: 10%; bottom: 8%; height: 200px; width: 200px; filter: blur(70px);
    background: radial-gradient(circle, rgba(124,58,237,0.34) 0%, rgba(124,58,237,0.14) 26%, transparent 72%);
}
@media(min-width:768px){
    .ambient-focus{ left:7%; top:12%; height:440px; width:440px; filter: blur(110px); }
    .ambient-trace{ left:66%; top:26%; height:360px; width:360px; filter: blur(96px); }
    .ambient-accent{ left:24%; top:68%; height:320px; width:320px; filter: blur(92px); }
    .ambient-tail{ right:12%; bottom:10%; height:300px; width:300px; filter: blur(96px); }
}
</style>

<div id="ambient-light-container" class="fixed inset-0 pointer-events-none overflow-hidden">
    <div class="ambient-wash absolute inset-0 opacity-55" aria-hidden="true"></div>
    <div class="ambient-blob ambient-focus" aria-hidden="true"></div>
    <div class="ambient-blob ambient-trace" aria-hidden="true"></div>
    <div class="ambient-blob ambient-accent" aria-hidden="true"></div>
    <div class="ambient-blob ambient-tail" aria-hidden="true"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

    gsap.registerPlugin(ScrollTrigger);

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const blobs = document.querySelectorAll('.ambient-blob');
    const container = document.getElementById('ambient-light-container');

    if (!container || !blobs.length) return;


<!-- SVG paths used for motion-path animation (hidden) -->
<svg id="ambient-paths" width="0" height="0" style="position:absolute;opacity:0;pointer-events:none;">
    <path id="path-blue" d="M -10,30 C 20,10 40,10 60,30 S 100,70 130,50" />
    <path id="path-pink" d="M 10,90 C 40,70 70,70 100,90 S 160,120 200,100" />
</svg>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const loadAndInit = () => {
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined' || typeof MotionPathPlugin === 'undefined') {
            return;
        }

        gsap.registerPlugin(ScrollTrigger, MotionPathPlugin);

        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        const blobs = document.querySelectorAll('.ambient-blob');
        const container = document.getElementById('ambient-light-container');
        if (!container || !blobs.length) return;

        gsap.set(blobs, { force3D: true, transformOrigin: '50% 50%' });

        if (prefersReducedMotion) {
            gsap.set(blobs, { opacity: 0.85 });
            return;
        }

        // Subtle continuous float for organic motion
        gsap.to('.ambient-focus', { x: '+=18', y: '+=14', duration: 8, repeat: -1, yoyo: true, ease: 'sine.inOut' });
        gsap.to('.ambient-trace', { x: '-=14', y: '+=12', duration: 10, repeat: -1, yoyo: true, ease: 'sine.inOut' });
        gsap.to('.ambient-accent', { x: '+=12', y: '-=10', duration: 11, repeat: -1, yoyo: true, ease: 'sine.inOut' });
        gsap.to('.ambient-tail', { x: '-=10', y: '-=8', duration: 12, repeat: -1, yoyo: true, ease: 'sine.inOut' });

        // Scroll-driven motion along SVG paths with curviness
        const moveRange = () => Math.max(document.documentElement.scrollHeight - window.innerHeight, 1);

        const scrollTL = gsap.timeline({
            scrollTrigger: {
                trigger: document.documentElement,
                start: 'top top',
                end: () => `+=${moveRange()}`,
                scrub: 1.2,
                invalidateOnRefresh: true
            }
        });

        // Motion along defined SVG paths, scaled to viewport
        scrollTL
            .to('.ambient-focus', {
                motionPath: {
                    path: '#path-blue',
                    align: '#path-blue',
                    autoRotate: false,
                    alignOrigin: [0.5, 0.5],
                    curviness: 1.2
                },
                ease: 'none'
            }, 0)
            .to('.ambient-trace', {
                motionPath: {
                    path: '#path-pink',
                    align: '#path-pink',
                    autoRotate: false,
                    alignOrigin: [0.5, 0.5],
                    curviness: 1.6
                },
                ease: 'none'
            }, 0)
            .to('.ambient-accent', { x: '+=6', y: '-=8', ease: 'sine.inOut' }, 0)
            .to('.ambient-tail', { x: '-=6', y: '-=6', ease: 'sine.inOut' }, 0);

        ScrollTrigger.addEventListener('refreshInit', () => {
            // ensure motion paths are refreshed
        });
    };

    // Load MotionPathPlugin if not present
    if (typeof MotionPathPlugin === 'undefined') {
        const s = document.createElement('script');
        s.src = 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js';
        s.onload = () => loadAndInit();
        document.head.appendChild(s);
        // Also ensure ScrollTrigger is registered if gsap loaded later
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);
        }
    } else {
        loadAndInit();
    }
});
</script>
            x: '8vw',
            y: '12vh',
            scale: 1.06,
            rotation: 6
        }, 0)
        .to('.ambient-trace', {
            x: '-7vw',
            y: '16vh',
            scale: 1.03,
            rotation: -8
        }, 0)
        .to('.ambient-accent', {
            x: '4vw',
            y: '-10vh',
            scale: 1.06,
            rotation: 8
        }, 0)
        .to('.ambient-tail', {
            x: '-3vw',
            y: '-8vh',
            scale: 1.03,
            rotation: -6
        }, 0);

    ScrollTrigger.refresh();
});
</script>
