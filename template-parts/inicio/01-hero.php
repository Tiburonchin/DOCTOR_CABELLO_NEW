<?php
/**
 * Section: 01-hero
 */
?>
<section id="hero-section" class="relative w-full h-screen flex items-end pb-20 md:pb-32 px-6 md:px-16 lg:px-24 overflow-hidden">
    
    <!-- Video Background -->
    <div class="absolute inset-0 z-0">
        <video id="hero-video" autoplay loop muted playsinline class="w-full h-full object-cover">
            <source src="https://github.com/Tiburonchin/Videos_Doctor_Cabello/raw/main/herosectionV1.mp4" type="video/mp4">
            Tu navegador no soporta videos HTML5.
        </video>
    </div>

    <!-- Gradient Overlay (Oscurecido armónico con profundidad) -->
    <div class="absolute inset-0 z-10 bg-slate-950/30"></div>
    <div class="absolute inset-0 z-20 bg-gradient-to-r from-slate-950/95 via-slate-950/50 to-transparent"></div>

    <!-- Contenido Inferior Izquierdo (Fiel a la referencia) -->
    <div id="hero-content" class="relative z-20 w-full max-w-3xl">
        
        <!-- Titular -->
        <div class="text-mask mb-6">
            <h1 class="hero-title font-display text-5xl md:text-7xl lg:text-[5.5rem] font-extrabold leading-[1.05] tracking-tight text-white">
                Recupera tu <br> confianza.
            </h1>
        </div>

        <!-- Párrafo animado (Scramble Effect) -->
        <div class="text-mask mb-10 scramble-container">
            <p id="scramble-text" class="hero-desc font-sans text-lg md:text-xl text-gray-300 leading-relaxed max-w-xl font-light">
                Tecnología de vanguardia y especialistas altamente capacitados para brindarte los mejores resultados naturales y permanentes.
            </p>
        </div>

        <!-- Botones (Ahora son 2) -->
        <div class="hero-btn-container opacity-0 translate-y-8 flex flex-wrap gap-4">
            <button class="gradient-btn text-white font-bold py-4 px-8 rounded-full text-sm uppercase tracking-widest flex items-center gap-3">
                Agendar Evaluación
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
            <button class="glass-btn text-white font-bold py-4 px-8 rounded-full text-sm uppercase tracking-widest flex items-center gap-3">
                Ver Procedimientos
            </button>
        </div>

    </div>
</section>
