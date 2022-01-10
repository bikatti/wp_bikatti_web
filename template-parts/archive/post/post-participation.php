<?php 
/* 
 * Post (Participacion)
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.6
 */

?>


<article class="card card--post card--participation color--<?php esc_attr_e( $args['color'] ); ?>">
    <a href="<?php echo esc_url( the_permalink( ) ); ?>" class="card__wrap">
        <figure class="card__img">
            <div class="crop"><?php the_post_thumbnail( 'full' ); ?></div>
        </figure>

        <header class="card__header">
            <h3><?php esc_html_e( get_the_title( ) ); ?></h3>
            <div class="card__content">
                <?php the_excerpt(  ); ?>
            </div>

            <button class="btn btn--lightin">
                <span><?php esc_html_e( $args['button'] ); ?></span>
            </button>

        </header>
    </a>
</article>