document.addEventListener('DOMContentLoaded', () => {
    // Registrar ScrollTrigger de GSAP
    gsap.registerPlugin(ScrollTrigger);

    // Animación de entrada con ScrollTrigger (Section Reveal)
    const conocenosSection = document.querySelector("#conocenos");
    
    // Timeline para la revelación del contenido
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: conocenosSection,
            start: "top 80%", // Empieza a animar cuando la sección asoma
            end: "top 20%",
            toggleActions: "play none none reverse",
        }
    });

    // 1. Revelación del contenedor de imagen
    tl.fromTo(".gs-image-col", 
        { 
            y: 100, 
            opacity: 0, 
            scale: 0.9,
            rotateY: -15 
        }, 
        { 
            y: 0, 
            opacity: 1, 
            scale: 1,
            rotateY: 0,
            duration: 1.5, 
            ease: "expo.out" 
        }
    );

    // 2. Animación del badge (Pop effect)
    tl.fromTo(".gs-badge", 
        { scale: 0, opacity: 0 }, 
        { scale: 1, opacity: 1, duration: 0.8, ease: "back.out(2)" },
        "-=1"
    );

    // 3. Revelación del contenido (Staggered)
    tl.fromTo(".gs-content-col > *", 
        { y: 50, opacity: 0 }, 
        { y: 0, opacity: 1, duration: 1, stagger: 0.1, ease: "power4.out" },
        "-=1.2"
    );

    // 4. Items de características (Sutil aparición lateral)
    tl.fromTo(".gs-feature-item", 
        { x: 30, opacity: 0 }, 
        { x: 0, opacity: 1, duration: 0.8, stagger: 0.08, ease: "power2.out" },
        "-=0.8"
    );

    // Parallax suave para los elementos de fondo
    gsap.to(".gs-bg-element", {
        y: (i, target) => {
            return target.classList.contains('top-0') ? -100 : 100;
        },
        ease: "none",
        scrollTrigger: {
            trigger: conocenosSection,
            start: "top bottom",
            end: "bottom top",
            scrub: 1
        }
    });

    // Efecto de "Pin" sutil o escala al entrar (Harmony effect)
    gsap.fromTo(conocenosSection, 
        { backgroundColor: "rgba(20, 46, 107, 0.5)" }, // Color primary-900 más claro
        { 
            backgroundColor: "rgb(20, 46, 107)", 
            scrollTrigger: {
                trigger: conocenosSection,
                start: "top bottom",
                end: "top center",
                scrub: true
            }
        }
    );
});
