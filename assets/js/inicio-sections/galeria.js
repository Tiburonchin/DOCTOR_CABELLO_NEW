/**
 * Logic for galeria.js
 * Initializes Lenis smooth scroll and GSAP horizontal gallery animation.
 */

document.addEventListener("DOMContentLoaded", () => {
    // 1. Inicializar Lenis (Smooth Scroll)
    const initLenis = () => {
        if (typeof Lenis === 'undefined') return;

        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            smooth: true,
        });

        // Sincronizar Lenis con ScrollTrigger
        lenis.on('scroll', ScrollTrigger.update);

        gsap.ticker.add((time) => {
            lenis.raf(time * 1000);
        });

        gsap.ticker.lagSmoothing(0);

        // Hacer lenis accesible globalmente si es necesario
        window.lenis = lenis;
    };

    initLenis();

    // 2. Lógica de Galería Horizontal (GSAP + ScrollTrigger)
    const initGallery = () => {
        const portfolioSection = document.getElementById("portfolio");
        if (!portfolioSection) return;

        gsap.registerPlugin(ScrollTrigger);

        const horizontalSections = gsap.utils.toArray(".horiz-gallery-wrapper");

        horizontalSections.forEach((sec) => {
            const pinWrap = sec.querySelector(".horiz-gallery-strip");
            if (!pinWrap) return;

            let pinWrapWidth;
            let horizontalScrollLength;

            const refreshValues = () => {
                pinWrapWidth = pinWrap.scrollWidth;
                horizontalScrollLength = pinWrapWidth - window.innerWidth;
            };

            refreshValues();

            // Animación de Scroll Horizontal con Pinning
            gsap.to(pinWrap, {
                scrollTrigger: {
                    trigger: portfolioSection,
                    pin: true,
                    scrub: 1, // Suavizado del scroll
                    start: "center center",
                    end: () => `+=${pinWrapWidth}`,
                    invalidateOnRefresh: true,
                    // markers: true, // Descomentar para debugging
                },
                x: () => -horizontalScrollLength,
                ease: "none",
                force3D: true // Optimización GPU
            });

            // Actualizar valores cuando cambie el tamaño de la ventana
            ScrollTrigger.addEventListener("refreshInit", refreshValues);
        });

        // 3. Lógica de Interacción Flip Card con GSAP
        const flipCards = document.querySelectorAll(".flip-card");
        flipCards.forEach((card) => {
            const inner = card.querySelector(".flip-card-inner");
            let flipped = false;

            card.addEventListener("click", () => {
                flipped = !flipped;
                
                gsap.to(inner, {
                    rotationY: flipped ? 180 : 0,
                    duration: 0.8,
                    ease: "power2.inOut",
                    overwrite: true
                });
            });

            // Efecto Hover Tilt (Inclinación sutil para invitar al clic)
            card.addEventListener("mouseenter", () => {
                if (!flipped) {
                    gsap.to(inner, {
                        rotationY: 10,
                        duration: 0.4,
                        ease: "power1.out"
                    });
                }
            });

            card.addEventListener("mouseleave", () => {
                if (!flipped) {
                    gsap.to(inner, {
                        rotationY: 0,
                        duration: 0.4,
                        ease: "power1.out"
                    });
                }
            });
        });
    };

    initGallery();
});
