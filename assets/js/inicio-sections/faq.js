document.addEventListener('DOMContentLoaded', () => {
    const faqSection = document.getElementById('faq-section');
    if (!faqSection) return;

    const faqItems = faqSection.querySelectorAll('.faq-item');

    // 1. Lógica de Acordeón con GSAP
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');

        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');

            // Cerrar otros elementos abiertos para enfoque único
            faqSection.querySelectorAll('.faq-item.active').forEach(other => {
                if (other !== item) {
                    other.classList.remove('active');
                    gsap.to(other.querySelector('.faq-answer'), {
                        height: 0,
                        opacity: 0,
                        duration: 0.3,
                        ease: "power2.inOut"
                    });
                }
            });

            // Toggle del elemento actual
            if (!isActive) {
                item.classList.add('active');
                gsap.to(answer, {
                    height: "auto",
                    opacity: 1,
                    duration: 0.4,
                    ease: "power2.out"
                });
            } else {
                item.classList.remove('active');
                gsap.to(answer, {
                    height: 0,
                    opacity: 0,
                    duration: 0.3,
                    ease: "power2.inOut"
                });
            }
        });
    });

    // 2. Animaciones de Entrada (ScrollTrigger)
    
    // Animación principal de la tarjeta
    gsap.from(faqSection.querySelector('.bg-white.rounded-3xl'), {
        scrollTrigger: {
            trigger: faqSection,
            start: "top 80%"
        },
        y: 40,
        opacity: 0,
        duration: 1,
        ease: "power3.out"
    });

    // Animación en cascada (stagger) para cada pregunta
    gsap.from(faqItems, {
        scrollTrigger: {
            trigger: faqSection.querySelector('.faq-list'),
            start: "top 85%"
        },
        y: 20,
        opacity: 0,
        duration: 0.6,
        stagger: 0.1,
        ease: "power2.out"
    });
});
