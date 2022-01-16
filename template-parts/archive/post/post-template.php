<?php 
/* 
 * Post (Default)
 * 
 * 
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */ 

$image = $args['image'];

?>


<article class="card card--post">
    <a href="<?php echo esc_url( the_permalink( ) ); ?>" class="card__wrap">
        <figure class="card__img">
            <div class="crop">
                <?php 
                if ($image) {
                    echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '">';
                } else {
                    the_post_thumbnail( 'full' );
                }
                ?>
            </div>
        </figure>

        <header class="card__header">
            <div class="card__top">
                <span class="card__byline byline">
                    <?php 
                        if ($args['byline'] == 'category') {
                            post_category( );
                        } else {
                            esc_attr_e( $args['byline'] ); 
                        }
                    ?>
                </span>
                <h4><?php esc_html_e( get_the_title( ) ); ?></h4>
                <div class="card__content">
                    <?php esc_html_e( $args['excerpt'] ); ?>
                </div>
            </div>

            <div class="card__footer">
                <button class="btn btn--outline">
                    <span><?php esc_html_e( $args['button'] ); ?></span>
                </button>

                <?php if ($args['date']) { ?>
                    <div class="card__date">
                        <span><?php esc_html_e( get_the_date( 'F, Y' ) ); ?></span>
                    </div>
                <?php } ?>
            </div>
        </header>
    </a>
</article>