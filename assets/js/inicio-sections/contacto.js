/**
 * GSAP Animations for Contact Section
 * contacto.js
 */

document.addEventListener('DOMContentLoaded', () => {
    // Verificar que GSAP y ScrollTrigger estén disponibles
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        console.warn('GSAP or ScrollTrigger not loaded for Contact Section');
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    // Crear un timeline para la sección de contacto
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: "#contacto",
            start: "top 80%", // Inicia cuando el 80% de la sección entra en vista
            toggleActions: "play none none reverse"
        }
    });

    // 1. Animación del encabezado (Badge, Título, Párrafo)
    tl.fromTo(".gs-header > *", 
        { y: 30, opacity: 0 }, 
        { 
            y: 0, 
            opacity: 1, 
            duration: 0.8, 
            stagger: 0.15, 
            ease: "power2.out" 
        }
    );

    // 2. Animación de las tarjetas principales (Efecto de apertura lateral)
    // Tarjeta de Información (Izquierda)
    tl.fromTo(".gs-info-card",
        { x: -50, opacity: 0, filter: "blur(10px)" },
        { 
            x: 0, 
            opacity: 1, 
            filter: "blur(0px)",
            duration: 0.8, 
            ease: "power3.out" 
        },
        "-=0.4"
    );

    // Tarjeta del Formulario (Derecha)
    tl.fromTo(".gs-form-card",
        { x: 50, opacity: 0, filter: "blur(10px)" },
        { 
            x: 0, 
            opacity: 1, 
            filter: "blur(0px)",
            duration: 0.8, 
            ease: "power3.out" 
        },
        "-=0.8"
    );

    // 3. Cascada de elementos internos del formulario (Stagger)
    tl.fromTo(".gs-input-group",
        { y: 20, opacity: 0 },
        { 
            y: 0, 
            opacity: 1, 
            duration: 0.6, 
            stagger: 0.1, 
            ease: "power2.out" 
        },
        "-=0.2"
    );

    // Bonus: Parallax suave para los elementos decorativos de fondo
    gsap.to("#contacto .absolute", {
        scrollTrigger: {
            trigger: "#contacto",
            start: "top bottom",
            end: "bottom top",
            scrub: 1.5
        },
        y: (i, target) => i % 2 === 0 ? -40 : 40,
        ease: "none"
    });
});
