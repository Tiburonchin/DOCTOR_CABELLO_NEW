/**
 * Ribbon Section Animations
 * @package Doctor_Cabello
 */

document.addEventListener('DOMContentLoaded', () => {
    // Solo inicializar si GSAP está disponible globalmente
    if (typeof gsap === 'undefined') return;

    const ribbonSection = document.querySelector('.ribbon-section');
    if (!ribbonSection) return;

    // Detectar preferencia de movimiento reducido
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return;

    const trackLeft = ribbonSection.querySelector('.ribbon-track--left .ribbon-track__content');
    const trackRight = ribbonSection.querySelector('.ribbon-track--right .ribbon-track__content');

    if (!trackLeft || !trackRight) return;

    // Animación de marquesina infinita hacia la izquierda
    const tweenLeft = gsap.to(trackLeft, {
        xPercent: -50,
        ease: "none",
        duration: 40,
        repeat: -1
    });

    // Animación de marquesina infinita hacia la derecha
    // Empieza desde -50% y va a 0 para que sea inverso
    gsap.set(trackRight, { xPercent: -50 });
    const tweenRight = gsap.to(trackRight, {
        xPercent: 0,
        ease: "none",
        duration: 40,
        repeat: -1
    });

    // Usar ScrollTrigger para pausar animaciones cuando no están en el viewport
    if (typeof ScrollTrigger !== 'undefined') {
        ScrollTrigger.create({
            trigger: ribbonSection,
            start: "top bottom", // Inicia cuando la parte superior del ribbon toca la parte inferior de la pantalla
            end: "bottom top",   // Termina cuando la parte inferior del ribbon toca la parte superior de la pantalla
            onEnter: () => {
                tweenLeft.play();
                tweenRight.play();
            },
            onLeave: () => {
                tweenLeft.pause();
                tweenRight.pause();
            },
            onEnterBack: () => {
                tweenLeft.play();
                tweenRight.play();
            },
            onLeaveBack: () => {
                tweenLeft.pause();
                tweenRight.pause();
            }
        });
    }

    // Efecto Hover: Pausar animación al pasar el cursor
    const ribbonContainer = ribbonSection.querySelector('.ribbon-container');
    if (ribbonContainer) {
        ribbonContainer.addEventListener('mouseenter', () => {
            tweenLeft.pause();
            tweenRight.pause();
        });
        ribbonContainer.addEventListener('mouseleave', () => {
            tweenLeft.play();
            tweenRight.play();
        });
    }
});
