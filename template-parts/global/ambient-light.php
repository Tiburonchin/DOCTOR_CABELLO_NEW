<?php
/**
 * Ambient Light - Elementos decorativos de fondo
 * Círculos de luz difuminados que se mueven sutilmente.
 */
?>
<div id="ambient-light-container" class="fixed inset-0 pointer-events-none overflow-hidden" style="z-index: -1; opacity: 0.8;">
    <!-- Blob Primario (Azul) -->
    <div class="ambient-blob blob-primary absolute w-[1000px] h-[1000px] rounded-full blur-[160px] top-[-20%] left-[-15%]" 
         style="background: radial-gradient(circle, rgba(36, 80, 176, 0.5) 0%, transparent 70%);"></div>
    
    <!-- Blob Secundario (Celeste) -->
    <div class="ambient-blob blob-secondary absolute w-[900px] h-[900px] rounded-full blur-[140px] bottom-[-10%] right-[-10%]" 
         style="background: radial-gradient(circle, rgba(0, 174, 239, 0.4) 0%, transparent 70%);"></div>
    
    <!-- Blob Acento (Orquídea / Rosa) -->
    <div class="ambient-blob blob-accent absolute w-[800px] h-[800px] rounded-full blur-[150px] top-[25%] right-[5%]" 
         style="background: radial-gradient(circle, rgba(224, 96, 192, 0.4) 0%, transparent 70%);"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap === 'undefined') return;

    const blobs = document.querySelectorAll('.ambient-blob');
    
    // 1. Animación de flotación y respiración
    blobs.forEach((blob, i) => {
        gsap.to(blob, {
            x: i % 2 === 0 ? '+=120' : '-=120',
            y: i % 3 === 0 ? '+=100' : '-=100',
            scale: 1.25,
            duration: 15 + (i * 5),
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
    });

    // 2. Parallax con scroll
    if (typeof ScrollTrigger !== 'undefined') {
        gsap.to(blobs, {
            y: (i) => i % 2 === 0 ? -400 : 400,
            rotation: (i) => i % 2 === 0 ? 30 : -30,
            scrollTrigger: {
                trigger: "body",
                start: "top top",
                end: "bottom bottom",
                scrub: 2.5
            }
        });
    }
});
</script>
