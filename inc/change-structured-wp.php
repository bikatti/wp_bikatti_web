<?php
/**
 * Change structured wordpress
 *
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */


function init_template() {
    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo' );
    add_theme_support('editor-styles'); 

    register_nav_menus( 
        [
            'header_menu' => 'Menú',
            'contact' => 'Links de contacto',
            'footer' => 'Pie de página',
        ]
    );
}

add_action('after_setup_theme', 'init_template');