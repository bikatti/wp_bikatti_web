<?php
/**
 * Registers options with the Theme Customizer
 *
 * @param      object    $wp_customize    The WordPress Theme Customizer
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */



function customize_home_theme( $wp_customize ) {
    $wp_customize->add_panel( 'text_theme_options', 
    [
        'priority'       => 100,
        'title'            => __( 'Personalización del temas' ),
        'description'      => __( 'Inputs para personalizar textos de la revista digital' ),
    ]);

    $wp_customize->add_section( 'dep_home', 
    [
        'title'         => __( 'Inicio' ),
        'priority'      => 2,
        'panel'         => 'text_theme_options',
        'active_callback' => 'is_front_page',
    ]);

    // Setting Image 1
    $wp_customize->add_setting( 'dep_hero_img_1',
    [
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ]);
        
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'dep_hero_img_1',
        [
            'label' => __( 'Imagen del slide 1' ),
            'description' => esc_html__( 'Seleccione la imagen que va a ir de fondo en el hero' ),
            'section' => 'dep_home',
        ]
    ) );

    // Setting Image 2
    $wp_customize->add_setting( 'dep_hero_img_2',
    [
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ]);
        
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'dep_hero_img_2',
        [
            'label' => __( 'Imagen del slide 2' ),
            'description' => esc_html__( 'Seleccione la imagen que va a ir de fondo en el hero' ),
            'section' => 'dep_home',
        ]
    ) );

    // Setting Image 3
    $wp_customize->add_setting( 'dep_hero_img_3',
    [
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ]);
        
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'dep_hero_img_3',
        [
            'label' => __( 'Imagen del slide 3' ),
            'description' => esc_html__( 'Seleccione la imagen que va a ir de fondo en el hero' ),
            'section' => 'dep_home',
        ]
    ) );
}

add_action('customize_register','customize_home_theme');