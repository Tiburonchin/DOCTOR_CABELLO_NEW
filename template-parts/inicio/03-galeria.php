<?php
/**
 * Template Part: Galería Horizontal
 * Description: Sección de galería con scroll horizontal enfocada en resultados de pacientes.
 */

// Configuración de las imágenes de la galería (Resultados Antes y Después)
$gallery_items = [
    [
        'url' => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?q=80&w=800&auto=format&fit=crop',
        'alt' => 'Resultado de Paciente 1'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?q=80&w=800&auto=format&fit=crop',
        'alt' => 'Resultado de Paciente 2'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?q=80&w=800&auto=format&fit=crop',
        'alt' => 'Resultado de Paciente 3'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=800&auto=format&fit=crop',
        'alt' => 'Resultado de Paciente 4'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1631815589968-fdb09a223b1e?q=80&w=800&auto=format&fit=crop',
        'alt' => 'Resultado de Paciente 5'
    ]
];
?>

<!-- 1. TRANSICIÓN DE ENTRADA -->
<section class="h-[60vh] w-full flex flex-col items-center justify-center bg-white relative z-10 border-b border-gray-100">
    <div class="text-center space-y-6 px-6 max-w-4xl" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/5 border border-primary/10 text-primary-dark text-xs font-semibold uppercase tracking-widest mb-2">
            Resultados Reales
        </div>
        <h2 class="text-4xl md:text-6xl font-display font-bold text-gray-900 leading-tight">
            Testigos de nuestra <span class="text-primary">excelencia capilar.</span>
        </h2>
        <p class="text-gray-500 text-lg md:text-xl font-light max-w-2xl mx-auto">
            Cada caso es una historia de transformación. Explora los resultados de quienes recuperaron su imagen y confianza con nosotros.
        </p>
    </div>
    <div class="absolute bottom-12 left-1/2 -translate-x-1/2 animate-bounce flex flex-col items-center gap-2">
        <span class="text-[10px] uppercase tracking-[0.2em] text-gray-400 font-bold">Ver Casos</span>
        <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- 2. SECCIÓN DE GALERÍA HORIZONTAL -->
<section id="portfolio" class="h-screen flex flex-col justify-center bg-gray-50 relative overflow-hidden">
    
    <!-- Título Superior (Flotante) -->
    <div class="absolute top-12 left-0 w-full text-center z-10 px-6 pointer-events-none">
        
    </div>

    <div class="container-fluid">
        <div class="horiz-gallery-wrapper">
            <div class="horiz-gallery-strip items-center">
                
                <?php foreach ( $gallery_items as $item ) : ?>
                    <!-- Item de Galería -->
                    <div class="project-wrap group">
                        <div class="overflow-hidden rounded-2xl gallery-shadow relative">
                            <img src="<?php echo esc_url( $item['url'] ); ?>" 
                                 alt="<?php echo esc_attr( $item['alt'] ); ?>" 
                                 class="transform transition-transform duration-1000 group-hover:scale-110" 
                                 loading="lazy" />
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Panel Final: Transición a Historia de Pacientes -->
                <div class="project-wrap flex flex-col items-center justify-center">
                    <div class="w-full aspect-square flex flex-col items-center justify-center p-8 md:p-12 text-center bg-white rounded-2xl border border-gray-100 gallery-shadow relative overflow-hidden group/card">
                        <!-- Decoración interna -->
                        <div class="absolute -top-12 -right-12 w-32 h-32 bg-primary/5 rounded-full blur-2xl group-hover/card:bg-primary/10 transition-colors duration-500"></div>
                        
                        <h3 class="text-2xl md:text-4xl font-display font-bold text-gray-900 mb-6 relative z-10">Vidas que cambiaron.</h3>
                        <p class="text-gray-500 text-sm md:text-lg mb-10 font-light relative z-10">
                            Detrás de cada resultado hay una persona que recuperó su confianza. Conoce sus testimonios y trayectorias.
                        </p>
                        
                        <a href="#section-nosotros" class="inline-flex items-center gap-4 bg-primary hover:bg-primary-hover text-white px-10 py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-primary-glow group/btn relative z-10">
                            Conocer historias
                            <svg class="w-5 h-5 transform group-hover/btn:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Indicador de Scroll Horizontal (Sutil) -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex items-center gap-3">
        <div class="w-12 h-[1px] bg-gray-400"></div>
        <span class="text-[9px] uppercase tracking-widest text-gray-500 font-bold">Casos de exito</span>
        <div class="w-12 h-[1px] bg-gray-400"></div>
    </div>
</section>