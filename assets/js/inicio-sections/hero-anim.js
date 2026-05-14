/**
 * Hero Section Animations - Final Optimized Version
 */
(function () {
    'use strict';

    if (typeof gsap === 'undefined') return;
    
    if (typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
    }

    // --- Helper: Text Scrambler ---
    class TextScrambler {
        constructor(el) {
            this.el = el;
            this.chars = '!<>-_\\/[]{}—=+*^?#________';
            this.update = this.update.bind(this);
        }
        setText(newText) {
            const oldText = this.el.innerText;
            const length = Math.max(oldText.length, newText.length);
            const promise = new Promise((resolve) => (this.resolve = resolve));
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
                    output += `<span class="opacity-50 text-primary-400 font-mono">${char}</span>`;
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

    const initHeroAnim = () => {
        const heroSection = document.getElementById('hero-section');
        if (!heroSection) return;

        const ctx = gsap.context(() => {
            
            const tl = gsap.timeline({ 
                defaults: { ease: "power4.out" } 
            });

            // 1. Entrada de textos
            tl.fromTo(".gs-item", 
                { y: 40, opacity: 0 }, 
                { y: 0, opacity: 1, duration: 1.2, stagger: 0.15 }
            );

            // 2. Entrada del blob
            tl.fromTo(".gs-blob",
                { scale: 0.6, opacity: 0, rotation: -25 },
                { scale: 1, opacity: 1, rotation: 0, duration: 1.8, ease: "expo.out" },
                "-=1.4"
            );

            // 3. Formas decorativas
            tl.fromTo(['[class*="gs-shape-"]'],
                { scale: 0, opacity: 0, rotation: -45 },
                { 
                    scale: 1, 
                    opacity: (i, el) => {
                        const classes = ['opacity-10', 'opacity-20', 'opacity-30', 'opacity-40', 'opacity-50'];
                        const opacities = [0.1, 0.2, 0.3, 0.4, 0.5];
                        for(let j=0; j<classes.length; j++) {
                            if (el.classList.contains(classes[j])) return opacities[j];
                        }
                        return 1;
                    }, 
                    rotation: 0, 
                    duration: 1.2, 
                    stagger: 0.1, 
                    ease: "back.out(1.7)" 
                },
                "-=1.4"
            );

            // 4. Entrada de imágenes
            tl.fromTo(".gs-img-2",
                { x: -60, y: 50, opacity: 0, rotation: -12 },
                { x: 0, y: 0, opacity: 1, rotation: -3, duration: 1.5, ease: "power4.out" },
                "-=1"
            );

            tl.fromTo(".gs-img-1",
                { x: 60, y: -40, opacity: 0, rotation: 12 },
                { x: 0, y: 0, opacity: 1, rotation: 2, duration: 1.5, ease: "power4.out" },
                "-=1.3"
            );

            // 5. Lógica de Text Scramble
            const descEl = document.getElementById('hero-description');
            if (descEl) {
                const scrambler = new TextScrambler(descEl);
                const phrases = [
                    "Tratamientos personalizados de última generación. Resultados naturales y duraderos diseñados específicamente para ti por expertos médicos.",
                    "Tecnología capilar avanzada con un enfoque integral. Recupera la densidad y vitalidad de tu cabello con los mejores especialistas del sector.",
                    "Soluciones médicas a medida para cada tipo de alopecia. Calidad premium y atención exclusiva para garantizar tu satisfacción y bienestar."
                ];
                let counter = 0;

                const nextPhrase = () => {
                    counter = (counter + 1) % phrases.length;
                    scrambler.setText(phrases[counter]);
                };

                gsap.delayedCall(tl.duration() + 1, () => {
                    setInterval(nextPhrase, 4000);
                });
            }

            // 6. Lógica de Cambio de Imágenes
            const imgSets = [
                {
                    main: "https://images.unsplash.com/photo-1618077360395-f3068be8e001?q=80&w=800",
                    second: "https://images.unsplash.com/photo-1579684385127-1ef15d508118?q=80&w=800"
                },
                {
                    main: "https://images.unsplash.com/photo-1621605815971-fbc98d665033?q=80&w=800",
                    second: "https://images.unsplash.com/photo-1551076805-e1869033e561?q=80&w=800"
                },
                {
                    main: "https://images.unsplash.com/photo-1605497788044-5a32c7078486?q=80&w=800",
                    second: "https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=800"
                }
            ];
            let imgCounter = 0;
            const img1Tag = document.querySelector('.gs-img-1 img');
            const img2Tag = document.querySelector('.gs-img-2 img');

            const nextImages = () => {
                imgCounter = (imgCounter + 1) % imgSets.length;
                const set = imgSets[imgCounter];

                // Animación de cambio para imagen 1
                gsap.to(img1Tag, {
                    opacity: 0,
                    scale: 0.95,
                    duration: 0.8,
                    ease: "power2.inOut",
                    onComplete: () => {
                        img1Tag.src = set.main;
                        gsap.to(img1Tag, { opacity: 1, scale: 1, duration: 1, ease: "power2.out" });
                    }
                });

                // Animación de cambio para imagen 2 (un poco retrasada)
                gsap.to(img2Tag, {
                    opacity: 0,
                    scale: 0.95,
                    duration: 0.8,
                    delay: 0.2,
                    ease: "power2.inOut",
                    onComplete: () => {
                        img2Tag.src = set.second;
                        gsap.to(img2Tag, { opacity: 1, scale: 1, duration: 1, ease: "power2.out" });
                    }
                });
            };

            gsap.delayedCall(tl.duration() + 2, () => {
                setInterval(nextImages, 4000);
            });

            // 7. Animaciones continuas
            const continuousAnim = () => {
                gsap.to(".gs-blob", {
                    rotation: 8,
                    scale: 1.08,
                    duration: 6,
                    ease: "sine.inOut",
                    yoyo: true,
                    repeat: -1
                });

                gsap.to(".gs-shape-1", { y: -20, duration: 4, ease: "sine.inOut", yoyo: true, repeat: -1 });
                gsap.to(".gs-shape-2", { y: 25, x: -15, duration: 5, ease: "sine.inOut", yoyo: true, repeat: -1, delay: 0.2 });
                gsap.to(".gs-shape-3", { y: -15, x: 10, duration: 4, ease: "sine.inOut", yoyo: true, repeat: -1, delay: 0.4 });
                gsap.to(".gs-shape-4", { y: 20, rotation: 15, duration: 6, ease: "sine.inOut", yoyo: true, repeat: -1 });
                gsap.to(".gs-shape-5", { x: 15, duration: 3, ease: "sine.inOut", yoyo: true, repeat: -1, delay: 0.1 });
                gsap.to(".gs-shape-6", { y: -25, x: 10, duration: 5, ease: "sine.inOut", yoyo: true, repeat: -1, delay: 0.3 });
            };

            gsap.delayedCall(tl.duration(), continuousAnim);

            // 8. Parallax e Hover
            const rightContainer = document.querySelector('.gs-reveal-right');
            const img1 = document.querySelector('.gs-img-1');
            const img2 = document.querySelector('.gs-img-2');

            if (rightContainer && img1 && img2) {
                rightContainer.addEventListener('mousemove', (e) => {
                    const rect = rightContainer.getBoundingClientRect();
                    const x = (e.clientX - rect.left - rect.width / 2) / (rect.width / 2);
                    const y = (e.clientY - rect.top - rect.height / 2) / (rect.height / 2);

                    gsap.to(img1, { x: x * 20, y: y * 20, duration: 1, ease: "power2.out", overwrite: 'auto' });
                    gsap.to(img2, { x: x * -15, y: y * -15, duration: 1, ease: "power2.out", overwrite: 'auto' });
                    
                    gsap.to('[class*="gs-shape-"]', {
                        x: (i) => x * (10 + i * 2),
                        y: (i) => y * (10 + i * 2),
                        duration: 1.5,
                        ease: "power2.out",
                        overwrite: 'auto'
                    });
                });

                rightContainer.addEventListener('mouseleave', () => {
                    gsap.to([img1, img2, '[class*="gs-shape-"]'], { x: 0, y: 0, duration: 1.5, ease: "power3.out", overwrite: 'auto' });
                });

                [img1, img2].forEach((img, index) => {
                    const inner = img.querySelector('div');
                    const initialRotate = index === 0 ? 2 : -3;

                    img.addEventListener('mouseenter', () => {
                        gsap.to(inner, { scale: 1.05, rotation: 0, duration: 0.6, ease: "power2.out", overwrite: true });
                        gsap.set(img, { zIndex: 40 });
                    });

                    img.addEventListener('mouseleave', () => {
                        gsap.to(inner, { scale: 1, rotation: initialRotate, duration: 0.8, ease: "power3.out", overwrite: true });
                        gsap.set(img, { zIndex: index === 0 ? 20 : 10 });
                    });
                });
            }

        }, heroSection);
    };

    if (document.readyState === 'complete') {
        initHeroAnim();
    } else {
        window.addEventListener('load', initHeroAnim);
    }

})();
