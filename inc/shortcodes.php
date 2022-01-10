<?php 
/**
 * Blog Posts on Front-Page
 * 
 *
 * @package    DEP
 * @since      DEP 0.1.0
 */


function applications_query() {
    ob_start();
    get_template_part( 'template-parts/archive/postulaciones' );
    return ob_get_clean();
}
add_shortcode( 'postulaciones-posts', 'applications_query' );

function featured_documents_query() {
    ob_start();
    get_template_part( 'template-parts/archive/featured-documents' );
    return ob_get_clean();
}
add_shortcode( 'documentos-destacados', 'featured_documents_query' );


function library_query($atts = '') {
    ob_start();
    $atributos = shortcode_atts( 
        [ 
            'title' => 'Buscar',
            'search' => true,
            'categories' => true,
            'type_categories' => 'category',
            'temas' => false,
            'post_type' => 'library'
        ],
        $atts 
    );

    get_template_part( 
        'template-parts/archive/filters',
        '', 
        $args = [
            'search_title' => $atributos['title'],
            'search' => $atributos['search'],
            'categories' => $atributos['categories'],
            'type_categories' => $atributos['type_categories'],
            'topics' => $atributos['temas'],
            'post_type' => $atributos['post_type'],
        ]
    );

    get_template_part( 'template-parts/archive/library');
    return ob_get_clean();
}
add_shortcode( 'documentos-posts', 'library_query' );

function progress_query() {
    ob_start();
    get_template_part( 'template-parts/archive/progress' );
    return ob_get_clean();
}
add_shortcode( 'avances', 'progress_query' );


// Front-page
function carousel_keys() {
    ob_start();
    get_template_part( 'template-parts/front-page/carousel-keys');
    return ob_get_clean();
}
add_shortcode( 'carousel-keys', 'carousel_keys' );


function featured_news_query() {
    ob_start();
    get_template_part( 'template-parts/front-page/featured-news');
    return ob_get_clean();
}
add_shortcode( 'featured-news', 'featured_news_query' );


function slep_modal() {
    ob_start();
    get_template_part( 'template-parts/front-page/slep');
    return ob_get_clean();
}
add_shortcode( 'slep', 'slep_modal' );