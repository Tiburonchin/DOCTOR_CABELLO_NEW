	<!-- Notificación emergente para copia de email -->
	<div class="toast-copied" id="toast">¡Correo copiado al portapapeles!</div>

</div><!-- #page -->

	<footer id="site-footer" class="relative z-0 bg-surface flex flex-col justify-end pt-24 pb-8 px-6 lg:px-12 border-t-2 border-primary-900 overflow-hidden">
        
        <div class="max-w-[1440px] mx-auto w-full flex flex-col justify-between h-full">
            
            <!-- SECCIÓN SUPERIOR: Email Gigante y Sticker "Copy" -->
            <div class="mb-12 md:mb-20 mt-auto">
                <p class="text-primary-900 font-extrabold uppercase tracking-[0.2em] text-[10px] md:text-sm mb-2 gs-scrub-y">Email</p>
                
                <div class="relative w-fit inline-block">
                    <!-- Tipografía Serif elegante para el correo -->
                    <a href="mailto:consultas@drmendoza.com" id="email-text" class="text-[10vw] md:text-[8vw] lg:text-[7vw] leading-none font-serif tracking-tight text-primary-900 hover:text-primary-600 transition-colors gs-scrub-scale block">
                        consultas@drmendoza.com
                    </a>
                    
                    <!-- Sticker interactivo de Copiar -->
                    <button id="copy-btn" class="no-tap-highlight absolute -top-3 -right-2 md:-top-4 md:-right-10 flex items-center justify-center gap-2 border-[1.5px] border-primary-900 rounded-[2rem] px-3 py-1 md:px-5 md:py-1.5 text-[9px] md:text-xs font-bold uppercase text-primary-900 hover:bg-primary-900 hover:text-white transition-colors bg-surface shadow-sm cursor-pointer z-10 gs-bounce-in" style="transform: rotate(-6deg); transform-origin: center;">
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
                    <a href="#" class="gs-social flex items-center gap-3 text-primary-900 font-bold uppercase tracking-[0.1em] text-[10px] md:text-xs group no-tap-highlight">
                        <span class="w-10 h-10 md:w-12 md:h-12 flex items-center justify-center border-[1.5px] border-primary-900 rounded-xl md:rounded-[14px] group-hover:bg-primary-900 group-hover:text-white transition-colors shadow-[2px_2px_0px_rgb(20,46,107)] group-hover:shadow-[0px_0px_0px_rgb(20,46,107)]">
                            <i class="fa-brands fa-linkedin-in text-lg md:text-xl"></i>
                        </span>
                        LinkedIn
                    </a>
                    <!-- Instagram -->
                    <a href="#" class="gs-social flex items-center gap-3 text-primary-900 font-bold uppercase tracking-[0.1em] text-[10px] md:text-xs group no-tap-highlight">
                        <span class="w-10 h-10 md:w-12 md:h-12 flex items-center justify-center border-[1.5px] border-primary-900 rounded-xl md:rounded-[14px] group-hover:bg-primary-900 group-hover:text-white transition-colors shadow-[2px_2px_0px_rgb(20,46,107)] group-hover:shadow-[0px_0px_0px_rgb(20,46,107)]">
                            <i class="fa-brands fa-instagram text-lg md:text-xl"></i>
                        </span>
                        Instagram
                    </a>
                </div>

                <!-- Copyright y Botón Flecha -->
                <div class="flex items-center justify-between w-full md:w-auto gap-4 md:gap-8">
                    <p class="text-primary-900 font-extrabold uppercase tracking-[0.1em] text-[9px] md:text-xs gs-scrub-y">
                        &copy; <?php echo date('Y'); ?> Copyright Dr. Cabello
                    </p>

                    <!-- Botón Back to Top -->
                    <button id="back-to-top" class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center border-[1.5px] border-primary-900 rounded-full text-primary-900 hover:bg-primary-900 hover:text-white transition-colors no-tap-highlight gs-bounce-in shadow-[2px_2px_0px_rgb(20,46,107)] hover:shadow-[0px_0px_0px_rgb(20,46,107)]">
                        <i class="fa-solid fa-arrow-up text-[10px] md:text-sm"></i>
                    </button>
                </div>
            </div>

        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
