<?php
/**
 * Section: 01-hero
 * Modern, High-End Hero with Image Composition.
 */
?>
<section id="hero-section" class="min-h-screen flex items-center relative overflow-hidden bg-white">

    <!-- Elementos decorativos de fondo (Blobs) -->
    <div class="absolute top-[-10%] right-[-5%] w-[50vw] h-[50vw] bg-primary-100 rounded-full blur-3xl opacity-40 z-0 pointer-events-none"></div>
    <div class="absolute bottom-[-10%] left-[-5%] w-[40vw] h-[40vw] bg-secondary-100 rounded-full blur-3xl opacity-40 z-0 pointer-events-none"></div>

    <div class="container mx-auto px-6 lg:px-12 py-24 lg:py-32 max-w-[1440px] relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <!-- Contenido de Texto (Izquierda) -->
            <div class="flex flex-col justify-center max-w-3xl text-left gs-reveal-left">

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-[1.1] text-semantic-mainText tracking-tight mb-6 gs-item">
                    Recupera tu cabello, <br/>
                    <span class="text-primary-600 relative">
                        recupera tu confianza
                        <svg class="absolute w-full h-3 -bottom-1 left-0 text-secondary-400 opacity-40" viewBox="0 0 200 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.00025 6.77252C42.8532 2.27483 133.51 -2.00412 198.056 6.77252" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                </h1>

                <p class="text-lg text-semantic-mutedText mb-10 max-w-xl leading-relaxed gs-item">
                    Tratamientos personalizados de última generación. Resultados naturales y duraderos diseñados específicamente para ti por expertos médicos.
                </p>

                <!-- Botones CTA -->
                <div class="flex flex-wrap gap-4 mb-12 gs-item">
                    <a href="#" class="px-8 py-4 bg-primary-600 text-white font-semibold rounded-xl hover:bg-primary-700 transition-all duration-300 shadow-[0_8px_20px_-6px_rgba(36,80,176,0.4)] hover:shadow-[0_12px_24px_-8px_rgba(36,80,176,0.5)] hover:-translate-y-0.5 flex items-center gap-2">
                        Agendar Evaluación
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                    <a href="#" class="px-8 py-4 bg-white text-semantic-mainText font-medium rounded-xl border border-gray-200 hover:border-secondary-400 hover:text-secondary-600 transition-all duration-300 shadow-sm flex items-center gap-2">
                        Ver Casos Reales
                    </a>
                </div>

                <!-- Indicadores de Confianza / Estadísticas -->
                <div class="flex flex-wrap gap-8 items-center border-t border-gray-200 pt-8 mt-2 gs-item">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-primary-50 flex items-center justify-center text-primary-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-semantic-mainText leading-none">+5k</p>
                            <p class="text-sm text-semantic-mutedText mt-1">Pacientes Felices</p>
                        </div>
                    </div>

                    <div class="w-px h-10 bg-gray-200 hidden sm:block"></div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-secondary-50 flex items-center justify-center text-secondary-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-semantic-mainText leading-none">98%</p>
                            <p class="text-sm text-semantic-mutedText mt-1">Éxito Comprobado</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Composición de Imágenes (Derecha) -->
            <div class="relative h-[550px] sm:h-[700px] w-full mt-16 lg:mt-0 gs-reveal-right">
                
                <!-- Forma decorativa principal detrás de las imágenes -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[85%] h-[85%] bg-gradient-to-tr from-primary-200/50 to-secondary-100/50 blob-shape z-0 gs-blob"></div>

                <!-- Forma Decorativa 1: Patrón de puntos (Arriba Izquierda) -->
                <div class="absolute top-4 -left-6 w-24 h-24 opacity-40 z-0 gs-shape-1 text-primary-400">
                    <svg width="100%" height="100%" fill="none" viewBox="0 0 100 100">
                        <pattern id="dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <circle fill="currentColor" cx="2" cy="2" r="2.5"></circle>
                        </pattern>
                        <rect x="0" y="0" width="100%" height="100%" fill="url(#dots)"></rect>
                    </svg>
                </div>

                <!-- Forma Decorativa 2: Anillo (Abajo Derecha) -->
                <div class="absolute bottom-12 right-2 w-16 h-16 rounded-full border-[5px] border-secondary-400 opacity-30 z-0 gs-shape-2"></div>

                <!-- Forma Decorativa 3: Círculo Sólido (Arriba Derecha) -->
                <div class="absolute top-16 -right-8 w-12 h-12 rounded-full bg-secondary-400 opacity-30 z-0 gs-shape-3"></div>

                <!-- Forma Decorativa 4: Anillo sutil (Centro Izquierda) -->
                <div class="absolute top-1/2 -left-16 w-20 h-20 rounded-full border-2 border-primary-500 opacity-20 z-0 gs-shape-4"></div>

                <!-- Forma Decorativa 5: Círculo Sólido pequeño (Abajo Izquierda) -->
                <div class="absolute bottom-4 left-1/4 w-6 h-6 rounded-full bg-secondary-500 opacity-40 z-0 gs-shape-5"></div>

                <!-- Forma Decorativa 6: Patrón de puntos (Centro Derecha) -->
                <div class="absolute top-1/3 -right-12 w-20 h-20 opacity-30 z-0 gs-shape-6 text-secondary-500">
                    <svg width="100%" height="100%" fill="none" viewBox="0 0 100 100">
                        <pattern id="dots-2" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                            <circle fill="currentColor" cx="2" cy="2" r="2"></circle>
                        </pattern>
                        <rect x="0" y="0" width="100%" height="100%" fill="url(#dots-2)"></rect>
                    </svg>
                </div>

                <!-- Imagen Secundaria (Antes/Proceso) - Atrás -->
                <div class="absolute bottom-[8%] left-[0%] w-[58%] h-[55%] gs-img-2 z-10 cursor-pointer">
                    <div class="w-full h-full bg-white p-3 sm:p-4 rounded-[2.5rem] img-shadow -rotate-3">
                        <div class="w-full h-full relative rounded-[1.5rem] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?q=80&w=800&auto=format&fit=crop" alt="Análisis capilar en clínica" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover/card:scale-110">
                            
                            <!-- Badge "Antes/Proceso" -->
                            <div class="absolute bottom-4 left-4 bg-white/95 backdrop-blur-sm px-4 py-2 rounded-full shadow-sm text-xs font-medium text-semantic-mutedText flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                                Análisis Inicial
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Imagen Principal (Después/Resultado) - Adelante -->
                <div class="absolute top-[8%] right-[0%] w-[62%] h-[58%] gs-img-1 z-20 cursor-pointer">
                    <div class="w-full h-full bg-white p-3 sm:p-4 rounded-[2.5rem] img-shadow rotate-2">
                        <div class="w-full h-full relative rounded-[1.5rem] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1618077360395-f3068be8e001?q=80&w=800&auto=format&fit=crop" alt="Paciente con resultado exitoso" class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover/card:scale-110">
                            
                            <!-- Badge "Después" -->
                            <div class="absolute top-4 right-4 bg-white/95 backdrop-blur-sm px-4 py-2 rounded-full shadow-sm text-xs font-semibold text-primary-700 flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.6)]"></span>
                                Resultado
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
