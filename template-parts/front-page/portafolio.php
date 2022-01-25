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

<section class="portafolio__carousel">
    <div class="splide splide--portafolio">
        <?php get_template_part(  'template-parts/front-page/arrow' ); ?>

        <div class="splide__track">
            <ul class="splide__list">

                <?php
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post(  );
                        ?>
                        <li class="splide__slide">
                            <?php get_template_part(  'template-parts/archive/post/post-portafolio' ); ?>
                        </li>
                    <?php
                    } 
                } ?>

            </ul>
        </div>
    </div>

    <div class="portafolio__modals">
        <?php
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post(  );

                $protocol = get_field('protocolo');
                $web = get_field('sitio_web');

                // get_template_part( 
                //     'template-parts/archive/post/post-modal',
                //     '',
                //     $args = [
                //         'protocol' => $protocol,
                //         'web' => $web
                //     ]
                // );
            } 
        } 
        ?>
    </div>
</section>