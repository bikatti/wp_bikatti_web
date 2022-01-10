<?php 
/* 
 * Aula posts
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.12
 */ 

$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

$argumentos = array(
    'post_type'           => 'aula',
    'posts_per_page'      => 4,
    'ignore_sticky_posts' => 1,
    'orderby'             => 'date',
    'order'               => 'DESC',
    'paged'               => $paged,
);

$the_query = new WP_Query($argumentos);
?>

<section class="aula">
    <div class="aula__container">
        <div class="aula__content">
            <?php
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post(  );

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
                
                get_template_part( 
                    'template-parts/archive/accesories/pagination',
                    '',
                    $args = [
                        'the_query' => $the_query
                    ]
                );
            } 
            ?>
        </div>
    </div>
</section>