<?php
/**
 * Template part for displaying the Analisis de Candidato section
 */
?>

<section id="analisis-paciente" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto overflow-visible">
    
    <!-- CABECERA -->
    <div class="text-center mb-20">
        <h2 class="anim-header text-4xl md:text-5xl lg:text-6xl font-extrabold text-primary-800 tracking-tight mb-6">
            Análisis de Candidato
        </h2>
        <p class="anim-header text-muted text-lg md:text-xl max-w-3xl mx-auto">
            No todos los casos son iguales. Utilizamos tecnología avanzada para determinar si eres el candidato ideal para recuperar tu imagen.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
        
        <!-- TARJETA PRINCIPAL (CONSULTA MÉDICA) -->
        <div class="lg:col-span-4 anim-card">
            <div class="h-full bg-gradient-to-br from-primary-600 to-primary-800 rounded-[2.5rem] overflow-hidden relative flex flex-col justify-end p-10 text-white shadow-2xl">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?q=80&w=800&auto=format&fit=crop" alt="Consulta" class="w-full h-full object-cover opacity-20 mix-blend-overlay">
                </div>

                <div class="relative z-10">
                    <h3 class="text-3xl sm:text-4xl font-bold mb-4">Consulta médica</h3>
                    <p class="text-white/80 text-lg mb-8 leading-relaxed">
                        La clave del éxito es una evaluación personalizada para poder diagnosticar tu grado de alopecia y que tengas un excelente trasplante capilar.
                    </p>
                    <button class="w-full bg-white text-primary-800 hover:bg-slate-50 py-4 rounded-2xl font-bold flex justify-center items-center gap-2 transition-all shadow-lg active:scale-95 group">
                        Cotiza tu Evaluación
                        <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- GRID DE PASOS -->
        <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Paso 01 -->
            <div class="anim-card tilt-card bg-white rounded-[2rem] p-8 border border-slate-100 shadow-sm hover:shadow-xl transition-shadow duration-500 group">
                <div class="inner-content flex flex-col h-full justify-between gap-10">
                    <div class="flex justify-between items-start">
                        <div class="w-16 h-16 bg-step1-bg rounded-2xl flex items-center justify-center text-step1-icon">
                            <i data-lucide="microscope" class="w-8 h-8"></i>
                        </div>
                        <span class="step-number group-hover:opacity-60 transition-opacity">01</span>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-main mb-3">Zona donante</h4>
                        <p class="text-muted leading-relaxed">
                            A través de la consulta médica se analiza los cabellos donantes. Es vital tener suficiente cabello de calidad de la zona donante para cubrir las zonas despobladas.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Paso 02 -->
            <div class="anim-card tilt-card bg-white rounded-[2rem] p-8 border border-slate-100 shadow-sm hover:shadow-xl transition-shadow duration-500 group">
                <div class="inner-content flex flex-col h-full justify-between gap-10">
                    <div class="flex justify-between items-start">
                        <div class="w-16 h-16 bg-step2-bg rounded-2xl flex items-center justify-center text-step2-icon">
                            <i data-lucide="activity" class="w-8 h-8"></i>
                        </div>
                        <span class="step-number group-hover:opacity-60 transition-opacity">02</span>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-main mb-3">Salud del Cuero Cabelludo</h4>
                        <p class="text-muted leading-relaxed">
                            Tu piel debe estar libre de inflamaciones o condiciones dermatológicas activas para asegurar el injerto.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Paso 03 -->
            <div class="anim-card tilt-card bg-white rounded-[2rem] p-8 border border-slate-100 shadow-sm hover:shadow-xl transition-shadow duration-500 group">
                <div class="inner-content flex flex-col h-full justify-between gap-10">
                    <div class="flex justify-between items-start">
                        <div class="w-16 h-16 bg-step3-bg rounded-2xl flex items-center justify-center text-step3-icon">
                            <i data-lucide="clock" class="w-8 h-8"></i>
                        </div>
                        <span class="step-number group-hover:opacity-60 transition-opacity">03</span>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-main mb-3">Momento Ideal</h4>
                        <p class="text-muted leading-relaxed">
                            Después de un buen tratamiento con los medicamentos respectivos que indica el especialista, podemos examinar las zonas despobladas.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Paso 04 -->
            <div class="anim-card tilt-card bg-white rounded-[2rem] p-8 border border-slate-100 shadow-sm hover:shadow-xl transition-shadow duration-500 group">
                <div class="inner-content flex flex-col h-full justify-between gap-10">
                    <div class="flex justify-between items-start">
                        <div class="w-16 h-16 bg-step4-bg rounded-2xl flex items-center justify-center text-step4-icon">
                            <i data-lucide="shield-check" class="w-8 h-8"></i>
                        </div>
                        <span class="step-number group-hover:opacity-60 transition-opacity">04</span>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-main mb-3">Expectativas Reales</h4>
                        <p class="text-muted leading-relaxed">
                            Buscamos resultados naturales. Tenemos muchos años de experiencia y entendemos que el cabello es el marco del rostro.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
