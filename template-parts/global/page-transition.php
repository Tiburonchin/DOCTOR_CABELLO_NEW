<?php
/**
 * Page Transition component
 */
?>
<!-- 
  ========================================
  SVG MORPHING OVERLAY
  ========================================
-->
<svg class="shape-overlays is-opened" viewBox="0 0 100 100" preserveAspectRatio="none">
    <defs>
        <!-- Capa 1: Azul Base (Fondo) -->
        <linearGradient id="gradient1" x1="0%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" stop-color="rgb(var(--color-primary-600))"/>
            <stop offset="100%" stop-color="rgb(var(--color-primary-800))"/>
        </linearGradient>

        <!-- Capa 2: Azul Celeste (Intermedio) -->
        <linearGradient id="gradient2" x1="0%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" stop-color="rgb(var(--color-secondary-400))"/>
            <stop offset="100%" stop-color="rgb(var(--color-secondary-500))"/>
        </linearGradient>
        
        <!-- Capa 3: Azul Vibrante (Superior) -->
        <linearGradient id="gradient3" x1="0%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" stop-color="rgb(var(--color-primary-400))"/>
            <stop offset="100%" stop-color="rgb(var(--color-primary-600))"/>
        </linearGradient>
    </defs>
    
    <path class="shape-overlays__path" d="M 0 100 V 0 H 100 V 100 Z"></path>
    <path class="shape-overlays__path" d="M 0 100 V 0 H 100 V 100 Z"></path>
    <path class="shape-overlays__path" d="M 0 100 V 0 H 100 V 100 Z"></path>
</svg>
