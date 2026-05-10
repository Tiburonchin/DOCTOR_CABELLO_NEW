<?php
/**
 * Template Part: 06-testimonios
 * Description: Sección de testimonios dinámicos con slider GSAP.
 */
?>

<section id="testimonios-section" class="py-24 px-4 sm:px-6 lg:px-8 bg-transparent overflow-hidden">
    <div class="max-w-4xl mx-auto text-center relative">
        
        <!-- Icono de Comillas Decorativo -->
        <div class="mb-10 inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary-50 text-primary-600 anim-quote shadow-sm">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 7.55228 14.017 7V5C14.017 4.44772 14.4647 4 15.017 4H20.017C21.1216 4 22.017 4.89543 22.017 6V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM2.017 21L2.017 18C2.017 16.8954 2.91243 16 4.017 16H7.017C7.56928 16 8.017 15.5523 8.017 15V9C8.017 8.44772 7.56928 8 7.017 8H3.017C2.46472 8 2.017 7.55228 2.017 7V5C2.017 4.44772 2.46472 4 3.017 4H8.017C9.12157 4 10.017 4.89543 10.017 6V15C10.017 18.3137 7.33072 21 4.017 21H2.017Z" />
            </svg>
        </div>

        <!-- Wrapper Principal de Testimonios -->
        <div class="testimonial-wrapper mb-12">
            
            <!-- Testimonio 1 -->
            <div class="testimonial-item active">
                <blockquote class="text-2xl md:text-4xl font-display font-medium leading-snug text-main mb-10 italic">
                    "La fluidez de la interfaz y la robustez del sistema han permitido que nuestro equipo se enfoque en lo que realmente importa: crear valor."
                </blockquote>
                <div class="flex flex-col items-center">
                    <h4 class="text-lg font-bold text-primary-700">Javier Sánchez</h4>
                    <p class="text-sm font-semibold uppercase tracking-widest text-muted mt-1">Director Tecnológico</p>
                </div>
            </div>

            <!-- Testimonio 2 -->
            <div class="testimonial-item">
                <blockquote class="text-2xl md:text-4xl font-display font-medium leading-snug text-main mb-10 italic">
                    "Increíble atención al detalle. El diseño no solo es profesional, sino que la experiencia de usuario es sumamente fluida. Altamente recomendados."
                </blockquote>
                <div class="flex flex-col items-center">
                    <h4 class="text-lg font-bold text-primary-700">María Castillo</h4>
                    <p class="text-sm font-semibold uppercase tracking-widest text-muted mt-1">Directora de Marketing</p>
                </div>
            </div>

            <!-- Testimonio 3 -->
            <div class="testimonial-item">
                <blockquote class="text-2xl md:text-4xl font-display font-medium leading-snug text-main mb-10 italic">
                    "Buscábamos una herramienta que centralizara nuestra comunicación. Esta plataforma no solo lo logró, sino que mejoró la moral del equipo."
                </blockquote>
                <div class="flex flex-col items-center">
                    <h4 class="text-lg font-bold text-primary-700">Roberto Gómez</h4>
                    <p class="text-sm font-semibold uppercase tracking-widest text-muted mt-1">Project Manager</p>
                </div>
            </div>

            <!-- Testimonio 4 -->
            <div class="testimonial-item">
                <blockquote class="text-2xl md:text-4xl font-display font-medium leading-snug text-main mb-10 italic">
                    "El cambio en mi imagen ha sido radical. No solo es el cabello, es la seguridad que he recuperado en mi día a día. El equipo es excepcional."
                </blockquote>
                <div class="flex flex-col items-center">
                    <h4 class="text-lg font-bold text-primary-700">Carlos Méndez</h4>
                    <p class="text-sm font-semibold uppercase tracking-widest text-muted mt-1">Paciente Satisfecho</p>
                </div>
            </div>

            <!-- Testimonio 5 -->
            <div class="testimonial-item">
                <blockquote class="text-2xl md:text-4xl font-display font-medium leading-snug text-main mb-10 italic">
                    "Desde la primera consulta supe que estaba en buenas manos. La tecnología que utilizan y la calidez humana marcan la diferencia."
                </blockquote>
                <div class="flex flex-col items-center">
                    <h4 class="text-lg font-bold text-primary-700">Ana Valenzuela</h4>
                    <p class="text-sm font-semibold uppercase tracking-widest text-muted mt-1">Paciente Satisfecha</p>
                </div>
            </div>

        </div>

        <!-- Navegación y Progreso -->
        <div class="flex flex-col items-center gap-6">
            <div class="flex items-center justify-center gap-4 h-6" id="dots-container">
                <!-- Generado por JS -->
            </div>
            
            <!-- Barra de tiempo sutil -->
            <div class="w-32 h-1 bg-gray-200 rounded-full overflow-hidden">
                <div id="progressBar" class="progress-indicator h-full bg-primary-500 w-full"></div>
            </div>
        </div>

    </div>
</section>
