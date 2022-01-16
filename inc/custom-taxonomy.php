<?php
/**
 * Registers news taxonomy for Bikatti theme
 *
 * 
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 * 
 */

function topics_init_taxonomy() {
    $name = 'Temas';
  
    $labels = array(
        'name'                       => _x( $name, 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'              => _x( $name, 'post type general name', 'your-plugin-textdomain' ),
        'menu_name'                  => _x( $name, 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'             => _x( $name, 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'                    => _x( 'Añadir nuevo', $name, 'your-plugin-textdomain' ),
        'add_new_item'               => __( 'Añadir nueva ' . $name, 'your-plugin-textdomain' ),
        'new_item'                   => __( 'Nueva ' . $name, 'your-plugin-textdomain' ),
        'edit_item'                  => __( 'Editar ' . $name, 'your-plugin-textdomain' ),
        'view_item'                  => __( 'Ver ' . $name, 'your-plugin-textdomain' ),
        'all_items'                  => __( 'Todos las ' . $name, 'your-plugin-textdomain' ),
        'search_items'               => __( 'Buscar ' . $name, 'your-plugin-textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'separate_items_with_commas' => __( 'Separate topics with commas' ),
        'add_or_remove_items'        => __( 'Add or remove topics' ),
        'choose_from_most_used'      => __( 'Choose from the most used topics' ),
        'not_found'                  => __( 'No hemos encontrado ninguna ' . $name, 'your-plugin-textdomain' ),
        'not_found_in_trash'         => __( 'No hemos encontrado ninguna ' . $name . ' en la papelera', 'your-plugin-textdomain' ),
    );
  
    $args = array(
      'hierarchical'          => false,
      'labels'                => $labels,
      'show_ui'               => true,
      'show_in_rest'          => true,
      'show_admin_column'     => true,
      'update_count_callback' => '_update_post_term_count',
      'query_var'             => true,
      'rewrite'               => array( 'slug' => 'temas' ),
    );
  
    register_taxonomy('topics','project', $args);
}
add_action( 'init', 'topics_init_taxonomy' );


function tech_init_taxonomy() {
  $name = 'Tecnología';

  $labels = array(
      'name'                       => _x( $name, 'post type general name', 'your-plugin-textdomain' ),
      'singular_name'              => _x( $name, 'post type general name', 'your-plugin-textdomain' ),
      'menu_name'                  => _x( $name, 'admin menu', 'your-plugin-textdomain' ),
      'name_admin_bar'             => _x( $name, 'add new on admin bar', 'your-plugin-textdomain' ),
      'add_new'                    => _x( 'Añadir nuevo', $name, 'your-plugin-textdomain' ),
      'add_new_item'               => __( 'Añadir nueva ' . $name, 'your-plugin-textdomain' ),
      'new_item'                   => __( 'Nueva ' . $name, 'your-plugin-textdomain' ),
      'edit_item'                  => __( 'Editar ' . $name, 'your-plugin-textdomain' ),
      'view_item'                  => __( 'Ver ' . $name, 'your-plugin-textdomain' ),
      'all_items'                  => __( 'Todos las ' . $name, 'your-plugin-textdomain' ),
      'search_items'               => __( 'Buscar ' . $name, 'your-plugin-textdomain' ),
      'parent_item'                => null,
      'parent_item_colon'          => null,
      'separate_items_with_commas' => __( 'Separate topics with commas' ),
      'add_or_remove_items'        => __( 'Add or remove topics' ),
      'choose_from_most_used'      => __( 'Choose from the most used topics' ),
      'not_found'                  => __( 'No hemos encontrado ninguna ' . $name, 'your-plugin-textdomain' ),
      'not_found_in_trash'         => __( 'No hemos encontrado ninguna ' . $name . ' en la papelera', 'your-plugin-textdomain' ),
  );

  $args = array(
    'hierarchical'          => false,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_in_rest'          => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'tecnologia' ),
  );

  register_taxonomy('tech', 'project', $args);
}
add_action( 'init', 'tech_init_taxonomy' );