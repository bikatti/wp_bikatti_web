<?php 
/* 
 * Post (Avance)
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.6
 */

?>

<article class="progress-card__article">
    <details class="progress-card" id="progress-card--<?php esc_attr_e( $args['number'] ); ?>">

        <summary class="progress-card__title">
            <span><?php esc_html_e( get_the_title( ) ); ?></span>
        </summary>
    
        <div class="progress-card__content">
            <?php 
            if (!empty( $args['content'] )) {
                ?>
                <div class="progress-card__texts">
                    <?php esc_html_e( $args['content'] ); ?>
                </div>
                <?php
            }
            ?>

            <figure class="progress-card__img">
                <div class="crop"><?php the_post_thumbnail( 'full' ); ?></div>
            </figure>
        </div>

    </details>
</article>