<?php
/**
 * Template part for displaying the "Conócenos" section (Side-by-Side Action Buttons)
 */
?>

<section id="conocenos" class="relative overflow-hidden bg-primary-900 text-white py-20 lg:py-28">
    
    <!-- Capas Decorativas -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-primary-700/20 blur-[130px] -translate-y-1/2 translate-x-1/4"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-secondary-600/10 blur-[110px] translate-y-1/4 -translate-x-1/4"></div>
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noise%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noise)%22/%3E%3C/svg%3E');"></div>
    </div>

    <div class="max-w-[1440px] mx-auto px-6 sm:px-8 lg:px-16 relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-24 items-center">
            
            <!-- Columna Izquierda: Imagen -->
            <div class="relative gs-image-col lg:col-span-6">
                <!-- Contenedor de Imagen -->
                <div class="relative rounded-[3rem] overflow-hidden shadow-[0_40px_80px_-20px_rgba(0,0,0,0.6)] border border-white/10 aspect-[4/5] w-full max-w-2xl mx-auto lg:mx-0 group">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/equipo/doctor_perfil.webp" 
                        alt="Dr. Carlos Mendoza - Especialista Senior" 
                        class="w-full h-full object-cover object-top transition-transform duration-1000 group-hover:scale-105"
                    />
                    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80"></div>
                </div>
            </div>

            <!-- Columna Derecha: Información -->
            <div class="gs-content-col lg:col-span-6">
                <div class="inline-flex items-center gap-4 py-2 px-6 rounded-full bg-white/5 border border-white/10 mb-8 backdrop-blur-sm">
                    <span class="w-2 h-2 rounded-full bg-secondary-500 shadow-[0_0_10px_rgba(var(--color-secondary-500),0.8)]"></span>
                    <span class="text-secondary-400 text-xs font-bold tracking-[0.3em] uppercase">Excelencia Clínica</span>
                </div>
                
                <h2 class="text-5xl lg:text-7xl font-display font-bold text-white mb-8 leading-[1.05] tracking-tight">
                    Dr. Carlos <br><span class="text-secondary-400">Mendoza</span>
                </h2>
                
                <p class="text-gray-300 text-xl leading-relaxed font-light mb-12">
                    Líder en <span class="text-white font-medium italic">procedimientos de alta precisión</span>, fusionando vanguardia tecnológica y visión humana.
                </p>

                <!-- Grid de Características -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-10 mb-12">
                    
                    <div class="flex items-start gap-5 gs-feature-item group">
                        <div class="flex-shrink-0 w-12 h-12 rounded-2xl bg-step1-bg text-step1-icon flex items-center justify-center shadow-lg transition-all duration-500 group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-lg mb-1">Rigor Clínico</h4>
                            <p class="text-gray-400 text-sm leading-snug">Protocolos médicos de primer nivel.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5 gs-feature-item group">
                        <div class="flex-shrink-0 w-12 h-12 rounded-2xl bg-step2-bg text-step2-icon flex items-center justify-center shadow-lg transition-all duration-500 group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-lg mb-1">Trato Humano</h4>
                            <p class="text-gray-400 text-sm leading-snug">Atención profunda en el bienestar.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5 gs-feature-item group">
                        <div class="flex-shrink-0 w-12 h-12 rounded-2xl bg-step3-bg text-step3-icon flex items-center justify-center shadow-lg transition-all duration-500 group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-lg mb-1">Acreditación</h4>
                            <p class="text-gray-400 text-sm leading-snug">Avalado por consejos internacionales.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-5 gs-feature-item group">
                        <div class="flex-shrink-0 w-12 h-12 rounded-2xl bg-step4-bg text-step4-icon flex items-center justify-center shadow-lg transition-all duration-500 group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold text-lg mb-1">Vanguardia</h4>
                            <p class="text-gray-400 text-sm leading-snug">Tecnología médica constante.</p>
                        </div>
                    </div>
                </div>

                <!-- Botones estrictamente uno al costado del otro -->
                <div class="flex flex-row items-center gap-4 sm:gap-6 gs-buttons">
                    <a href="#reservar" class="gradient-btn flex-1 sm:flex-none inline-flex items-center justify-center px-6 sm:px-10 py-4 text-white rounded-2xl font-bold text-sm sm:text-lg hover:shadow-xl transition-all duration-300 whitespace-nowrap">
                        Agendar Cita
                    </a>
                    
                    <a href="<?php echo home_url('/nosotros'); ?>" class="glass-btn flex-1 sm:flex-none inline-flex items-center justify-center px-6 sm:px-10 py-4 text-white rounded-2xl font-bold text-sm sm:text-lg transition-all duration-300 group whitespace-nowrap">
                        Ver Perfil
                        <svg xmlns="http://www.w3.org/2000/svg" class="hidden sm:block w-5 h-5 ml-3 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
