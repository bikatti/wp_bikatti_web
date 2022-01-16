<?php 
/* 
 * Portafolio Block 
 * of Front-page
 * 
 * 
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */

$argumentos = array(
    'post_type'           => 'project',
    'posts_per_page'      => -1,
);

$the_query = new WP_Query($argumentos);
?>

<section class="portafolio-github__carousel">
    <div class="splide splide--portafolio-github">
        <div class="splide__track">
            <ul class="splide__list">

                <?php
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post(  );

                        $url = get_field('url_github');
                        $date = get_field('fecha_github');
                        $type_card = get_field('tipo_de_carta');
                        ?>
                        <li class="splide__slide">
                            <div class="portafolio-github__item <?php esc_attr_e( $type_card ); ?>">
                                <a href="<?php echo esc_url( $url ); ?>">
                                    <div class="bg-gradient"></div>
                                    <figure>
                                       <?php the_post_thumbnail( 'full' ); ?>
                                    </figure>
                                    <div class="portafolio-github__body">
                                        <span class="portafolio-github__date">
                                            <?php esc_html_e( $date ); ?>
                                        </span>
                                        <h3><?php the_title( ); ?></h3>
                                    </div>
                                </a>
                            </div>
                        </li>
                    <?php
                    } 
                } ?>

            </ul>
        </div>
        <?php
        //get_template_part( 'template-parts/front-page/arrow' );
        ?>
    </div>
</section>