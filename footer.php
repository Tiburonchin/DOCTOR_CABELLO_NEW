	<!-- Notificación emergente para copia de email -->
	<div class="toast-copied" id="toast">¡Correo copiado al portapapeles!</div>

</div><!-- #page -->

	<footer id="site-footer" class="relative z-0 bg-primary-900 flex flex-col justify-end pt-24 pb-8 px-6 lg:px-12 border-t border-white/10 overflow-hidden">
        
        <div class="max-w-[1440px] mx-auto w-full flex flex-col justify-between h-full">
            
            <!-- SECCIÓN SUPERIOR: Email Gigante y Sticker "Copy" -->
            <div class="mb-12 md:mb-20 mt-auto">
                <p class="text-secondary-400 font-extrabold uppercase tracking-[0.2em] text-[10px] md:text-sm mb-2 gs-scrub-y">Email</p>
                
                <div class="relative w-fit inline-block">
                    <!-- Tipografía Serif elegante para el correo -->
                    <a href="mailto:consultas@drmendoza.com" id="email-text" class="text-[10vw] md:text-[8vw] lg:text-[7vw] leading-none font-serif tracking-tight text-white hover:text-secondary-400 transition-colors gs-scrub-scale block">
                        consultas@drmendoza.com
                    </a>
                    
                    <!-- Sticker interactivo de Copiar -->
                    <button id="copy-btn" class="no-tap-highlight absolute -top-3 -right-2 md:-top-4 md:-right-10 flex items-center justify-center gap-2 border-[1.5px] border-white text-white hover:bg-white hover:text-primary-900 transition-all bg-transparent shadow-sm cursor-pointer z-10 gs-bounce-in font-bold uppercase text-[9px] md:text-xs px-3 py-1 md:px-5 md:py-1.5 rounded-[2rem]" style="transform: rotate(-6deg); transform-origin: center;">
                        Copy
                        <i class="fa-regular fa-clone text-[10px] md:text-sm"></i>
                    </button>
                </div>
            </div>

            <!-- SECCIÓN INFERIOR: Redes Sociales, Copyright y Top Button -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-10">
                
                <!-- Redes Sociales (Iconos delineados) -->
                <div class="flex flex-wrap gap-6 md:gap-8">
                    <!-- LinkedIn -->
                    <a href="#" class="gs-social flex items-center gap-3 text-white font-bold uppercase tracking-[0.1em] text-[10px] md:text-xs group no-tap-highlight">
                        <span class="w-10 h-10 md:w-12 md:h-12 flex items-center justify-center border-[1.5px] border-white/30 rounded-xl md:rounded-[14px] group-hover:bg-white group-hover:text-primary-900 group-hover:border-white transition-all shadow-[2px_2px_0px_rgba(255,255,255,0.1)] group-hover:shadow-none">
                            <i class="fa-brands fa-linkedin-in text-lg md:text-xl"></i>
                        </span>
                        LinkedIn
                    </a>
                    <!-- Instagram -->
                    <a href="#" class="gs-social flex items-center gap-3 text-white font-bold uppercase tracking-[0.1em] text-[10px] md:text-xs group no-tap-highlight">
                        <span class="w-10 h-10 md:w-12 md:h-12 flex items-center justify-center border-[1.5px] border-white/30 rounded-xl md:rounded-[14px] group-hover:bg-white group-hover:text-primary-900 group-hover:border-white transition-all shadow-[2px_2px_0px_rgba(255,255,255,0.1)] group-hover:shadow-none">
                            <i class="fa-brands fa-instagram text-lg md:text-xl"></i>
                        </span>
                        Instagram
                    </a>
                </div>

                <!-- Copyright y Botón Flecha -->
                <div class="flex items-center justify-between w-full md:w-auto gap-4 md:gap-8">
                    <p class="text-white/40 font-extrabold uppercase tracking-[0.1em] text-[9px] md:text-xs gs-scrub-y">
                        &copy; <?php echo date('Y'); ?> Copyright Dr. Cabello
                    </p>

                    <!-- Botón Back to Top -->
                    <button id="back-to-top" class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center border-[1.5px] border-white/30 rounded-full text-white hover:bg-white hover:text-primary-900 hover:border-white transition-all no-tap-highlight gs-bounce-in shadow-[2px_2px_0px_rgba(255,255,255,0.1)] hover:shadow-none">
                        <i class="fa-solid fa-arrow-up text-[10px] md:text-sm"></i>
                    </button>
                </div>
            </div>

        </div>
    </footer>

<?php get_template_part( 'template-parts/global/social-bar' ); ?>

<?php wp_footer(); ?>

</body>
</html>
