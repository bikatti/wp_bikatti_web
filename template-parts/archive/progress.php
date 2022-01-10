<?php 
/**
 * Progress
 *
 * @package    DEP
 * @since      DEP 0.2.6
 */


$argumentos = array(
    'post_type'           => 'avance',
    'posts_per_page'      => -1,
    'ignore_sticky_posts' => 1,
    'orderby'             => 'date',
    'order'               => 'DESC',
);

$the_query = new WP_Query($argumentos);
?>

<section class="progress">
    <div class="progress__container">
        <div class="progress__content">
            <?php
            $progress = 0;

            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post(  );

                    $content = get_field('texto_avance');
                    
                    get_template_part( 
                        'template-parts/archive/post/post-progress',
                        '',
                        $args = [
                            'content'  => $content,
                            'number'   => $progress
                        ]
                    );

                    $progress++;
                }
            } 
            ?>
        </div>
    </div>
</section>