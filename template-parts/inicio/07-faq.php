<?php
/**
 * Template Part: 07-faq
 * Description: Sección de preguntas frecuentes (FAQ) con acordeón interactivo.
 */
?>

<section id="faq-section" class="py-24 px-4 sm:px-6 lg:px-8 bg-gray-50/50">
    <div class="max-w-7xl mx-auto">
        <div class="bg-white rounded-3xl shadow-2xl shadow-primary-900/5 overflow-hidden border border-gray-100/60">
            <div class="flex flex-col lg:flex-row">
                
                <!-- Bloque Izquierdo: Información y Redirección -->
                <div class="lg:w-2/5 p-10 md:p-14 bg-gradient-to-br from-primary-50 to-white flex flex-col justify-between border-b lg:border-b-0 lg:border-r border-gray-100 relative overflow-hidden">
                    <!-- Elemento decorativo de fondo -->
                    <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-primary-100/50 rounded-full blur-3xl opacity-60"></div>
                    
                    <div class="space-y-8 relative z-10">
                        <div class="inline-flex items-center justify-center p-4 bg-white rounded-2xl shadow-sm text-primary-600">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-display font-medium text-main leading-tight tracking-tight">
                            ¿Tienes <br>alguna <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-secondary-500">duda?</span>
                        </h2>
                        <p class="text-muted text-lg leading-relaxed">
                            Estamos aquí para guiarte en cada paso. Si no encuentras la respuesta que buscas, nuestro equipo especializado está a un mensaje de distancia.
                        </p>
                    </div>

                    <div class="mt-14 relative z-10">
                        <a href="https://wa.me/tu_numero" target="_blank" class="inline-flex items-center justify-center w-full px-8 py-4 bg-primary-600 text-white font-bold rounded-xl hover:bg-primary-700 transition-all duration-300 shadow-xl shadow-primary-600/20 group">
                            Hablar con un Especialista
                            <svg class="w-5 h-5 ml-3 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                        <p class="text-center text-xs text-muted mt-5 font-semibold uppercase tracking-widest flex items-center justify-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                            Respuesta rápida: <span class="text-primary-600">~15 min</span>
                        </p>
                    </div>
                </div>

                <!-- Bloque Derecho: Acordeón FAQ -->
                <div class="lg:w-3/5 p-10 md:p-14 bg-white">
                    <div class="faq-list space-y-2">
                        
                        <!-- FAQ Item 1 -->
                        <div class="faq-item border-b border-gray-100 last:border-0">
                            <button class="faq-question w-full flex items-center justify-between text-left py-6 focus:outline-none group">
                                <span class="text-lg md:text-xl font-medium text-main group-hover:text-primary-600 transition-colors pr-6">¿Cuánto tiempo dura la recuperación del trasplante capilar?</span>
                                <div class="faq-icon w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-primary-500 transition-all duration-300 flex-shrink-0 shadow-sm border border-gray-100/50">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </div>
                            </button>
                            <div class="faq-answer">
                                <div class="pb-8 text-muted leading-relaxed text-base md:text-lg">
                                    La recuperación inicial toma entre 7 a 10 días, durante los cuales los microinjertos se asientan. Puedes retomar tus actividades laborales en 3-5 días (si no requieren esfuerzo físico). El crecimiento visible del cabello nuevo comienza a notarse a partir del tercer o cuarto mes.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item border-b border-gray-100 last:border-0">
                            <button class="faq-question w-full flex items-center justify-between text-left py-6 focus:outline-none group">
                                <span class="text-lg md:text-xl font-medium text-main group-hover:text-primary-600 transition-colors pr-6">¿Es doloroso el procedimiento?</span>
                                <div class="faq-icon w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-primary-500 transition-all duration-300 flex-shrink-0 shadow-sm border border-gray-100/50">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </div>
                            </button>
                            <div class="faq-answer">
                                <div class="pb-8 text-muted leading-relaxed text-base md:text-lg">
                                    No. Utilizamos anestesia local de última generación para garantizar que el área donante y receptora estén completamente adormecidas. La gran mayoría de nuestros pacientes reportan cero dolor durante la intervención y solo una leve incomodidad en los primeros días del postoperatorio.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item border-b border-gray-100 last:border-0">
                            <button class="faq-question w-full flex items-center justify-between text-left py-6 focus:outline-none group">
                                <span class="text-lg md:text-xl font-medium text-main group-hover:text-primary-600 transition-colors pr-6">¿Los resultados son realmente permanentes?</span>
                                <div class="faq-icon w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-primary-500 transition-all duration-300 flex-shrink-0 shadow-sm border border-gray-100/50">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </div>
                            </button>
                            <div class="faq-answer">
                                <div class="pb-8 text-muted leading-relaxed text-base md:text-lg">
                                    Sí. El cabello implantado se extrae de la zona posterior o lateral de la cabeza, áreas genéticamente resistentes a la alopecia. Una vez trasplantados, estos folículos mantienen esa resistencia, creciendo de forma natural y permanente para toda la vida.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item border-b border-gray-100 last:border-0">
                            <button class="faq-question w-full flex items-center justify-between text-left py-6 focus:outline-none group">
                                <span class="text-lg md:text-xl font-medium text-main group-hover:text-primary-600 transition-colors pr-6">¿Soy un buen candidato para el implante?</span>
                                <div class="faq-icon w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-primary-500 transition-all duration-300 flex-shrink-0 shadow-sm border border-gray-100/50">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </div>
                            </button>
                            <div class="faq-answer">
                                <div class="pb-8 text-muted leading-relaxed text-base md:text-lg">
                                    La candidatura depende de varios factores: la densidad de tu zona donante, el grado de alopecia y tus expectativas. Por ello, ofrecemos una evaluación de precisión gratuita donde nuestro equipo médico analiza tu caso particular y diseña un plan a medida.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
