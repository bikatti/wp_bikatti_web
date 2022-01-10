<?php 
/* 
 * News (Search, taxonomies, etc)
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.4
 */

$id_news = get_theme_mod( 'dep_id_news' );
$url_page =  get_page_uri( $id_news );

if (is_post_type_url('post') || is_url( $url_page ) || is_category()) {
    get_template_part( 
        'template-parts/archive/breadcrumbs',
        '',
        $args = [
            'id' => $id_news
        ]
    ); 

    get_template_part( 
        'template-parts/post/header',
        '',
        $args = [
            'id' => $id_news
        ]
    );

    get_template_part( 
        'template-parts/archive/post/featured-post',
        '',
        $args = [
            'post_type' => 'post',
            'byline'  => 'category',
            'excerpt' => 'excerpt',
            'date'    => true,
            'button'  => 'Ver noticia'
        ]
    );

    get_template_part( 
        'template-parts/archive/filters',
        '', 
        $args = [
            'search_title' => 'Buscar noticias',
            'search' => true,
            'categories' => true,
            'type_categories' => 'category',
            'post_type' => 'post'
        ]
    );

    ?>
    <section class="news">
        <div class="news__container">
            <div class="news__content">
            <?php
                if (have_posts(  )) {
                    while(have_posts()) {
                        the_post(  );

                        $category = 'category';
                        $the_excerpt = get_the_excerpt( );

                        get_template_part( 
                            'template-parts/archive/post/post-template',
                            '',
                            $args = [
                                'byline'  => $category,
                                'excerpt' => $the_excerpt,
                                'date'    => true,
                                'button'  => 'Ver noticia'
                            ]
                        );
                    }
                    
                    get_template_part( 'template-parts/archive/accesories/pagination' );
                } else {
                    echo '<div class="query-error">';
                    echo '<span>No se encontraron resultados</span>';
                    echo '<span>Intenta usar otras palabras o categorías distintas</span>';
                    echo '</div>';
                }
            ?>
            </div>
        </div>
    </section>
    <?php
    }
?>