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
        '01b-ribbon',
        '02-tratamientos',
        '03-galeria',
        '03b-procedimientos',
        '03c-analisis',
        '03-nosotros',
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
