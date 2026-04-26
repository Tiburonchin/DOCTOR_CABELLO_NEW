<?php
/**
 * Doctor Cabello Theme functions and definitions
 */

if ( ! function_exists( 'doctor_cabello_setup' ) ) :
    function doctor_cabello_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        register_nav_menus( array(
            'menu-1' => esc_html__( 'Primary', 'doctor-cabello' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'doctor_cabello_setup' );

/**
 * Enqueue scripts and styles.
 */
function doctor_cabello_scripts() {
    // Theme stylesheet
    wp_enqueue_style( 'doctor-cabello-style', get_stylesheet_uri(), array(), _S_VERSION );

    // GSAP & Plugins
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true );
    wp_enqueue_script( 'gsap-scrollto', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js', array('gsap'), '3.12.2', true );
    wp_enqueue_script( 'gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), '3.12.2', true );

    // Global transitions
    wp_enqueue_script( 'doctor-cabello-global-transitions', get_template_directory_uri() . '/assets/js/global-transitions.js', array('gsap'), _S_VERSION, true );
    
    // Header & Footer logic
    wp_enqueue_script( 'doctor-cabello-header', get_template_directory_uri() . '/assets/js/header.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'doctor-cabello-footer', get_template_directory_uri() . '/assets/js/footer.js', array(), _S_VERSION, true );

    // Conditional scripts for front-page
    if ( is_front_page() ) {
        wp_enqueue_script( 'hero-anim', get_template_directory_uri() . '/assets/js/inicio-sections/hero-anim.js', array(), _S_VERSION, true );
        wp_enqueue_script( 'ribbon-logic', get_template_directory_uri() . '/assets/js/inicio-sections/ribbon-logic.js', array(), _S_VERSION, true );
        // Add others as needed...
    }
}
add_action( 'wp_enqueue_scripts', 'doctor_cabello_scripts' );

if ( ! defined( '_S_VERSION' ) ) {
    define( '_S_VERSION', '1.0.0' );
}
