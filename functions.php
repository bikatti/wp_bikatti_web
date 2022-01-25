<?php
/**
 * Functions and definitions
 *
 * @package    Bikatti
 */


/**
 * Styles CSS
 * Fonts, dependencies and Javascrit
 */

function assets() {
    $version = '0.0.3';

    wp_register_style( 'splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css', '', '2.4.21', 'all' );
    wp_register_style( 'stylescss', get_template_directory_uri( ).'/style.css', '', $version, 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri(  ) , array( 'stylescss', 'splide-css'), $version, 'all' );

    // Splide
    wp_enqueue_script( 'splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', '', '2.4.21', true );
    wp_enqueue_script( 'splide-url', 'https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-url-hash@0.2.1/dist/js/splide-extension-url-hash.cjs.min.js', '', '2.1', true );

    // MicroModal
    wp_enqueue_script( 'micromodal', 'https://unpkg.com/micromodal/dist/micromodal.min.js', '', '0.4.6', true );

    // SweetAlert
    wp_enqueue_script( 'sweetalert', 'https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js', '', '2.1.2', true );
    
    wp_enqueue_script( 'jscustom', get_template_directory_uri( ).'/assets/js/index.js', '', $version, true );
    
}

add_action( 'wp_enqueue_scripts', 'assets' );


/**
 * Classes
 */
// require get_template_directory() . '/classes/.php';

/**
 * Inc 
 */

require get_template_directory() . '/inc/change-structured-wp.php';

require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/shortcodes.php';

require get_template_directory() . '/inc/custom-function.php';

require get_template_directory() . '/inc/custom-post-type.php';

require get_template_directory() . '/inc/custom-taxonomy.php';
