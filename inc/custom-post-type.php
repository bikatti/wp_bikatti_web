<?php
/**
 * Registers news custom post type for Forex theme
 *
 * 
 * @package    DEP
 * @since      DEP 0.1.0
 */



function progress_init() {
    $name = 'Avances';
 
    $labels = array(
        'name'              => _x( $name, 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'     => _x( $name, 'post type general name', 'your-plugin-textdomain' ),
        'menu_name'         => _x( $name, 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'    => _x( $name, 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'           => _x( 'Añadir nuevo', $name, 'your-plugin-textdomain' ),
        'add_new_item'      => __( 'Añadir nueva ' . $name, 'your-plugin-textdomain' ),
        'new_item'          => __( 'Nueva ' . $name, 'your-plugin-textdomain' ),
        'edit_item'         => __( 'Editar ' . $name, 'your-plugin-textdomain' ),
        'view_item'         => __( 'Ver ' . $name, 'your-plugin-textdomain' ),
        'all_items'         => __( 'Todos las ' . $name, 'your-plugin-textdomain' ),
        'search_items'      => __( 'Buscar ' . $name, 'your-plugin-textdomain' ),
        'parent_item_colon' => __( $name . ' padre', 'your-plugin-textdomain' ),
        'not_found'         => __( 'No hemos encontrado ninguna ' . $name, 'your-plugin-textdomain' ),
        'not_found_in_trash'=> __( 'No hemos encontrado ninguna ' . $name . ' en la papelera', 'your-plugin-textdomain' ),
    );
 
    $args = array(
        'label'            => 'Avances',
        'labels'            => $labels,
        'public'            => true,
        'publicly_queryable'=> true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'exclude_from_search' => true,
        'capability_type'   => 'post',
        'hierarchical'      => false,
        'menu_position'     => 6,
        'menu_icon'         => 'dashicons-sticky',
        'can_export'        => true,
        'show_in_rest'      => true,
        'supports'          => array( 'title', 'thumbnail', 'custom-fields', 'revisions' )
    );
 
    register_post_type( 'avance', $args );
}
add_action( 'init', 'progress_init' );

function library_init() {
    $name = 'Biblioteca';

    $labels = array(
        'name'              => _x( $name, 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'     => _x( $name, 'post type general name', 'your-plugin-textdomain' ),
        'menu_name'         => _x( $name, 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'    => _x( $name, 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'           => _x( 'Añadir nuevo', $name, 'your-plugin-textdomain' ),
        'add_new_item'      => __( 'Añadir nueva ' . $name, 'your-plugin-textdomain' ),
        'new_item'          => __( 'Nueva ' . $name, 'your-plugin-textdomain' ),
        'edit_item'         => __( 'Editar ' . $name, 'your-plugin-textdomain' ),
        'view_item'         => __( 'Ver ' . $name, 'your-plugin-textdomain' ),
        'all_items'         => __( 'Todos las ' . $name, 'your-plugin-textdomain' ),
        'search_items'      => __( 'Buscar ' . $name, 'your-plugin-textdomain' ),
        'parent_item_colon' => __( $name . ' padre', 'your-plugin-textdomain' ),
        'not_found'         => __( 'No hemos encontrado ninguna ' . $name, 'your-plugin-textdomain' ),
        'not_found_in_trash'=> __( 'No hemos encontrado ninguna ' . $name . ' en la papelera', 'your-plugin-textdomain' ),
    );

    $args = array(
        'label'            => 'Biblioteca',
        'description'       => __('Description', 'Aquí podrás postear las entradas que sea más importantes para que salgan en la cabecera principal.'),
        'labels'            => $labels,
        'public'            => true,
        // Significa que lo pude llamar un Loop
        'publicly_queryable'=> true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'documentos' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => 5,
        'menu_icon'         => 'dashicons-format-image',
        'can_export'        => true,
        'show_in_rest'      => true,
        'supports'          => array( 'title', 'thumbnail', 'excerpt', 'custom-fields', 'revisions' )
    );

    register_post_type( 'library', $args );
}
add_action( 'init', 'library_init' );

function slep_init_quitar() {
    $name = 'slep';

    $labels = array(
        'name'              => _x( $name, 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'     => _x( $name, 'post type general name', 'your-plugin-textdomain' ),
        'menu_name'         => _x( $name, 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'    => _x( $name, 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'           => _x( 'Añadir nuevo', $name, 'your-plugin-textdomain' ),
        'add_new_item'      => __( 'Añadir nueva ' . $name, 'your-plugin-textdomain' ),
        'new_item'          => __( 'Nueva ' . $name, 'your-plugin-textdomain' ),
        'edit_item'         => __( 'Editar ' . $name, 'your-plugin-textdomain' ),
        'view_item'         => __( 'Ver ' . $name, 'your-plugin-textdomain' ),
        'all_items'         => __( 'Todos las ' . $name, 'your-plugin-textdomain' ),
        'search_items'      => __( 'Buscar ' . $name, 'your-plugin-textdomain' ),
        'parent_item_colon' => __( $name . ' padre', 'your-plugin-textdomain' ),
        'not_found'         => __( 'No hemos encontrado ninguna ' . $name, 'your-plugin-textdomain' ),
        'not_found_in_trash'=> __( 'No hemos encontrado ninguna ' . $name . ' en la papelera', 'your-plugin-textdomain' ),
    );

    $args = array(
        'label'            => 'Slep',
        'description'       => __('Description', 'Aquí podrás postear las entradas que sea más importantes para que salgan en la cabecera principal.'),
        'labels'            => $labels,
        'public'            => true,
        // Significa que lo pude llamar un Loop
        'publicly_queryable'=> true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'query_var'         => true,
        'exclude_from_search' => true, 
        'rewrite'           => array( 'slug' => 'slep' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => 5,
        'menu_icon'         => 'dashicons-format-image',
        'can_export'        => true,
        'show_in_rest'      => true,
        'supports'          => array( 'title', 'custom-fields', 'revisions' )
    );

    register_post_type( 'slep', $args );
}
// add_action( 'init', 'slep_init' );