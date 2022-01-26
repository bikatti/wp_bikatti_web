<?php 
/**
 * Blog Posts on Front-Page
 * 
 *
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */


// Front-page
function curriculum_button($atts = '') {
    ob_start();
    $atributos = shortcode_atts( 
        [ 
            'link_curriculum' => '#',
        ],
        $atts 
    );

    get_template_part( 
        'template-parts/front-page/curriculum',
        '', 
        $args = [
            'link_curriculum' => $atributos['link_curriculum'],
        ]
    );

    return ob_get_clean();
}
add_shortcode( 'curriculum', 'curriculum_button' );


function portafolio_block() {
    ob_start();
    get_template_part( 'template-parts/front-page/portafolio');
    return ob_get_clean();
}
add_shortcode( 'portafolio', 'portafolio_block' );

function projects_img_block() {
    ob_start();
    get_template_part( 'template-parts/front-page/projects-img');
    return ob_get_clean();
}
add_shortcode( 'projects-img', 'projects_img_block' );
