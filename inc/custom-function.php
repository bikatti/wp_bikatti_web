<?php
/**
 * Costum function with html, conditional, etc
 *
 * @package    DEP
 * @since      DEP 0.1.0
 */


// breadcrumbs function
function the_breadcrumb( $id, $id_post = null ) {
    $id_news = get_theme_mod( 'dep_id_news' );
    $id_webinar = get_theme_mod( 'dep_id_webinar' );
    $id_library = get_theme_mod( 'dep_id_library' );
    $id_progress = get_theme_mod( 'dep_id_progress' );
    $id_aula = get_theme_mod( 'dep_id_virtual_room' );
    $id_participation = get_theme_mod( 'dep_id_participation' );
    
    $closeCat = 0;

    echo '<ul>';
    echo '<li><a class="breadcrumb__link" href="';
    echo get_option('home');
    echo '">Home</a></li>';

    if (is_post_type('post') && is_category() || is_post_type('post') && is_single()) {
        if (!is_single()) breadcrumb__link( $id , 'Noticias y actualidad' );
        
        if (is_single()) breadcrumb__link( $id , 'Noticias' );

        foreach((get_the_category()) as $category) {
            if(!$category->parent && $closeCat == 0 && !is_single()) { 
                breadcrumb__disabled( $category->cat_name );
                $closeCat++;
            }

            if(!$category->parent && $closeCat == 0 && is_single()) { 
                breadcrumb__link( $category->term_id , $category->cat_name, true );
                breadcrumb__disabled( get_field( 'titulo_del_breadcrumb', $id_post ) );
                $closeCat++;
            }
        }
    }
    
    if (is_post_type('webinar') && is_single()) {
        breadcrumb__link( $id_news , 'Noticias' );
        breadcrumb__link( $id_webinar, 'Charlas DEP' );
        breadcrumb__disabled( get_field( 'titulo_del_breadcrumb', $id_post ) );
    }

    if (is_post_type('participation') && is_single()) {
        breadcrumb__link( $id_participation , 'Comunidad educativa' );
        breadcrumb__disabled( get_the_title( $id_post ) );
    }

    if (is_post_type('post') && !is_category() && !is_single() ) {
        breadcrumb__link( $id , 'Noticias' );
        breadcrumb__disabled( 'Noticias y actualidad' );
    }

    if (is_post_type('webinar') && !is_single() || is_page( $id_webinar )) {
        breadcrumb__link( $id , 'Noticias' );
        breadcrumb__disabled( 'Charlas DEP' );
    }

    if (is_post_type('library') || is_page( $id_library )) {
        breadcrumb__link( $id , 'Nueva educación pública' );
        breadcrumb__disabled( get_the_title( $id_library ) );
    }

    if (is_post_type('aula') || is_page( $id_aula )) {
        breadcrumb__disabled( get_the_title( $id_aula ) );
    }

    if (is_page( $id_progress )) {
        breadcrumb__link( $id , 'Nueva educación pública' );
        breadcrumb__disabled( get_the_title( $id_progress ) );
    }

    if (is_post_type_url(null) && is_search()) {
        breadcrumb__disabled( 'Resultados de la búsqueda' );
    }

    if (is_page() && !is_page( [$id_webinar, $id_library, $id_progress, $id_aula] )) breadcrumb__disabled( get_the_title() );

    echo '</ul>';
}