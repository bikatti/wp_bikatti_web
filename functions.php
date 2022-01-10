<?php
/**
 * Functions and definitions
 *
 * @package    DEP
 */


/**
 * Styles CSS
 * Fonts, dependencies and Javascrit
 */

function enqueue_styles_child_theme() {
    $version = '0.0.1';
	$parent_style = 'parent-style';
	$child_style  = 'child-style';
    
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( $child_style, get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));
    

    wp_enqueue_script( 'parent-js', get_theme_file_uri( '/assets/js/index.js' ), array(), false, true );
    wp_enqueue_script( 'jscustom-child', get_template_directory_uri( ).'/assets/js/index.js', '', $version, true);
    // wp_enqueue_script('jscustom-child');
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme', 100);


/**
 * Classes
 */
// require get_template_directory() . '/classes/.php';

/**
 * Inc 
 */

locate_template( '/inc/customizer.php', true );

locate_template( '/inc/shortcodes.php', true );

// require get_template_directory() . '/inc/custom-function.php';

locate_template( '/inc/change-structured-wp.php', true );

locate_template( '/inc/custom-post-type.php', true );

locate_template( '/inc/custom-taxonomy.php', true );
