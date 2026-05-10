/**
 * Header Logic - Doctor Cabello
 * Uses GSAP ScrollToPlugin and ScrollTrigger for navigation.
 */

document.addEventListener('DOMContentLoaded', () => {
    // Register plugins
    gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);

    const header = document.getElementById('main-header');
    const navLinks = document.querySelectorAll('.nav-link');
    // Altura dinámica del header para el offset
    const headerHeight = header ? header.offsetHeight + 24 : 100; // Header + top margin offset

    // ==========================================
    // 1. Navegación Suave (Click en Menú)
    // ==========================================
    window.scrollToSection = function(targetId) {
        const targetElement = document.querySelector(targetId);
        if (!targetElement) return;

        // Altura dinámica para compensar el header flotante
        const currentHeaderHeight = header ? header.offsetHeight + 24 : 100;

        // Si Lenis está activo (vía galeria.js), lo usamos para máxima fluidez
        if (window.lenis) {
            window.lenis.scrollTo(targetElement, {
                offset: -currentHeaderHeight,
                duration: 2.2,
                easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t))
            });
        } else {
            // Fallback a GSAP ScrollTo
            gsap.to(window, {
                duration: 1.8, 
                scrollTo: {
                    y: targetElement,
                    offsetY: currentHeaderHeight 
                },
                ease: "power3.inOut" 
            });
        }
    };

    // Asignar evento click a los enlaces del menú
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const target = link.getAttribute('href');
            if (target && target.startsWith('#')) {
                scrollToSection(target);
            }
        });
    });

    // ==========================================
    // 2. ScrollSpy (Actualizar botón activo según sección en pantalla)
    // ==========================================
    const sections = [
        'hero-section',
        'portfolio',
        'procedimientos-section',
        'analisis-paciente',
        'conocenos',
        'contacto'
    ];

    sections.forEach(id => {
        const element = document.getElementById(id);
        if (!element) return;

        ScrollTrigger.create({
            trigger: element,
            start: "top center", 
            end: "bottom center",
            onToggle: (self) => {
                if (self.isActive) {
                    navLinks.forEach(l => l.classList.remove('active'));
                    const activeLink = document.querySelector(`.nav-link[data-target="${id}"]`);
                    if(activeLink) activeLink.classList.add('active');
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
            mobileMenu.classList.remove('opacity-0', 'invisible', 'pointer-events-none');
            mobileMenu.classList.add('opacity-100', 'visible', 'pointer-events-auto');
            mobileMenuToggle.classList.add('is-active');
            document.body.style.overflow = 'hidden';
        } else {
            mobileMenu.classList.add('opacity-0', 'invisible', 'pointer-events-none');
            mobileMenu.classList.remove('opacity-100', 'visible', 'pointer-events-auto');
            mobileMenuToggle.classList.remove('is-active');
            document.body.style.overflow = '';
        }
    };

    mobileMenuToggle.addEventListener('click', () => {
        const isOpened = !mobileMenu.classList.contains('opacity-0');
        toggleMenu(!isOpened);
    });

    mobileMenuClose.addEventListener('click', () => toggleMenu(false));

    // Cerrar menú y navegar al hacer click en links móviles
    mobileLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const target = link.getAttribute('href');
            toggleMenu(false);
            if (target && target.startsWith('#')) {
                // Pequeño delay para que el menú empiece a cerrar antes del scroll
                setTimeout(() => {
                    scrollToSection(target);
                }, 300);
            }
        });
    });
});
