<?php 
/* 
 * Participation posts
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.6
 */ 


$argumentos = array(
    'post_type'           => 'participation',
    'posts_per_page'      => -1,
    'ignore_sticky_posts' => 1,
    'orderby'             => 'date',
    'order'               => 'DESC',
);

$the_query = new WP_Query($argumentos);
?>

<section class="participation">
    <div class="participation__container">
        <div class="participation__content">
            <?php
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post(  );

                        $color_card = get_field('color_card');
                        
                        get_template_part( 
                            'template-parts/archive/post/post-participation',
                            '',
                            $args = [
                                'color'  => $color_card,
                                'button'  => 'Ver más'
                            ]
                        );
                    }
                } 
            ?>
        </div>
    </div>
</section>