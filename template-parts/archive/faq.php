<?php 
/**
 * FAQ
 *
 * @package    DEP
 * @since      DEP 0.1.0
 */

$argumentos = array(
    'post_type' => 'ask',
    'posts_per_page' => -1,
    'orderby'   => 'date',
    'order'     => 'ASC',
);

$the_query = new WP_Query($argumentos);
?>


<div class="dropdown">
    <div class="dropdown__container">
        <div class="dropdown__content">
            <?php
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post(  );
                    ?>
                    <details class="faq">
                        <summary class="faq__title"><?php esc_html_e( get_the_title( ) ); ?></summary>
                        <div class="faq__description">

                            <?php 
                            if (!has_excerpt( )) {
                                esc_html_e( 'No hay respuesta todavía.' );
                            } else {
                                the_excerpt(  );
                            }
                            ?>
                        </div>
                    </details>
                    <?php
                    }
                } 
            ?>
        </div>
    </div>
</div>