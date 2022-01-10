<?php 
/* 
 * Library featured documents (posts)
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.4
 */ 

$argumentos = array(
    'post_type'           => 'library',
    'posts_per_page'      => 4,
    'ignore_sticky_posts' => 1,
    'meta_key'            => 'documento_destacado',
    'orderby'             => 'date',
    'order'               => 'DESC',
);

$the_query = new WP_Query($argumentos);
?>

<section class="featured-documents">
    <div class="featured-documents__container">
        <div class="featured-documents__content">
            <h3>Documentos Destacados</h3>
            
            <div class="featured-documents__list">
                <?php
                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post(  );
                            
                            get_template_part( 'template-parts/archive/post/featured-document' );
                        } 
                    } 
                ?>
            </div>
        </div>
    </div>
</section>