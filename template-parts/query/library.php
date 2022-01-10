<?php 
/* 
 * Library (Search, taxonomies, etc)
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.4
 */

$id_library = get_theme_mod( 'dep_id_library' );


if (is_post_type_url('library')) {
    get_template_part( 
        'template-parts/archive/breadcrumbs',
        '',
        $args = [
            'id' => $id_library
        ]
    );
    
    get_template_part( 
        'template-parts/post/header',
        '',
        $args = [
            'id' => $id_library
        ]
    );

    echo do_shortcode( '[documentos-destacados]' );

    get_template_part( 
        'template-parts/archive/filters',
        '', 
        $args = [
            'search_title' => 'Buscar documentos',
            'search' => true,
            'categories' => true,
            'type_categories' => 'library_categories',
            'topics' => true,
            'post_type' => 'library'
        ]
    );

    ?>
    <section class="library">
        <div class="library__container">
            <div class="library__content">
            <?php
                if (have_posts(  )) {
                    while(have_posts()) {
                        the_post(  );
                        get_template_part( 'template-parts/archive/post/document' );
                    }
                    
                    get_template_part( 'template-parts/archive/accesories/pagination' );
                } else {
                    echo '<div class="query-error">';
                    echo '<span>No se encontraron resultados</span>';
                    echo '<span>Intenta usar otras palabras o buscar en temas o categorías distintas</span>';
                    echo '</div>';
                }
            ?>
            </div>
        </div>
    </section>
    <?php
    }
?>