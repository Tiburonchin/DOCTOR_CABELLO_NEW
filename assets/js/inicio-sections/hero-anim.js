/**
 * Hero Section Animations - Final Optimized Version
 */
(function () {
    'use strict';

    if (typeof gsap === 'undefined') return;
    
    if (typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
    }

    const initHeroAnim = () => {
        const heroSection = document.getElementById('hero-section');
        if (!heroSection) return;

        const ctx = gsap.context(() => {
            
            const tl = gsap.timeline({ 
                defaults: { ease: "power4.out" } 
            });

            // 1. Entrada de textos
            tl.fromTo(".gs-item", 
                { y: 40, opacity: 0 }, 
                { y: 0, opacity: 1, duration: 1.2, stagger: 0.15 }
            );

            // 2. Entrada del blob
            tl.fromTo(".gs-blob",
                { scale: 0.6, opacity: 0, rotation: -25 },
                { scale: 1, opacity: 1, rotation: 0, duration: 1.8, ease: "expo.out" },
                "-=1.4"
            );

            // 3. Formas decorativas (Todas: 1 a 6)
            tl.fromTo(['[class*="gs-shape-"]'],
                { scale: 0, opacity: 0, rotation: -45 },
                { 
                    scale: 1, 
                    opacity: (i, el) => {
                        if (el.classList.contains('opacity-10')) return 0.1;
                        if (el.classList.contains('opacity-20')) return 0.2;
                        if (el.classList.contains('opacity-30')) return 0.3;
                        if (el.classList.contains('opacity-40')) return 0.4;
                        if (el.classList.contains('opacity-50')) return 0.5;
                        return 1;
                    }, 
                    rotation: 0, 
                    duration: 1.2, 
                    stagger: 0.1, 
                    ease: "back.out(1.7)" 
                },
                "-=1.4"
            );

            // 4. Entrada de imágenes
            tl.fromTo(".gs-img-2",
                { x: -60, y: 50, opacity: 0, rotation: -12 },
                { x: 0, y: 0, opacity: 1, rotation: -3, duration: 1.5, ease: "power4.out" },
                "-=1"
            );

            tl.fromTo(".gs-img-1",
                { x: 60, y: -40, opacity: 0, rotation: 12 },
                { x: 0, y: 0, opacity: 1, rotation: 2, duration: 1.5, ease: "power4.out" },
                "-=1.3"
            );

            // 5. Animaciones continuas
            const continuousAnim = () => {
                gsap.to(".gs-blob", {
                    rotation: 8,
                    scale: 1.08,
                    duration: 6,
                    ease: "sine.inOut",
                    yoyo: true,
                    repeat: -1
                });

                // Flotación variada para todas las formas
                gsap.to(".gs-shape-1", { y: -20, duration: 4, ease: "sine.inOut", yoyo: true, repeat: -1 });
                gsap.to(".gs-shape-2", { y: 25, x: -15, duration: 5, ease: "sine.inOut", yoyo: true, repeat: -1, delay: 0.2 });
                gsap.to(".gs-shape-3", { y: -15, x: 10, duration: 4, ease: "sine.inOut", yoyo: true, repeat: -1, delay: 0.4 });
                gsap.to(".gs-shape-4", { y: 20, rotation: 15, duration: 6, ease: "sine.inOut", yoyo: true, repeat: -1 });
                gsap.to(".gs-shape-5", { x: 15, duration: 3, ease: "sine.inOut", yoyo: true, repeat: -1, delay: 0.1 });
                gsap.to(".gs-shape-6", { y: -25, x: 10, duration: 5, ease: "sine.inOut", yoyo: true, repeat: -1, delay: 0.3 });
            };

            gsap.delayedCall(tl.duration(), continuousAnim);

            // 6. Parallax e Hover
            const rightContainer = document.querySelector('.gs-reveal-right');
            const img1 = document.querySelector('.gs-img-1');
            const img2 = document.querySelector('.gs-img-2');

            if (rightContainer && img1 && img2) {
                rightContainer.addEventListener('mousemove', (e) => {
                    const rect = rightContainer.getBoundingClientRect();
                    const x = (e.clientX - rect.left - rect.width / 2) / (rect.width / 2);
                    const y = (e.clientY - rect.top - rect.height / 2) / (rect.height / 2);

                    gsap.to(img1, { x: x * 20, y: y * 20, duration: 1, ease: "power2.out", overwrite: 'auto' });
                    gsap.to(img2, { x: x * -15, y: y * -15, duration: 1, ease: "power2.out", overwrite: 'auto' });
                    
                    // Parallax sutil también en las formas decorativas
                    gsap.to('[class*="gs-shape-"]', {
                        x: (i) => x * (10 + i * 2),
                        y: (i) => y * (10 + i * 2),
                        duration: 1.5,
                        ease: "power2.out",
                        overwrite: 'auto'
                    });
                });

                rightContainer.addEventListener('mouseleave', () => {
                    gsap.to([img1, img2, '[class*="gs-shape-"]'], { x: 0, y: 0, duration: 1.5, ease: "power3.out", overwrite: 'auto' });
                });

                [img1, img2].forEach((img, index) => {
                    const inner = img.querySelector('div');
                    const initialRotate = index === 0 ? 2 : -3;

                    img.addEventListener('mouseenter', () => {
                        gsap.to(inner, { scale: 1.05, rotation: 0, duration: 0.6, ease: "power2.out", overwrite: true });
                        gsap.set(img, { zIndex: 40 });
                    });

                    img.addEventListener('mouseleave', () => {
                        gsap.to(inner, { scale: 1, rotation: initialRotate, duration: 0.8, ease: "power3.out", overwrite: true });
                        gsap.set(img, { zIndex: index === 0 ? 20 : 10 });
                    });
                });
            }

        }, heroSection);
    };

    if (document.readyState === 'complete') {
        initHeroAnim();
    } else {
        window.addEventListener('load', initHeroAnim);
    }

})();
