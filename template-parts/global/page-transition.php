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
<svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
    <defs>
        <!-- Capa de fondo: Tonos Secondary (Celestes) -->
        <linearGradient id="gradient1" x1="0%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" stop-color="var(--color-secondary-light)"/>
            <stop offset="100%" stop-color="var(--color-secondary)"/>
        </linearGradient>
        
        <!-- Capa principal: Tonos Primary (Azules) -->
        <linearGradient id="gradient2" x1="0%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" stop-color="var(--color-primary-light)"/>
            <stop offset="100%" stop-color="var(--color-primary)"/>
        </linearGradient>
    </defs>
    
    <path class="shape-overlays__path"></path>
    <path class="shape-overlays__path"></path>
</svg>
