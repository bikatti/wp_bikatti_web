<?php 
/* 
 * Webinar posts
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.4
 */ 

?>

<section class="webinar">
    <div class="webinar__container">
        <div class="webinar__content">
            <?php
            if (is_single()) {
                echo '<h3>' . $args['title_query'] . '</h3>';
            }

            echo do_shortcode( '[ajax_load_more post_type="webinar" posts_per_page="' . $args['n_post'] . '" scroll="false" images_loaded="true" button_label="Cargar Más Charlas" button_loading_label="Cargando" button_done_label="Listo"]' );
            ?>
        </div>
    </div>
</section>