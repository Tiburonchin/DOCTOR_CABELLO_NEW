/**
 * Lógica para la sección de Análisis de Candidato
 * Incluye animaciones de entrada y efecto 3D (tilt) en las tarjetas
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Inicialización de iconos
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // 2. Registro de plugins y animaciones GSAP
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        const section = document.getElementById('analisis-paciente');
        if (!section) return;

        // Animación de cabecera
        gsap.from(section.querySelectorAll('.anim-header'), {
            y: 30,
            opacity: 0,
            duration: 0.8,
            stagger: 0.2,
            ease: "power2.out",
            scrollTrigger: {
                trigger: section,
                start: "top 80%"
            }
        });

        // Animación de tarjetas (Grid)
        gsap.from(section.querySelectorAll('.anim-card'), {
            y: 50,
            opacity: 0,
            duration: 1,
            stagger: 0.1,
            ease: "power3.out",
            scrollTrigger: {
                trigger: section.querySelector('.grid'),
                start: "top 75%"
            }
        });

        // 3. Efecto 3D Mouse (Tilt)
        const cards = section.querySelectorAll('.tilt-card');

        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                // Calculamos la rotación (máximo 10 grados)
                const rotateX = ((y - centerY) / centerY) * -10;
                const rotateY = ((x - centerX) / centerX) * 10;

                gsap.to(card, {
                    rotateX: rotateX,
                    rotateY: rotateY,
                    duration: 0.5,
                    ease: "power2.out",
                    overwrite: "auto"
                });
            });

            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    rotateX: 0,
                    rotateY: 0,
                    duration: 0.8,
                    ease: "elastic.out(1, 0.3)"
                });
            });
        });
    }
});
