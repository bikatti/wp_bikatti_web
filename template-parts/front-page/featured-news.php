<?php 
/* 
 * Featured News Block 
 * of Front-page
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.12
 */


$argumentos = array(
    'post_type'           => 'post',
    'posts_per_page'      => 4,
    'ignore_sticky_posts' => 1,
    'meta_key'            => 'fijar_post',
    'orderby'             => 'date',
    'order'               => 'DESC',
);

$the_query = new WP_Query($argumentos);
?>

<section class="featured-news">
    <div class="featured-news__container">
        <div class="featured-news__content">
            <h3>Noticias Destacadas</h3>

            <div class="splide splide--featured">
                <div class="splide__track">
                    <ul class="splide__list">
                    <?php
                        if ($the_query->have_posts()) {
                            while ($the_query->have_posts()) {
                                $the_query->the_post(  );
                                ?>
                                <li class="splide__slide">
                                    <?php get_template_part( 'template-parts/archive/post/post-featured' ); ?>
                                </li>
                                <?php
                            } 
                        } 
                    ?>
                    </ul>
                </div>

                <?php get_template_part( 'template-parts/front-page/arrow' ); ?>
            </div>
        </div>
    </div>
</section>