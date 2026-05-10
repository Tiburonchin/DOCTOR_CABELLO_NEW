<?php
/**
 * Seccion: 02b-procedimientos (Tratamientos Verticales / Reels)
 * 
 * @package Doctor_Cabello
 */
?>

<!-- SECCIÓN DE TRATAMIENTOS VERTICALES -->
<section id="procedimientos-section" class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto relative z-elevate overflow-visible">
    
    <!-- CABECERA (Estilo Galería) -->
    <div class="text-center space-y-6 px-6 max-w-4xl mx-auto mb-16">
        <div class="anim-fade-up inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/5 border border-primary/10 text-primary-dark text-xs font-semibold uppercase tracking-widest mb-2 mx-auto">
            Innovación y Resultados
        </div>
        <h2 class="anim-fade-up text-4xl md:text-6xl font-display font-bold text-gray-900 leading-tight">
            Descubre nuestros <span class="inline-block text-transparent bg-clip-text bg-gradient-to-r from-secondary to-primary">Tratamientos</span>
        </h2>
        <p class="anim-fade-up text-gray-500 text-lg md:text-xl font-light max-w-2xl mx-auto leading-relaxed">
            Explora nuestra galería de casos y procedimientos. Resultados reales en manos de nuestros especialistas para transformar tu imagen.
        </p>
    </div>

    <!-- Grid Principal para Formato Vertical -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
        
        <div class="lg:col-span-4 lg:sticky lg:top-32 anim-video-player flex justify-center">
            <div id="main-player-container" class="relative w-full max-w-[380px] aspect-[9/16] bg-white/10 backdrop-blur-2xl rounded-[2.5rem] p-2 shadow-[0_20px_50px_rgba(var(--color-primary-600),0.15)] border border-white/20 group">
                <!-- Pantalla del video -->
                <div class="relative w-full h-full rounded-[2rem] overflow-hidden bg-gray-900/40 shadow-inner">
                    <img id="main-video-img" src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?q=80&w=720&h=1280&fit=crop" alt="Tratamiento" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                    
                    <!-- Overlay Degradado para legibilidad -->
                    <div class="absolute inset-0 bg-gradient-to-b from-black/20 via-transparent to-black/80"></div>
                    
                    <!-- Botón Play Central -->
                    <div class="absolute inset-0 flex items-center justify-center cursor-pointer group-hover:bg-black/10 transition-colors duration-300">
                        <div class="w-20 h-20 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center border border-white/30 transform transition-all duration-300 group-hover:scale-110 shadow-2xl">
                            <i data-lucide="play" class="w-10 h-10 text-white ml-1 fill-white"></i>
                        </div>
                    </div>

                    <!-- Indicadores Flotantes (Tipo Reels/TikTok) -->
                    <div class="absolute bottom-6 left-6 right-6 flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <span id="main-video-badge" class="bg-primary-600/90 backdrop-blur text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                Dermatología
                            </span>
                            <span class="bg-black/50 backdrop-blur text-white text-xs px-2 py-1 rounded-full flex items-center gap-1">
                                <i data-lucide="clock" class="w-3 h-3"></i> 4:30
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTENIDO Y PLAYLIST (Derecha) -->
        <div class="lg:col-span-8 flex flex-col gap-10 lg:pt-4">
            
            <!-- Detalles del Video Activo -->
            <div class="anim-content-info border-b border-borderL pb-8">
                <h3 id="main-video-title" class="text-3xl sm:text-4xl font-bold text-main mb-4 leading-tight">
                    Rejuvenecimiento Facial Avanzado
                </h3>
                <p id="main-video-desc" class="text-muted text-lg leading-relaxed mb-6 max-w-3xl">
                    Conoce nuestro proceso completo de rejuvenecimiento utilizando tecnología láser de última generación. Resultados visibles, procedimiento mínimamente invasivo y recuperación rápida. Observa el paso a paso en este caso de éxito.
                </p>
                <div class="flex flex-wrap gap-4">
                    <button class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3.5 rounded-full font-medium transition-colors shadow-lg shadow-primary-600/30 flex items-center gap-2">
                        Agendar Tratamiento
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </button>
                    <button class="bg-white/10 backdrop-blur-md border-2 border-white/20 hover:border-primary-500 text-main px-6 py-3.5 rounded-full font-medium transition-colors flex items-center gap-2">
                        <i data-lucide="share-2" class="w-5 h-5 text-muted"></i>
                        Compartir
                    </button>
                </div>
            </div>

            <!-- Grid de Playlist (Otros videos) -->
            <div class="anim-playlist">
                <div class="flex items-center justify-between mb-6">
                    <h4 class="font-bold text-main text-xl">Más Casos y Procedimientos</h4>
                    <div class="hidden sm:flex gap-2">
                        <button class="w-10 h-10 rounded-full bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-muted hover:text-primary-600 hover:border-primary-500 transition-colors">
                            <i data-lucide="chevron-left" class="w-5 h-5"></i>
                        </button>
                        <button class="w-10 h-10 rounded-full bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center text-muted hover:text-primary-600 hover:border-primary-500 transition-colors">
                            <i data-lucide="chevron-right" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>

                <!-- Lista con scroll horizontal en móviles, Grid en desktop -->
                <div class="flex overflow-x-auto lg:grid lg:grid-cols-3 gap-4 pb-4 no-scrollbar -mx-4 px-4 lg:mx-0 lg:px-0">
                    
                    <!-- Item 1 (Activo) -->
                    <div class="playlist-item active relative flex-shrink-0 w-40 sm:w-48 lg:w-full aspect-[9/16] rounded-2xl overflow-hidden cursor-pointer group" onclick="changeVideo(this, 'Rejuvenecimiento Facial Avanzado', 'Dermatología', 'Conoce nuestro proceso completo de rejuvenecimiento utilizando tecnología láser de última generación.', 'https://images.unsplash.com/photo-1515377905703-c4788e51af15?q=80&w=720&h=1280&fit=crop')">
                        <div class="absolute inset-0 border-[3px] border-primary-500 z-20 rounded-2xl pointer-events-none active-border"></div>
                        <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?q=80&w=400&h=711&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity z-10 bg-black/20">
                            <i data-lucide="play-circle" class="w-12 h-12 text-white"></i>
                        </div>
                        <!-- Icono de reproduciendo -->
                        <div class="playing-icon absolute top-3 right-3 bg-primary-600 rounded-full p-1.5 z-10">
                            <div class="flex gap-0.5 items-end h-3">
                                <div class="w-1 bg-white h-full animate-pulse"></div>
                                <div class="w-1 bg-white h-2/3 animate-pulse delay-75"></div>
                                <div class="w-1 bg-white h-4/5 animate-pulse delay-150"></div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 p-4 z-10 w-full">
                            <h5 class="text-white font-semibold text-sm leading-tight line-clamp-2">Rejuvenecimiento Facial</h5>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="playlist-item relative flex-shrink-0 w-40 sm:w-48 lg:w-full aspect-[9/16] rounded-2xl overflow-hidden cursor-pointer group" onclick="changeVideo(this, 'Perfilado Labial con Ácido Hialurónico', 'Estética', 'Observa cómo logramos unos labios hidratados, definidos y con volumen natural usando las mejores marcas del mercado.', 'https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?q=80&w=720&h=1280&fit=crop')">
                        <div class="absolute inset-0 border-[3px] border-transparent z-20 rounded-2xl pointer-events-none active-border transition-colors"></div>
                        <img src="https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?q=80&w=400&h=711&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center group-hover:bg-black/30 transition-colors z-10">
                            <i data-lucide="play" class="w-10 h-10 text-white opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all"></i>
                        </div>
                        <div class="playing-icon absolute top-3 right-3 bg-primary-600 rounded-full p-1.5 z-10 hidden">
                            <div class="flex gap-0.5 items-end h-3">
                                <div class="w-1 bg-white h-full animate-pulse"></div><div class="w-1 bg-white h-2/3 animate-pulse delay-75"></div><div class="w-1 bg-white h-4/5 animate-pulse delay-150"></div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 p-4 z-10 w-full">
                            <h5 class="text-white font-semibold text-sm leading-tight line-clamp-2">Perfilado Labial Hialurónico</h5>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="playlist-item relative flex-shrink-0 w-40 sm:w-48 lg:w-full aspect-[9/16] rounded-2xl overflow-hidden cursor-pointer group" onclick="changeVideo(this, 'Lipoenzimas: Reducción sin Cirugía', 'Corporal', 'Aplicación de enzimas recombinantes para eliminar grasa localizada en papada y abdomen. Procedimiento rápido y efectivo.', 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?q=80&w=720&h=1280&fit=crop')">
                        <div class="absolute inset-0 border-[3px] border-transparent z-20 rounded-2xl pointer-events-none active-border transition-colors"></div>
                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?q=80&w=400&h=711&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center group-hover:bg-black/30 transition-colors z-10">
                            <i data-lucide="play" class="w-10 h-10 text-white opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all"></i>
                        </div>
                        <div class="playing-icon absolute top-3 right-3 bg-primary-600 rounded-full p-1.5 z-10 hidden">
                            <div class="flex gap-0.5 items-end h-3">
                                <div class="w-1 bg-white h-full animate-pulse"></div><div class="w-1 bg-white h-2/3 animate-pulse delay-75"></div><div class="w-1 bg-white h-4/5 animate-pulse delay-150"></div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 p-4 z-10 w-full">
                            <h5 class="text-white font-semibold text-sm leading-tight line-clamp-2">Lipoenzimas Reducción</h5>
                        </div>
                    </div>

                     <!-- Item 4 -->
                     <div class="playlist-item relative flex-shrink-0 w-40 sm:w-48 lg:w-full aspect-[9/16] rounded-2xl overflow-hidden cursor-pointer group" onclick="changeVideo(this, 'Tratamiento Capilar PRP', 'Capilar', 'Plasma Rico en Plaquetas para detener la caída del cabello y estimular el crecimiento de nuevos folículos.', 'https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?q=80&w=720&h=1280&fit=crop')">
                        <div class="absolute inset-0 border-[3px] border-transparent z-20 rounded-2xl pointer-events-none active-border transition-colors"></div>
                        <img src="https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?q=80&w=400&h=711&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center group-hover:bg-black/30 transition-colors z-10">
                            <i data-lucide="play" class="w-10 h-10 text-white opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all"></i>
                        </div>
                        <div class="playing-icon absolute top-3 right-3 bg-primary-600 rounded-full p-1.5 z-10 hidden">
                            <div class="flex gap-0.5 items-end h-3">
                                <div class="w-1 bg-white h-full animate-pulse"></div><div class="w-1 bg-white h-2/3 animate-pulse delay-75"></div><div class="w-1 bg-white h-4/5 animate-pulse delay-150"></div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 p-4 z-10 w-full">
                            <h5 class="text-white font-semibold text-sm leading-tight line-clamp-2">Tratamiento Capilar PRP</h5>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
