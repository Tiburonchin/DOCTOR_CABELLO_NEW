document.addEventListener('DOMContentLoaded', () => {
    const testimonialSection = document.getElementById('testimonios-section');
    if (!testimonialSection) return;

    const items = testimonialSection.querySelectorAll('.testimonial-item');
    const dotsContainer = testimonialSection.querySelector('#dots-container');
    const progressBar = testimonialSection.querySelector('#progressBar');
    
    if (!items.length || !dotsContainer || !progressBar) return;

    let currentIndex = 0;
    let isAnimating = false;
    const displayTime = 4000; // 4 segundos
    let progressTween;

    // Crear Dots
    items.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.className = `w-2.5 h-2.5 rounded-full transition-all duration-300 ${i === 0 ? 'bg-primary-600 scale-125' : 'bg-gray-300 hover:bg-gray-400'}`;
        dot.setAttribute('aria-label', `Testimonio ${i + 1}`);
        dot.addEventListener('click', () => {
            if(!isAnimating && i !== currentIndex) {
                changeSlide(i);
            }
        });
        dotsContainer.appendChild(dot);
    });

    const dots = dotsContainer.querySelectorAll('button');

    function updateDots(index) {
        dots.forEach((dot, i) => {
            if (i === index) {
                dot.classList.add('bg-primary-600', 'scale-125');
                dot.classList.remove('bg-gray-300');
            } else {
                dot.classList.remove('bg-primary-600', 'scale-125');
                dot.classList.add('bg-gray-300');
            }
        });
    }

    function animateProgressBar() {
        if (progressTween) progressTween.kill();
        gsap.set(progressBar, { scaleX: 0 });
        progressTween = gsap.to(progressBar, {
            scaleX: 1,
            duration: displayTime / 1000,
            ease: "none",
            onComplete: () => changeSlide((currentIndex + 1) % items.length)
        });
    }

    function changeSlide(index) {
        isAnimating = true;
        const current = items[currentIndex];
        const next = items[index];

        const tl = gsap.timeline({
            onComplete: () => {
                current.classList.remove('active');
                currentIndex = index;
                isAnimating = false;
                animateProgressBar();
            }
        });

        // Animación de salida
        tl.to(current, {
            autoAlpha: 0,
            y: -15,
            duration: 0.4,
            ease: "power2.in"
        });

        // Preparar entrada
        tl.set(next, { 
            autoAlpha: 0, 
            y: 15, 
            visibility: "visible" 
        });

        // Animación de entrada
        tl.to(next, {
            autoAlpha: 1,
            y: 0,
            duration: 0.5,
            ease: "power2.out",
            onStart: () => next.classList.add('active')
        }, "-=0.1");

        updateDots(index);
    }

    // Inicio y Animación ScrollTrigger para la entrada general
    setTimeout(() => {
        gsap.set(".testimonial-item:not(.active)", { autoAlpha: 0, y: 15 });
        animateProgressBar();
    }, 100);

    gsap.from(testimonialSection.querySelector('.max-w-4xl'), {
        scrollTrigger: {
            trigger: testimonialSection,
            start: "top 80%"
        },
        y: 40,
        opacity: 0,
        duration: 1,
        ease: "power3.out"
    });
});
