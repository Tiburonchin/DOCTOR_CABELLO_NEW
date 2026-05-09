/**
 * Footer Logic - Doctor Cabello
 * Experimental Curtain Reveal Animations with Letter-by-Letter effects.
 */

document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    const siteFooter = document.getElementById('site-footer');
    const emailLink = document.getElementById('email-text');
    const copyBtn = document.getElementById('copy-btn');
    const backToTopBtn = document.getElementById('back-to-top');

    if (!siteFooter) return;

    // =================================================================
    // 1. UTILIDAD: SPLIT TEXT MANUAL
    // =================================================================
    // Preparamos el texto para animar letra por letra
    if (emailLink) {
        const text = emailLink.innerText.trim();
        emailLink.innerHTML = '';
        [...text].forEach(char => {
            const span = document.createElement('span');
            span.style.display = 'inline-block';
            span.style.whiteSpace = 'pre';
            span.innerText = char;
            emailLink.appendChild(span);
        });
    }

    // =================================================================
    // 2. EFECTO EXPERIMENTAL: SKEW POR VELOCIDAD
    // =================================================================
    let proxy = { skew: 0 },
        skewSetter = gsap.quickSetter("#email-text", "skewY", "deg"),
        clamp = gsap.utils.clamp(-15, 15);

    ScrollTrigger.create({
        onUpdate: (self) => {
            let skew = clamp(self.getVelocity() / -300);
            if (Math.abs(skew) > Math.abs(proxy.skew)) {
                proxy.skew = skew;
                gsap.to(proxy, {
                    skew: 0,
                    duration: 0.8,
                    ease: "power3",
                    overwrite: true,
                    onUpdate: () => skewSetter(proxy.skew)
                });
            }
        }
    });

    // =================================================================
    // 3. REVELADO INICIAL (SCRUB)
    // =================================================================
    const scrubTl = gsap.timeline({
        scrollTrigger: {
            trigger: siteFooter,
            start: "top bottom",
            end: "bottom bottom",
            scrub: 1.5
        }
    });

    scrubTl.fromTo("#email-text span", 
        { y: 100, opacity: 0, rotationX: -90 },
        { 
            y: 0, 
            opacity: 1, 
            rotationX: 0, 
            stagger: { amount: 0.8, from: "start" },
            ease: "expo.out" 
        }
    );

    scrubTl.fromTo(".gs-scrub-y",
        { y: 50, opacity: 0, filter: "blur(10px)" },
        { y: 0, opacity: 1, filter: "blur(0px)", ease: "power2.out" },
        0.1
    );

    // =================================================================
    // 4. ANIMACIÓN DE COMPONENTES (Entrada/Salida)
    // =================================================================
    
    gsap.from(copyBtn, {
        scrollTrigger: { trigger: siteFooter, start: "top 85%", toggleActions: "play none none reverse" },
        scale: 0, rotation: 90, y: -50, opacity: 0, duration: 1.2, ease: "elastic.out(1, 0.5)"
    });

    gsap.from(".gs-social", {
        scrollTrigger: { trigger: siteFooter, start: "top 90%", toggleActions: "play none none reverse" },
        x: -50, opacity: 0, rotation: -10, duration: 1, ease: "power4.out", stagger: 0.1
    });

    gsap.from(backToTopBtn, {
        scrollTrigger: { trigger: siteFooter, start: "top 95%", toggleActions: "play none none reverse" },
        scale: 0, rotation: -180, duration: 1, ease: "back.out(1.7)"
    });

    // =================================================================
    // 5. EFECTO MAGNÉTICO
    // =================================================================
    const magneticElements = document.querySelectorAll('.gs-social span, #copy-btn, #back-to-top');
    magneticElements.forEach(el => {
        el.addEventListener('mousemove', (e) => {
            const rect = el.getBoundingClientRect();
            const x = (e.clientX - rect.left - rect.width / 2) * 0.5;
            const y = (e.clientY - rect.top - rect.height / 2) * 0.5;
            gsap.to(el, { x, y, rotation: x * 0.1, duration: 0.4, ease: "power3.out" });
        });
        el.addEventListener('mouseleave', () => {
            const defaultRot = el.id === 'copy-btn' ? -6 : 0;
            gsap.to(el, { x: 0, y: 0, rotation: defaultRot, duration: 1, ease: "elastic.out(1, 0.3)" });
        });
    });

    // =================================================================
    // 6. ACCIÓN COPY CON ANIMACIÓN DE LETRAS (Edges to Center)
    // =================================================================
    if (copyBtn && emailLink) {
        copyBtn.addEventListener('click', () => {
            const text = emailLink.innerText.trim();
            navigator.clipboard.writeText(text).then(() => {
                // Feedback visual botón
                gsap.fromTo(copyBtn, 
                    { scale: 0.8, backgroundColor: "#142e6b", color: "white" }, 
                    { scale: 1, backgroundColor: "white", color: "#142e6b", duration: 0.5, ease: "back.out(2)" }
                );

                // ANIMACIÓN DE LETRAS: Se levantan desde los extremos hacia el centro
                gsap.to("#email-text span", {
                    y: -30,
                    scale: 1.2,
                    color: "#2450b0",
                    duration: 0.3,
                    stagger: {
                        amount: 0.4,
                        from: "edges" // La magia: empieza desde los bordes hacia el centro
                    },
                    ease: "power2.out",
                    onComplete: function() {
                        // Regresan a su posición
                        gsap.to(this.targets(), {
                            y: 0,
                            scale: 1,
                            color: "#142e6b",
                            duration: 0.6,
                            stagger: { amount: 0.3, from: "center" }, // Regresan desde el centro hacia afuera
                            ease: "elastic.out(1, 0.4)"
                        });
                    }
                });
                
                // Mostrar Toast
                const toast = document.getElementById('toast');
                if (toast) {
                    gsap.to(toast, { y: 0, opacity: 1, duration: 0.6, ease: "back.out(1.5)" });
                    setTimeout(() => {
                        gsap.to(toast, { y: 100, opacity: 0, duration: 0.4, ease: "power2.in" });
                    }, 3000);
                }
            });
        });
    }

    if (backToTopBtn) {
        backToTopBtn.addEventListener('click', () => {
            gsap.to(window, { scrollTo: 0, duration: 2, ease: "expo.inOut" });
        });
    }
});
