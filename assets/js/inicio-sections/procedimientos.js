/**
 * Animaciones e Interacción - Sección de Procedimientos Verticales (Reels)
 * @package Doctor_Cabello
 */

document.addEventListener("DOMContentLoaded", () => {
    // Inicializar Lucide Icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // Solo inicializar si GSAP y ScrollTrigger están disponibles
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        initProcedimientosSection();
    }
});

/**
 * Inicializa las animaciones de entrada para la sección
 */
function initProcedimientosSection() {
    const section = document.querySelector("#procedimientos-section");
    if (!section) return;

    gsap.registerPlugin(ScrollTrigger);

    // 1. Animación de los textos superiores
    gsap.from(section.querySelectorAll(".anim-fade-up"), {
        scrollTrigger: {
            trigger: section.querySelector(".mb-12"),
            start: "top 85%",
        },
        y: 30,
        opacity: 0,
        duration: 0.8,
        stagger: 0.2,
        ease: "power3.out"
    });

    // 2. Animación del Reproductor Vertical
    gsap.from(section.querySelector(".anim-video-player"), {
        scrollTrigger: {
            trigger: section.querySelector(".anim-video-player"),
            start: "top 80%",
        },
        x: -40,
        opacity: 0,
        rotation: -2,
        duration: 1,
        ease: "power4.out"
    });

    // 3. Animación de la Info del contenido
    gsap.from(section.querySelector(".anim-content-info"), {
        scrollTrigger: {
            trigger: section.querySelector(".anim-content-info"),
            start: "top 80%",
        },
        x: 30,
        opacity: 0,
        duration: 0.8,
        ease: "power3.out"
    });

    // 4. Animación de la Playlist (Grid)
    gsap.from(section.querySelectorAll(".playlist-item"), {
        scrollTrigger: {
            trigger: section.querySelector(".anim-playlist"),
            start: "top 85%",
        },
        y: 40,
        opacity: 0,
        duration: 0.6,
        stagger: 0.15,
        ease: "back.out(1.2)"
    });
}

/**
 * LÓGICA DE INTERACCIÓN: Cambiar video activo
 * Se mantiene global para ser llamada desde el onclick del HTML
 */
window.changeVideo = function(element, title, category, desc, imageUrl, videoUrl) {
    // 1. Resetear estados de todos los items
    const items = document.querySelectorAll('.playlist-item');
    items.forEach(item => {
        const border = item.querySelector('.active-border');
        if (border) {
            border.classList.remove('border-primary-500');
            border.classList.add('border-transparent');
        }
        
        const playingIcon = item.querySelector('.playing-icon');
        if (playingIcon) {
            playingIcon.classList.add('hidden');
        }
        
        item.classList.remove('active');
    });

    // 2. Aplicar estado activo al item clickeado
    element.classList.add('active');
    const activeBorder = element.querySelector('.active-border');
    if (activeBorder) {
        activeBorder.classList.remove('border-transparent');
        activeBorder.classList.add('border-primary-500');
    }
    const activePlayingIcon = element.querySelector('.playing-icon');
    if (activePlayingIcon) {
        activePlayingIcon.classList.remove('hidden');
    }

    // 3. Animaciones GSAP para actualizar el contenido principal
    
    // Textos de la derecha
    const titleEl = document.getElementById('main-video-title');
    const descEl = document.getElementById('main-video-desc');
    
    if (titleEl && descEl) {
        gsap.to([titleEl, descEl], {
            opacity: 0,
            y: -10,
            duration: 0.2,
            stagger: 0.05,
            onComplete: () => {
                titleEl.textContent = title;
                descEl.textContent = desc;
                
                gsap.to([titleEl, descEl], {
                    opacity: 1,
                    y: 0,
                    duration: 0.4,
                    stagger: 0.1,
                    ease: "power2.out"
                });
            }
        });
    }

    // Video del reproductor y el badge (Izquierda)
    const playerContainer = document.getElementById('main-player-container');
    const videoPlayer = document.getElementById('main-video-player');
    const videoSource = document.getElementById('main-video-source');
    const mainBadge = document.getElementById('main-video-badge');
    const playOverlay = document.getElementById('play-button-overlay');
    
    if (playerContainer && videoPlayer && mainBadge) {
        gsap.to(playerContainer, {
            scale: 0.95,
            opacity: 0.8,
            duration: 0.3,
            ease: "power1.inOut",
            onComplete: () => {
                // Actualizar Poster y Fuente
                videoPlayer.setAttribute('poster', imageUrl);
                if (videoSource) {
                    videoSource.setAttribute('src', videoUrl);
                    videoPlayer.load(); // Importante para que el video cargue la nueva fuente
                }
                
                mainBadge.textContent = category;
                
                // Mostrar el botón de play de nuevo al cambiar de video
                if (playOverlay) playOverlay.style.opacity = "1";
                if (playOverlay) playOverlay.style.pointerEvents = "auto";

                gsap.to(playerContainer, {
                    scale: 1,
                    opacity: 1,
                    duration: 0.5,
                    ease: "back.out(1.5)"
                });
            }
        });
    }
};

// Listener para el botón de Play central
document.addEventListener("DOMContentLoaded", () => {
    const videoPlayer = document.getElementById('main-video-player');
    const playOverlay = document.getElementById('play-button-overlay');

    if (videoPlayer && playOverlay) {
        playOverlay.addEventListener('click', () => {
            if (videoPlayer.paused) {
                videoPlayer.play();
                gsap.to(playOverlay, { opacity: 0, duration: 0.3, pointerEvents: 'none' });
            }
        });

        // Mostrar controles al pausar o al terminar
        videoPlayer.addEventListener('pause', () => {
            gsap.to(playOverlay, { opacity: 1, duration: 0.3, pointerEvents: 'auto' });
        });

        videoPlayer.addEventListener('ended', () => {
            gsap.to(playOverlay, { opacity: 1, duration: 0.3, pointerEvents: 'auto' });
        });
        
        // También permitir click en el video para pausar
        videoPlayer.addEventListener('click', () => {
            if (!videoPlayer.paused) {
                videoPlayer.pause();
            }
        });
    }
});

