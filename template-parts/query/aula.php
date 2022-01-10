<?php 
/* 
 * News (Search, taxonomies, etc)
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.4
 */

$id_aula = get_theme_mod( 'dep_id_virtual_room' );

if (is_post_type_url('aula')) {
    get_template_part( 
        'template-parts/archive/breadcrumbs',
        '',
        $args = [
            'id' => $id_aula
        ]
    ); 
    
    get_template_part( 
        'template-parts/post/header',
        '',
        $args = [
            'id' => $id_aula
        ]
    );

    get_template_part( 
        'template-parts/archive/filters',
        '', 
        $args = [
            'search_title' => 'Videos pedagógicos',
            'search' => true,
            'categories' => true,
            'type_categories' => 'aula_categories',
            'post_type' => 'aula',
            'class_filter' => 'aula'
        ]
    );

    ?>
    <section class="aula">
        <div class="aula__container">
            <div class="aula__content">
            <?php
                if (have_posts(  )) {
                    while(have_posts()) {
                        the_post(  );

                        $video = get_field('url_video_aula');

                        get_template_part( 'template-parts/archive/post/post-aula' );

                        get_template_part( 
                            'template-parts/archive/post/post-modal',
                            '',
                            $args = [
                                'type_categories' => 'aula_categories',
                                'video' => $video
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