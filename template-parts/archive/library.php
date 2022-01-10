<?php 
/* 
 * Library posts
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.4
 */ 

$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

$argumentos = array(
    'post_type'           => 'library',
    'posts_per_page'      => 6,
    'ignore_sticky_posts' => 1,
    'orderby'             => 'date',
    'order'               => 'DESC',
    'paged'               => $paged,
);

$the_query = new WP_Query($argumentos);
?>

<section class="library">
    <div class="library__container">
        <div class="library__content">
            <?php
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post(  );
                    
                    get_template_part( 'template-parts/archive/post/document' );
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