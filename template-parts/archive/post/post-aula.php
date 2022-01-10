<?php 
/* 
 * Post (Aula)
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.12
 */ 

$video = get_field('url_video_aula');
$categories = get_the_terms( get_the_ID(  ), 'aula_categories' );
?>

<article class="card card--post card--aula">
    <div data-micromodal-trigger="aula<?php esc_attr_e( the_ID(  ) ); ?>" class="card__wrap">
        <figure class="card__img">
            <div class="crop">
                <?php the_post_thumbnail( 'full' ); ?>
            </div>
        </figure>

        <header class="card__header">
            <span class="card__byline byline">
                <?php 
                foreach ($categories as $category) {
                    esc_html_e( $category->name );
                }
                ?>
            </span>
            <h3><?php esc_html_e( get_the_title( ) ); ?></h3>
            <div class="card__content">
                <?php the_excerpt(  ); ?>
            </div>
        </header>
    </div>
</article>