<?php
/**
 * Template part for displaying the "Ubicación y Contacto" section
 * Balanced Height Version - Refined Header Style
 */
?>

<section id="contacto" class="relative py-24 lg:py-32 overflow-hidden bg-background">
    
    <!-- Elementos decorativos de fondo -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-0 left-0 w-[500px] h-[500px] rounded-full bg-primary-100/30 blur-[120px] -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] rounded-full bg-secondary-100/40 blur-[130px] translate-x-1/4 translate-y-1/4"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noise%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noise)%22/%3E%3C/svg%3E');"></div>
    </div>

    <div class="max-w-[1440px] mx-auto px-6 sm:px-8 lg:px-16 relative z-elevate">
        
        <!-- CABECERA (Estilo Análisis de Candidato) -->
        <div class="text-center space-y-6 px-6 max-w-4xl mx-auto mb-20 gs-header">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-secondary/5 border border-secondary/10 text-secondary-600 text-xs font-semibold uppercase tracking-widest mb-2 mx-auto">
                <span class="w-1.5 h-1.5 rounded-full bg-secondary-500 animate-pulse"></span>
                Estamos para ayudarte
            </div>
            <h2 class="text-4xl md:text-6xl font-display font-bold text-main leading-tight">
                Ubicación y <span class="inline-block text-transparent bg-clip-text bg-gradient-to-r from-secondary to-primary">Contacto</span>
            </h2>
            <p class="text-muted text-lg md:text-xl font-light max-w-2xl mx-auto leading-relaxed">
                Visita nuestro consultorio o agenda tu cita llenando el siguiente formulario. Nos pondremos en contacto contigo a la brevedad.
            </p>
        </div>

        <!-- Grid Principal con Altura Equilibrada -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-stretch">
            
            <!-- COLUMNA IZQUIERDA: Tarjeta de Información y Mapa (4/12) -->
            <div class="lg:col-span-5 xl:col-span-4 flex">
                <div class="w-full bg-white rounded-[2.5rem] shadow-[0_30px_60px_-15px_rgba(0,0,0,0.08)] p-8 lg:p-10 border border-gray-100 gs-info-card group flex flex-col h-full">
                    
                    <!-- Mapa Embebido -->
                    <div class="w-full flex-grow min-h-[300px] bg-gray-100 rounded-3xl mb-10 overflow-hidden relative border border-gray-100 shadow-inner group-hover:shadow-md transition-shadow duration-500">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.7610057039046!2d-77.03133612406857!3d-12.060014042858172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8ea3db18ba9%3A0x6b29f958ab47ef2d!2sLima%2C%20Per%C3%BA!5e0!3m2!1ses!2sve!4v1715000000000!5m2!1ses!2sve" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="absolute inset-0 grayscale contrast-125 group-hover:grayscale-0 transition-all duration-700">
                        </iframe>
                    </div>

                    <h3 class="text-3xl font-display font-bold text-main mb-8 tracking-tight">Detalles de Contacto</h3>

                    <div class="space-y-8">
                        <div class="flex items-start gap-5">
                            <div class="flex-shrink-0 w-12 h-12 rounded-2xl bg-primary-50 text-primary-600 flex items-center justify-center border border-primary-100 shadow-sm group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-main font-bold text-lg mb-1">Clínica San Carlos, Piso 4</p>
                                <p class="text-muted text-base leading-snug">Av. Javier Prado Este 1234, San Isidro, Lima</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="flex-shrink-0 w-12 h-12 rounded-2xl bg-primary-50 text-primary-600 flex items-center justify-center border border-primary-100 shadow-sm group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-main font-bold text-lg mb-1">Llámanos</p>
                                <p class="text-muted text-base">+51 987 654 321</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="flex-shrink-0 w-12 h-12 rounded-2xl bg-primary-50 text-primary-600 flex items-center justify-center border border-primary-100 shadow-sm group-hover:bg-primary-600 group-hover:text-white transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-main font-bold text-lg mb-1">Horario de Atención</p>
                                <p class="text-muted text-base">Lun - Vie: 08:00 AM - 07:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COLUMNA DERECHA: Formulario (8/12) -->
            <div class="lg:col-span-7 xl:col-span-8 flex">
                <div class="w-full bg-white rounded-[2.5rem] shadow-[0_30px_60px_-15px_rgba(0,0,0,0.08)] p-8 sm:p-12 border border-gray-100 gs-form-card relative overflow-hidden flex flex-col h-full">
                    
                    <!-- Decoración interna -->
                    <div class="absolute top-0 right-0 w-48 h-48 bg-secondary-100/20 rounded-bl-[100px] -mr-10 -mt-10 z-0"></div>
                    
                    <div class="relative z-10 flex flex-col h-full">
                        <h3 class="text-3xl font-display font-bold text-main mb-3 tracking-tight">Envíanos un Mensaje</h3>
                        <p class="text-muted text-lg font-light mb-10">Completa tus datos y un especialista te contactará para confirmar tu cita.</p>

                        <form action="#" method="POST" class="space-y-8 flex-grow flex flex-col">
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 gs-input-group">
                                <div class="relative group">
                                    <label for="nombre" class="block text-sm font-bold text-main/70 uppercase tracking-widest mb-3 ml-1">Nombre Completo</label>
                                    <input type="text" id="nombre" placeholder="Ej. Juan Pérez" 
                                        class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl text-main focus:bg-white focus:outline-none focus:ring-4 focus:ring-primary-500/10 focus:border-primary-500 transition-all placeholder:text-gray-300">
                                </div>
                                <div class="relative group">
                                    <label for="telefono" class="block text-sm font-bold text-main/70 uppercase tracking-widest mb-3 ml-1">Teléfono / WhatsApp</label>
                                    <input type="tel" id="telefono" placeholder="+51 999 999 999" 
                                        class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl text-main focus:bg-white focus:outline-none focus:ring-4 focus:ring-primary-500/10 focus:border-primary-500 transition-all placeholder:text-gray-300">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 gs-input-group">
                                <div class="relative group">
                                    <label for="correo" class="block text-sm font-bold text-main/70 uppercase tracking-widest mb-3 ml-1">Correo Electrónico</label>
                                    <input type="email" id="correo" placeholder="tucorreo@ejemplo.com" 
                                        class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl text-main focus:bg-white focus:outline-none focus:ring-4 focus:ring-primary-500/10 focus:border-primary-500 transition-all placeholder:text-gray-300">
                                </div>
                                <div class="relative group">
                                    <label for="fecha" class="block text-sm font-bold text-main/70 uppercase tracking-widest mb-3 ml-1">Fecha Preferida</label>
                                    <input type="date" id="fecha" 
                                        class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl text-main focus:bg-white focus:outline-none focus:ring-4 focus:ring-primary-500/10 focus:border-primary-500 transition-all">
                                </div>
                            </div>

                            <div class="gs-input-group flex-grow">
                                <label for="mensaje" class="block text-sm font-bold text-main/70 uppercase tracking-widest mb-3 ml-1">Mensaje Adicional</label>
                                <textarea id="mensaje" placeholder="Cuéntanos brevemente tu sintomatología o dudas..." 
                                    class="w-full h-full min-h-[120px] px-6 py-4 bg-gray-50 border border-gray-100 rounded-2xl text-main focus:bg-white focus:outline-none focus:ring-4 focus:ring-primary-500/10 focus:border-primary-500 transition-all placeholder:text-gray-300 resize-none"></textarea>
                            </div>

                            <div class="pt-6 gs-input-group">
                                <button type="submit" class="gradient-btn w-full sm:w-auto inline-flex justify-center items-center px-12 py-5 text-white font-bold rounded-2xl shadow-[0_20px_40px_-10px_rgba(var(--color-primary-600),0.3)] group transition-all duration-300 hover:-translate-y-1">
                                    Solicitar Cita Ahora
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 transform group-hover:translate-x-1 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                                      <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <p class="text-xs text-muted mt-6 flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                      <path fill-rule="evenodd" d="M2.166 4.9L10 1.55l7.834 3.35a1 1 0 01.666.945V10c0 5.825-3.53 10.639-8.5 12.231C4.53 20.639 1 15.825 1 10V5.845a1 1 0 01.666-.945zM10 3.333L3 6.333V10c0 4.592 2.715 8.447 7 9.944 4.285-1.497 7-5.352 7-9.944V6.333l-7-3zM7 10a1 1 0 012 0v2a1 1 0 11-2 0v-2zm4-1a1 1 0 10-2 0v1a1 1 0 102 0V9z" clip-rule="evenodd" />
                                    </svg>
                                    Sus datos están protegidos bajo nuestra política de privacidad.
                                </p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
