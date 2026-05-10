<?php
/**
 * Section: 01-hero
 * Premium Hero — Clean, cinematic, professional.
 * WordPress-ready: lazy video, noscript fallback, bot-safe.
 * GSAP text scramble + staggered entry animations.
 */
?>
<section id="hero-section" class="relative w-full min-h-screen flex items-center overflow-hidden">
    
    <!-- Video Background -->
    <div class="absolute inset-0 z-0 overflow-hidden">
        <video 
            id="hero-video" 
            autoplay loop muted playsinline 
            preload="auto"
            fetchpriority="high"
            class="absolute inset-0 w-full h-full object-cover brightness-[0.7] contrast-[1.2] blur-[1.2px] scale-[1.03] opacity-0 transition-opacity duration-1000"
        >
            <source 
                data-src="<?php echo get_template_directory_uri(); ?>/assets/video/Hero_section_new2.mp4" 
                type="video/mp4"
            >
        </video>
        <noscript>
            <div class="w-full h-full bg-gradient-to-br from-primary-900 to-primary-700"></div>
        </noscript>
    </div>

    <!-- Gradient Overlays -->
    <div class="absolute inset-0 z-[1] bg-gradient-to-b from-slate-950/40 via-slate-950/20 to-slate-950/70"></div>
    <div class="absolute inset-0 z-[2] bg-gradient-to-r from-slate-950/80 via-slate-950/40 to-transparent"></div>
    
    <!-- Cinematic Tint (Lightweight masking) -->
    <div class="absolute inset-0 z-[4] bg-primary-900/20 mix-blend-overlay pointer-events-none"></div>

    <!-- Bottom gradient — blends into ribbon -->
    <div class="absolute bottom-0 left-0 right-0 h-40 z-[4] pointer-events-none" style="background:linear-gradient(to top, rgb(var(--color-primary-700)), rgba(var(--color-primary-800),0.6), transparent)"></div>

    <!-- Decorative accent lines -->
    <div class="hero-accent-line absolute left-[8%] top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-white/[0.07] to-transparent z-[5] pointer-events-none"></div>
    <div class="hero-accent-line absolute left-[42%] top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-white/[0.04] to-transparent z-[5] pointer-events-none hidden lg:block"></div>

    <!-- Main Content -->
    <div id="hero-content" class="relative z-10 w-full max-w-[1440px] mx-auto px-5 sm:px-8 lg:px-16 pt-32 pb-32 md:pb-40">
        <div class="max-w-3xl">

            <!-- Eyebrow Badge -->
            <div class="hero-badge mb-6 md:mb-8">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/[0.08] backdrop-blur-md border border-white/[0.12] text-white/80">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-secondary-400"></span>
                    </span>
                    <span class="text-[11px] font-semibold uppercase tracking-[0.15em] font-display">Especialistas en Trasplante Capilar</span>
                </div>
            </div>

            <!-- Headline -->
            <div class="text-mask mb-2 md:mb-4">
                <h1 class="hero-title font-display text-4xl sm:text-5xl md:text-7xl lg:text-[5.5rem] font-extrabold leading-[1.08] tracking-tight text-white">
                    Recupera tu
                </h1>
            </div>
            <div class="text-mask mb-6 md:mb-8">
                <h1 class="hero-title-line2 font-display text-4xl sm:text-5xl md:text-7xl lg:text-[5.5rem] font-extrabold leading-[1.08] tracking-tight">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-secondary-400 via-secondary to-primary-500">confianza.</span>
                </h1>
            </div>

            <!-- Scramble Text -->
            <div class="scramble-container mb-10 md:mb-12">
                <p id="scramble-text" class="hero-desc font-sans text-base sm:text-lg md:text-xl text-white/60 leading-relaxed max-w-xl font-light">
                    Tecnología de vanguardia y especialistas altamente capacitados para brindarte los mejores resultados naturales y permanentes.
                </p>
            </div>

            <!-- CTA Buttons -->
            <div class="hero-btn-container flex flex-col sm:flex-row flex-wrap items-stretch sm:items-center gap-3 sm:gap-5">
                <button onclick="scrollToSection('#contacto')" class="gradient-btn text-white font-bold py-3.5 px-8 sm:py-4 sm:px-10 rounded-full text-sm uppercase tracking-[0.15em] flex items-center justify-center gap-3 shadow-[0_16px_40px_-8px_rgba(var(--color-secondary-500),0.35)]">
                    Agendar Evaluación
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
                <button onclick="scrollToSection('#procedimientos-section')" class="glass-btn text-white font-bold py-3.5 px-8 sm:py-4 sm:px-10 rounded-full text-sm uppercase tracking-[0.15em] flex items-center justify-center gap-3">
                    Ver Procedimientos
                </button>
            </div>

            <!-- Trust Indicators -->
            <div class="hero-trust mt-10 md:mt-14 flex flex-wrap items-center gap-5 sm:gap-8">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-white/[0.08] backdrop-blur border border-white/[0.1] flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div>
                        <p class="text-white/90 text-sm font-semibold leading-tight">+15 años</p>
                        <p class="text-white/40 text-xs">de experiencia</p>
                    </div>
                </div>
                <div class="w-px h-8 bg-white/10 hidden sm:block"></div>
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-white/[0.08] backdrop-blur border border-white/[0.1] flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <div>
                        <p class="text-white/90 text-sm font-semibold leading-tight">+5,000</p>
                        <p class="text-white/40 text-xs">pacientes satisfechos</p>
                    </div>
                </div>
                <div class="w-px h-8 bg-white/10 hidden sm:block"></div>
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-white/[0.08] backdrop-blur border border-white/[0.1] flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-secondary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                    </div>
                    <div>
                        <p class="text-white/90 text-sm font-semibold leading-tight">Certificados</p>
                        <p class="text-white/40 text-xs">internacionalmente</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="hero-scroll-indicator absolute bottom-6 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-2 hidden md:flex">
        <span class="text-white/30 text-[10px] uppercase tracking-[0.3em] font-display font-semibold">Descubre más</span>
        <div class="w-6 h-10 border-2 border-white/20 rounded-full flex justify-center pt-2">
            <div class="hero-scroll-dot w-1 h-2.5 bg-secondary-400 rounded-full"></div>
        </div>
    </div>

</section>
