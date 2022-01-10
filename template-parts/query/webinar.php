<?php 
/* 
 * News (Search, taxonomies, etc)
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.4
 */

$id_webinar = get_theme_mod( 'dep_id_webinar' );
$id_news = get_theme_mod( 'dep_id_news' );

if (is_post_type_url('webinar')) {
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
            'id' => $id_webinar
        ]
    );

    get_template_part( 
        'template-parts/archive/post/featured-post',
        '',
        $args = [
            'post_type' => 'webinar',
            'byline'  => 'type_webinar',
            'excerpt' => 'date_presentacion',
            'date'    => false,
            'button'  => 'Ver charla'
        ]
    );

    get_template_part( 
        'template-parts/archive/filters',
        '', 
        $args = [
            'search_title' => 'Charlas Anteriores',
            'search' => true,
            'categories' => false,
            'post_type' => 'webinar'
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

                        $image = get_field('logo_ce');
                        $category = get_field('tipo_de_webinar');
                        $the_excerpt = get_field('fecha_de_presentacion');

                        get_template_part( 
                            'template-parts/archive/post/post-template',
                            '',
                            $args = [
                                'image'  => $image,
                                'byline'  => $category,
                                'excerpt' => $the_excerpt,
                                'date'    => false,
                                'button'  => 'Ver charla'
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