/**
 * Header Logic - Doctor Cabello
 * Uses GSAP ScrollToPlugin and ScrollTrigger for navigation.
 */

document.addEventListener('DOMContentLoaded', () => {
    // Register plugins
    gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);

    const header = document.getElementById('main-header');
    const navLinks = document.querySelectorAll('.nav-link');
    const headerHeight = 110; // Offset for the floating header

    // ==========================================
    // 1. Navegación Suave (Click en Menú)
    // ==========================================
    window.scrollToSection = function(targetId) {
        gsap.to(window, {
            duration: 1, 
            scrollTo: {
                y: targetId,
                offsetY: headerHeight 
            },
            ease: "power3.inOut" 
        });
    };

    // Asignar evento click a los enlaces del menú
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const target = link.getAttribute('href'); // Usar href directly
            if (target && target.startsWith('#')) {
                scrollToSection(target);
            }
        });
    });

    // ==========================================
    // 2. ScrollSpy (Actualizar botón activo según sección en pantalla)
    // ==========================================
    const sections = document.querySelectorAll("section[id]");

    sections.forEach(section => {
        ScrollTrigger.create({
            trigger: section,
            start: "top center", 
            end: "bottom center",
            onToggle: (self) => {
                if (self.isActive) {
                    navLinks.forEach(l => l.classList.remove('active'));
                    
                    const activeLink = document.querySelector(`.nav-link[data-target="${section.id}"]`);
                    if(activeLink) {
                        activeLink.classList.add('active');
                    }
                }
            }
        });
    });

    // ==========================================
    // 3. Header visibility (Hide on Scroll Down)
    // ==========================================
    let lastScroll = 0;
    const handleHeaderVisibility = () => {
        const currentScroll = window.pageYOffset;
        if (currentScroll <= 0) {
            gsap.to(header, { y: 0, opacity: 1, duration: 0.3 });
            return;
        }
        if (currentScroll > lastScroll) {
            gsap.to(header, { y: -150, opacity: 0, duration: 0.4, ease: "power2.inOut" });
        } else {
            gsap.to(header, { y: 0, opacity: 1, duration: 0.4, ease: "power2.out" });
        }
        lastScroll = currentScroll;
    };

    window.addEventListener('scroll', handleHeaderVisibility);
});
