<?php 
/* 
 * Post (Related)
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.7
 */ 

?>


<article class="card card--related">
    <a href="<?php echo esc_url( the_permalink( ) ); ?>" class="card__wrap">
        <figure class="card__img">
            <div class="crop"><?php the_post_thumbnail( 'full' ); ?></div>
        </figure>

        <header class="card__header">
            <div class="card__top">
                <span class="card__byline byline">
                    <?php post_category( ); ?>
                </span>
                <h5><?php esc_html_e( get_the_title( ) ); ?></h5>
            </div>

            <div class="card__footer">
                <button class="btn btn--outline">
                    <span>Ver noticia</span>
                </button>
            </div>
        </header>
    </a>
</article>