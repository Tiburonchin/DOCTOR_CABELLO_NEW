<?php
// Frases para la pista izquierda (izquierda → derecha)
$left_phrases = array(
    'Recupera tu autoestima',
    'Resultados naturales y permanentes',
    'Transforma tu vida hoy',
);

// Frases para la pista derecha (derecha → izquierda)
$right_phrases = array(
    'Mi mejor inversión',
    'Tecnología de vanguardia',
    'Más de 15 años de experiencia',
);
?>

<section class="ribbon-section" aria-label="Frases inspiradoras sobre trasplante capilar">
    <div class="ribbon-container">
        
        <!-- Track de izquierda a derecha -->
        <div class="ribbon-track ribbon-track--left" data-direction="left" aria-hidden="true">
            <div class="ribbon-track__content">
                <?php 
                // Duplicar frases para loop continuo
                $left_loop = array_merge($left_phrases, $left_phrases, $left_phrases, $left_phrases);
                foreach ($left_loop as $phrase) : 
                ?>
                    <span class="ribbon-phrase"><?php echo esc_html($phrase); ?></span>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- Track de derecha a izquierda -->
        <div class="ribbon-track ribbon-track--right" data-direction="right" aria-hidden="true">
            <div class="ribbon-track__content">
                <?php 
                // Duplicar frases para loop continuo
                $right_loop = array_merge($right_phrases, $right_phrases, $right_phrases, $right_phrases);
                foreach ($right_loop as $phrase) : 
                ?>
                    <span class="ribbon-phrase"><?php echo esc_html($phrase); ?></span>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- Texto accesible para lectores de pantalla -->
        <div class="sr-only">
            <p>Frases destacadas: <?php echo esc_html(implode(', ', array_merge($left_phrases, $right_phrases))); ?></p>
        </div>
        
    </div>
</section>
