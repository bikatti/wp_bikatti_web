<?php 
/* 
 * Blog (Search, taxonomies, etc)
 * 
 * 
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */




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