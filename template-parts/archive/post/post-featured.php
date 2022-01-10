<?php 
/* 
 * Post (Featured News)
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.12
 */ 

?>

<article class="card card--featured ">
    <a href="<?php echo esc_url( the_permalink( ) ); ?>" class="card__wrap">
        <figure class="card__img">
            <div class="crop">
                <?php the_post_thumbnail( 'full' ); ?>
            </div>
        </figure>

        <header class="card__header">
            <div class="card__top">
                <span class="card__byline byline">
                    <?php post_category( ); ?>
                </span>
                <h4><?php esc_html_e( get_the_title( ) ); ?></h4>
                <div class="card__content">
                    <?php the_excerpt(  ); ?>
                </div>
            </div>

            <div class="card__footer">
                <button class="btn btn--outline">
                    <span>Ver más</span>
                </button>
            </div>
        </header>
    </a>
</article>