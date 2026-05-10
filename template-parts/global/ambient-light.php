<?php
/**
 * Ambient Light - Elementos decorativos de fondo
 * Focos laterales persistentes con trayectoria que evita el centro en secciones clave.
 */
?>
<style>
#ambient-light-container { 
    z-index: -10; 
    opacity: 0.85; 
    will-change: transform;
}

.ambient-wash {
    background: radial-gradient(circle at 50% 50%, rgba(36,80,176,0.06) 0%, transparent 60%);
}

.ambient-blob { 
    position: absolute; 
    border-radius: 50%; 
    pointer-events: none; 
    mix-blend-mode: screen; 
    filter: saturate(2.5) contrast(1.2);
    will-change: transform, filter;
}

.ambient-focus {
    height: 300px; width: 300px; filter: blur(65px);
    background: radial-gradient(circle, rgba(36,80,176,0.8) 0%, rgba(36,80,176,0.4) 20%, rgba(36,80,176,0.1) 45%, transparent 70%);
}

.ambient-trace {
    height: 250px; width: 250px; filter: blur(60px);
    background: radial-gradient(circle, rgba(0,174,239,0.7) 0%, rgba(0,174,239,0.3) 20%, rgba(0,174,239,0.08) 45%, transparent 70%);
}

@media(min-width:1024px){
    .ambient-focus { height: 480px; width: 480px; filter: blur(95px); }
    .ambient-trace { height: 400px; width: 400px; filter: blur(90px); }
}
</style>

<div id="ambient-light-container" class="fixed inset-0 pointer-events-none overflow-hidden select-none">
    <div class="ambient-wash absolute inset-0 opacity-40" aria-hidden="true"></div>
    <div class="ambient-blob ambient-focus" aria-hidden="true"></div>
    <div class="ambient-blob ambient-trace" aria-hidden="true"></div>
</div>

<script>
(function() {
    function initAmbient() {
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined' || typeof MotionPathPlugin === 'undefined') {
            return;
        }

        gsap.registerPlugin(ScrollTrigger, MotionPathPlugin);

        const blobs = document.querySelectorAll('.ambient-blob');
        if (!blobs.length) return;

        gsap.set(blobs, { force3D: true, transformOrigin: 'center center', opacity: 0.8 });

        // Respiración suave
        blobs.forEach((blob, i) => {
            gsap.to(blob, {
                scale: 1.08,
                duration: 6 + i,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
            });
        });

        // Timeline de Scroll Global
        const scrollTL = gsap.timeline({
            scrollTrigger: {
                trigger: "body",
                start: "top top",
                end: "bottom bottom",
                scrub: 2.2,
                invalidateOnRefresh: true
            }
        });

        /**
         * LÓGICA DE TRAYECTORIA LATERAL:
         * Los puntos x se mantienen cerca de los bordes (5vw - 25vw o 75vw - 95vw)
         * para evitar cruzar el centro donde está el contenido principal (Tratamientos).
         */

        // Foco Azul (Se mantiene mayormente a la IZQUIERDA)
        scrollTL.to('.ambient-focus', {
            motionPath: {
                path: [
                    {x: '5vw', y: '5vh'},    // Inicio arriba izquierda
                    {x: '15vw', y: '25vh'},  
                    {x: '8vw', y: '50vh'},   // Zona de Tratamientos (muy lateral izquierda)
                    {x: '20vw', y: '75vh'}, 
                    {x: '10vw', y: '95vh'}   // Final abajo izquierda
                ],
                curviness: 1.2
            },
            ease: "none"
        }, 0);

        // Foco Cian (Se mantiene mayormente a la DERECHA)
        scrollTL.to('.ambient-trace', {
            motionPath: {
                path: [
                    {x: '90vw', y: '10vh'},  // Inicio arriba derecha
                    {x: '80vw', y: '35vh'}, 
                    {x: '92vw', y: '60vh'},  // Zona de Tratamientos (muy lateral derecha)
                    {x: '75vw', y: '85vh'}, 
                    {x: '88vw', y: '98vh'}   // Final abajo derecha
                ],
                curviness: 1.2
            },
            ease: "none"
        }, 0);

        ScrollTrigger.refresh();
    }

    function loadDependencies() {
        if (typeof MotionPathPlugin === 'undefined') {
            const script = document.createElement('script');
            script.src = 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js';
            script.onload = initAmbient;
            document.head.appendChild(script);
        } else {
            initAmbient();
        }
    }

    if (document.readyState === 'complete' || document.readyState === 'interactive') {
        loadDependencies();
    } else {
        document.addEventListener('DOMContentLoaded', loadDependencies);
    }
})();
</script>
