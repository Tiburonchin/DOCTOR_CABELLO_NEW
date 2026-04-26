/**
 * Sincronizacion de Animaciones - Seccion de Presentacion (Tratamientos)
 * @package Doctor_Cabello
 */

document.addEventListener("DOMContentLoaded", () => {
    // Solo inicializar si GSAP y ScrollTrigger estan disponibles globalmente
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        initPresentationSection();
    }
});

/**
 * Inicializa el timeline sincronizado para la seccion de presentacion
 */
function initPresentationSection() {
    const section = document.querySelector("#presentation-section");
    if (!section) return;

    // Timeline principal sincronizado con el scroll para Entrada y Salida
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: section,
            start: "top 80%",   // Entrada: Inicia cuando el 80% de la sección es visible
            end: "bottom 20%",  // Salida: Termina cuando la sección sale por la parte superior
            // Orden de acciones: Entrar (hacia abajo) | Salir (hacia abajo) | Entrar (hacia arriba) | Salir (hacia arriba)
            toggleActions: "play reverse play reverse" 
        }
    });

    // BLOQUE 1: Elementos de la Izquierda (Badge, Títulos, Párrafo, Botón y Testimonio)
    tl.fromTo(section.querySelectorAll(".pres-element"), 
        { y: 80, opacity: 0, rotateX: -15, filter: "blur(8px)" }, 
        { y: 0, opacity: 1, rotateX: 0, filter: "blur(0px)", duration: 1.2, stagger: 0.12, ease: "power4.out" }
    )
    
    // BLOQUE 2: Imagen Principal (Derecha) - Viene desde profundidad
    .fromTo(section.querySelector(".pres-image-wrapper"), 
        { z: -100, x: 30, opacity: 0, filter: "blur(10px)", scale: 0.9 },
        { z: 0, x: 0, opacity: 1, filter: "blur(0px)", scale: 1, duration: 1.5, ease: "expo.out" }, 
        "-=1" // Solapamiento agresivo para fluidez
    )
    
    // BLOQUE 3: Card flotante (Alta Precisión)
    .fromTo(section.querySelector(".pres-float-badge"), 
        { scale: 0.5, opacity: 0, rotateY: 45 },
        { scale: 1, opacity: 1, rotateY: 0, duration: 0.8, ease: "back.out(1.7)" }, 
        "-=0.6"
    );

    // 4. Parallax suave en la decoracion de fondo (Capa extra de dinamismo)
    const bgDecor = section.querySelector('.bg-gradient-to-l');
    if (bgDecor) {
        gsap.to(bgDecor, {
            scrollTrigger: {
                trigger: section,
                start: "top bottom",
                end: "bottom top",
                scrub: 1
            },
            yPercent: 30,
            xPercent: 10,
            ease: "none"
        });
    }

    // Animacion decorativa extra (Loop infinito para el elemento flotante)
    // Se ejecuta independiente del scroll para dar sensacion de "vida"
    const floatingCard = section.querySelector(".pres-float-badge");
    if (floatingCard) {
        gsap.to(floatingCard, {
            y: -10,
            duration: 2,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut",
            delay: 1 // Inicia despues de la entrada principal
        });
    }
}
