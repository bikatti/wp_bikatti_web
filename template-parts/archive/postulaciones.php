<?php 
/**
 * Postulation
 *
 * @package    DEP
 * @since      DEP 0.2.3
 */


$argumentos = array(
    'post_type'           => 'applications',
    'posts_per_page'      => -1,
    'ignore_sticky_posts' => 1,
    'orderby'             => 'date',
    'order'               => 'DESC',
);

$the_query = new WP_Query($argumentos);
?>

<section class="applications">
    <div class="applications__container">
        <div class="applications__content">
            <?php
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post(  );

                        $type = get_field('tipo_de_tramite');
                        $link = get_field('link_tramite');
                        ?>
                            <article class="card card--application">
                                <a href="<?php echo esc_url( $link ); ?>" class="card__wrap">
                                    <figure class="card__img">
                                        <div class="crop"><?php the_post_thumbnail( 'full' ); ?></div>
                                    </figure>

                                    <header class="card__header">
                                        <span class="card__byline byline"><?php esc_html_e( $type ); ?></span>
                                        <h4><?php esc_html_e( get_the_title( ) ); ?></h4>
                                        <div class="card__content">
                                            <?php the_content( ); ?>
                                        </div>
                                        <button class="btn btn--outline">
                                            <span>Ir al trámite</span>
                                        </button>
                                    </header>
                                </a>
                            </article>

                        <?php
                    } 
                } 
            ?>
        </div>
    </div>
</section>