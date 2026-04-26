<?php
/**
 * Seccion: 02-tratamientos (Presentación)
 * 
 * @package Doctor_Cabello
 */
?>

<!-- SECCIÓN DE PRESENTACIÓN -->
<section id="presentation-section" class="relative w-full py-24 lg:py-32 overflow-hidden bg-white">
    
    <!-- Decoración de fondo -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-primary/5 to-transparent -z-10 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col lg:flex-row items-stretch gap-12 lg:gap-16">
        
        <!-- Columna Izquierda: Textos y Presentación -->
        <div class="w-full lg:w-5/12 flex flex-col justify-center items-start pt-8 pb-12 lg:py-12">
            
            <div class="pres-element inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/10 border border-primary/20 text-primary-dark text-sm font-medium mb-6">
                <svg class="w-4 h-4 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                </svg>
                <span>Medicina de Precisión</span>
            </div>

            <h2 class="pres-element text-4xl lg:text-5xl font-display font-bold leading-tight mb-6 text-gray-900">
                Un mejor enfoque<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-secondary to-primary">para tu cabello.</span>
            </h2>

            <p class="pres-element text-gray-600 text-lg leading-relaxed mb-8 font-light">
                En el Centro Médico Doctor Cabello, no solo aplicamos tratamientos; diseñamos protocolos personalizados. Nuestra tecnología de punta y experiencia clínica aseguran resultados naturales, indoloros y duraderos.
            </p>

            <a href="#" class="pres-element inline-flex w-fit bg-primary hover:bg-primary-hover text-white px-8 py-3.5 rounded-lg font-medium transition-all duration-300 shadow-primary-glow items-center gap-2 group">
                Acerca de nuestros tratamientos
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>

            <!-- Testimonio / Quote -->
            <div class="pres-element mt-12 w-full">
                <p class="text-gray-800 font-medium text-[1.05rem] sm:text-lg leading-relaxed mb-5 italic">
                    "Cada folículo es tratado con rigor científico y arte reconstructivo. Nuestro objetivo es que el paciente recupere su imagen con total seguridad y sin cicatrices perceptibles."
                </p>
                <div class="flex items-center gap-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dr-cabello.png" alt="Dr. Cabello" class="w-10 h-10 rounded-full object-cover shadow-sm">
                    <p class="text-gray-900 font-semibold text-sm">
                        Dr. Cabello <span class="text-gray-500 font-normal ml-1">- Director Médico Titular</span>
                    </p>
                </div>
            </div>

        </div>

        <!-- Columna Derecha: Imagen destacada -->
        <div class="w-full lg:w-7/12 perspective-1000 relative flex pb-12 lg:py-12">
            <div class="pres-image-wrapper relative w-full h-[400px] lg:h-auto rounded-2xl overflow-hidden shadow-xl shadow-gray-200/50 border border-gray-200 transform transition-transform hover:shadow-primary/10 flex-grow">
                
                <!-- Imagen Principal -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tratamiento-hero.png" alt="Tratamiento Capilar Especializado" class="absolute inset-0 w-full h-full object-cover opacity-95 hover:opacity-100 transition-opacity duration-500">
                
                <!-- Overlays de Gradiente -->
                <div class="absolute inset-0 bg-gradient-to-t from-gray-50 via-gray-50/20 to-transparent opacity-90"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-gray-50/80 via-transparent to-transparent"></div>

                <!-- Elemento flotante decorativo animado -->
                <div class="pres-float-badge absolute bottom-8 right-8 sm:bottom-12 sm:right-12 bg-white/90 backdrop-blur-md border border-gray-100 p-4 rounded-xl shadow-xl flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center shadow-sm">
                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-900 font-medium text-sm">Alta Precisión</p>
                        <p class="text-gray-500 text-xs">Tecnología de Punta</p>
                    </div>
                </div>

            </div>
            
            <!-- Sombra decorativa debajo de la imagen -->
            <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-4/5 h-6 bg-primary/10 blur-2xl rounded-full -z-10"></div>
        </div>

    </div>
</section>
