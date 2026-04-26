<?php
/**
 * The front page template file
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
    $sections = array(
        '01-hero',
        '02-tratamientos',
        '03-galeria',
        '03-nosotros',
        '04-analisis',
        '05-acerca',
        '06-testimonios',
        '04-contacto',
        '07-conclusion',
    );

    foreach ( $sections as $section ) {
        get_template_part( 'template-parts/inicio/' . $section );
    }
	?>

</main><!-- #main -->

<?php
get_footer();
