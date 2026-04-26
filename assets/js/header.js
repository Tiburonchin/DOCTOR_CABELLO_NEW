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
    // 3. Header visibility (Static/Always visible)
    // ==========================================
    // Eliminamos la lógica de retracción y ocultamiento para mantener el header constante.

    // ==========================================
    // 4. Mobile Menu Logic
    // ==========================================
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');

    const toggleMenu = (show) => {
        if (show) {
            mobileMenu.classList.remove('translate-x-full');
            mobileMenuToggle.classList.add('is-active');
            document.body.style.overflow = 'hidden'; // Prevent scroll
        } else {
            mobileMenu.classList.add('translate-x-full');
            mobileMenuToggle.classList.remove('is-active');
            document.body.style.overflow = '';
        }
    };

    mobileMenuToggle.addEventListener('click', () => {
        const isOpened = !mobileMenu.classList.contains('translate-x-full');
        toggleMenu(!isOpened);
    });

    if (mobileMenuClose) {
        mobileMenuClose.addEventListener('click', () => toggleMenu(false));
    }

    mobileLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const target = link.getAttribute('href');
            toggleMenu(false);
            if (target && target.startsWith('#')) {
                // Wait for menu animation to finish before scrolling
                setTimeout(() => {
                    scrollToSection(target);
                }, 400);
            }
        });
    });
});
