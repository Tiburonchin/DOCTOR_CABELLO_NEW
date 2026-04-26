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
        '03-nosotros',
        '04-contacto',
    );

    foreach ( $sections as $section ) {
        get_template_part( 'template-parts/inicio/' . $section );
    }
	?>

</main><!-- #main -->

<?php
get_footer();
