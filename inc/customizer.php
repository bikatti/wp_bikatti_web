<?php
/**
 * Registers options with the Theme Customizer
 *
 * @param      object    $wp_customize    The WordPress Theme Customizer
 * @package    DEP
 * @since      DEP 0.2.6
 */


function add_new_customize_texts_theme( $wp_customize ) {
    // Setting
    $wp_customize->add_setting( 'dep_id_library',
    [
        'default'           => __( 'Id' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);
    
    $wp_customize->add_control( 'dep_id_library', 
    [
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'dep_filters_logic',
        'label'       => 'ID de la página de Biblioteca',
        'description' => 'Coloca el ID que está asociado en la página de Biblioteca. Puedes encontrar el número en el url del post al momento de tratar de editar con Gutenberg la página',
    ]);

    // Setting
    $wp_customize->add_setting( 'dep_id_progress',
    [
        'default'           => __( 'Id' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);
    
    $wp_customize->add_control( 'dep_id_progress', 
    [
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'dep_pages',
        'label'       => 'ID de la página de Avances',
        'description' => 'Coloca el ID que está asociado en la página de Avances. Puedes encontrar el número en el url del post al momento de tratar de editar con Gutenberg la página',
    ]);
}

add_action('customize_register','add_new_customize_texts_theme');



function customize_home_theme( $wp_customize ) {

    $wp_customize->add_section( 'dep_home', 
    [
        'title'         => __( 'Inicio' ),
        'priority'      => 2,
        'panel'         => 'text_theme_options',
        'active_callback' => 'is_front_page',
    ]);

    // Setting Title 1
    $wp_customize->add_setting( 'dep_carousel_keys_title_1',
    [
        'default'           => __( 'Id' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);
    
    $wp_customize->add_control( 'dep_carousel_keys_title_1', 
    [
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'dep_home',
        'label'       => 'Título del slide 1',
        'description' => 'Coloca el título del slide 1',
    ]);

    // Setting Text 1
    $wp_customize->add_setting( 'dep_carousel_keys_text_1',
    [
        'default'           => __( 'Id' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);
    
    $wp_customize->add_control( 'dep_carousel_keys_text_1', 
    [
        'type'        => 'textarea',
        'priority'    => 10,
        'section'     => 'dep_home',
        'label'       => 'Texto del slide 1',
    ]);

    // Setting Image 1
    $wp_customize->add_setting( 'dep_carousel_keys_img_1',
    [
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ]);
        
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'dep_carousel_keys_img_1',
        [
            'label' => __( 'Imagen del slide 1' ),
            'description' => esc_html__( 'Seleccione la imagen que va a ir de fondo en el carrusel' ),
            'section' => 'dep_home',
        ]
    ) );



    // Setting Title 2
    $wp_customize->add_setting( 'dep_carousel_keys_title_2',
    [
        'default'           => __( 'Id' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);
    
    $wp_customize->add_control( 'dep_carousel_keys_title_2', 
    [
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'dep_home',
        'label'       => 'Título del slide 2',
        'description' => 'Coloca el título del slide 2',
    ]);

    // Setting Text 2
    $wp_customize->add_setting( 'dep_carousel_keys_text_2',
    [
        'default'           => __( 'Id' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);
    
    $wp_customize->add_control( 'dep_carousel_keys_text_2', 
    [
        'type'        => 'textarea',
        'priority'    => 10,
        'section'     => 'dep_home',
        'label'       => 'Texto del slide 1',
    ]);

    // Setting Image 2
    $wp_customize->add_setting( 'dep_carousel_keys_img_2',
    [
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ]);
        
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'dep_carousel_keys_img_2',
        [
            'label' => __( 'Imagen del slide 2' ),
            'description' => esc_html__( 'Seleccione la imagen que va a ir de fondo en el carrusel' ),
            'section' => 'dep_home',
        ]
    ) );
}

add_action('customize_register','customize_home_theme');