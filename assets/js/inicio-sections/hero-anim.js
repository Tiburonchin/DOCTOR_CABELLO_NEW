/**
 * Hero Section Animations
 * Handles entry animations, scroll parallax, and text scramble effect.
 */

document.addEventListener('DOMContentLoaded', () => {
    // Register GSAP Plugins
    gsap.registerPlugin(ScrollTrigger);

    // 0. CONTROL DE VELOCIDAD DEL VIDEO
    const heroVideo = document.getElementById('hero-video');
    if (heroVideo) {
        heroVideo.playbackRate = 0.75; // Ajusta este valor (0.5 = mitad de velocidad, 1 = normal)
    }

    // ==========================================
    // 1. ANIMACIÓN DE ENTRADA (HERO SECTION)
    // ==========================================
    const tlHero = gsap.timeline({ defaults: { ease: "power4.out" } });

    // Setup inicial (ocultar elementos)
    gsap.set('.hero-title', { yPercent: 120, rotateZ: 2 });
    gsap.set('.hero-desc', { yPercent: 120, opacity: 0 });
    gsap.set('.hero-btn-container', { y: 40, opacity: 0 });

    // Reproducir al cargar la ventana
    window.addEventListener('load', () => {
        tlHero
            .to('.hero-title', { 
                yPercent: 0, 
                rotateZ: 0, 
                duration: 1.5 
            })
            .to('.hero-desc', { 
                yPercent: 0, 
                opacity: 1, 
                duration: 1.2 
            }, "-=1.1")
            .to('.hero-btn-container', { 
                y: 0, 
                opacity: 1, 
                duration: 1, 
                ease: "back.out(1.5)" 
            }, "-=0.9");
    });

    // ==========================================
    // 2. EFECTO DE SALIDA (SCROLL PARALLAX DEL HERO POR BLOQUES)
    // ==========================================
    const heroContent = document.querySelector('#hero-content');
    if (heroContent) {
        const exitTl = gsap.timeline({
            scrollTrigger: {
                trigger: "#hero-section",
                start: "top top",      
                end: "bottom top",     
                scrub: true            
            }
        });

        exitTl.to('.hero-title', { y: -100, opacity: 0, ease: "none" }, 0)
              .to('.hero-desc', { y: -50, opacity: 0, ease: "none" }, 0.1)
              .to('.hero-btn-container', { y: -30, opacity: 0, ease: "none" }, 0.2)
              .to('.hero-bg-overlay', { opacity: 0.5, ease: "none" }, 0); // Opcional: oscurecer fondo
    }

    // ==========================================
    // 3. EFECTO DE TEXT SCRAMBLE (Reemplazo gratuito)
    // ==========================================
    class TextScrambler {
        constructor(el) {
            this.el = el;
            this.chars = '!<>-_\\/[]{}—=+*^?#________';
            this.update = this.update.bind(this);
        }
        setText(newText) {
            const oldText = this.el.innerText;
            const length = Math.max(oldText.length, newText.length);
            const promise = new Promise((resolve) => this.resolve = resolve);
            this.queue = [];
            for (let i = 0; i < length; i++) {
                const from = oldText[i] || '';
                const to = newText[i] || '';
                const start = Math.floor(Math.random() * 40);
                const end = start + Math.floor(Math.random() * 40);
                this.queue.push({ from, to, start, end });
            }
            cancelAnimationFrame(this.frameRequest);
            this.frame = 0;
            this.update();
            return promise;
        }
        update() {
            let output = '';
            let complete = 0;
            for (let i = 0, n = this.queue.length; i < n; i++) {
                let { from, to, start, end, char } = this.queue[i];
                if (this.frame >= end) {
                    complete++;
                    output += to;
                } else if (this.frame >= start) {
                    if (!char || Math.random() < 0.28) {
                        char = this.randomChar();
                        this.queue[i].char = char;
                    }
                    // Los caracteres revueltos se muestran en grisáceo
                    output += `<span class="text-slate-500">${char}</span>`;
                } else {
                    output += from;
                }
            }
            this.el.innerHTML = output;
            if (complete === this.queue.length) {
                this.resolve();
            } else {
                this.frameRequest = requestAnimationFrame(this.update);
                this.frame++;
            }
        }
        randomChar() {
            return this.chars[Math.floor(Math.random() * this.chars.length)];
        }
    }

    // Array de textos a intercambiar
    const phrases = [
        "Tecnología de vanguardia y especialistas altamente capacitados para brindarte los mejores resultados naturales y permanentes.",
        "Diseñamos de manera artística la línea frontal de tu cabello para lograr una apariencia indetectable y 100% natural.",
        "Recupera la densidad capilar sin dolor y con una recuperación exprés gracias a nuestra técnica de micro-extracción folicular."
    ];
    
    let scrambleIndex = 0;
    const scramblerElement = document.getElementById('scramble-text');
    if (scramblerElement) {
        const scrambler = new TextScrambler(scramblerElement);

        // Se ejecuta automáticamente cada 3 segundos (3000ms)
        setInterval(() => {
            scrambleIndex = (scrambleIndex + 1) % phrases.length;
            scrambler.setText(phrases[scrambleIndex]);
        }, 3000);
    }
});
