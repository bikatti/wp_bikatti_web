<?php 
/* 
 * featured post (posts)
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.4
 */ 


$post_type = $args['post_type'];

$argumentos = array(
    'post_type'           => $post_type,
    'meta_key'            => 'fijar_post',
    'posts_per_page'      => 1,
    'orderby'             => 'date',
    'order'               => 'DESC',
);

$the_query = new WP_Query($argumentos);



if ($the_query->have_posts()) {
    ?>
    <section class="featured-post">
        <div class="featured-post__container">
            <div class="featured-post__content">
                
                <?php
                while ($the_query->have_posts()) {
                    $the_query->the_post(  );
                    
                    $category = $args['byline'];
                    $the_excerpt = ($args['excerpt'] == 'excerpt') ? get_the_excerpt( ) : get_field('fecha_de_presentacion', get_the_ID(  ));

                    $type_webinar = get_field('tipo_de_webinar', get_the_ID(  )); 
                ?>
                        
                <article class="card card--post card--featured-post">
                    <a href="<?php echo esc_url( the_permalink( ) ); ?>" class="card__wrap">
                        <figure class="card__img">
                            <div class="crop"><?php the_post_thumbnail( 'full' ); ?></div>
                        </figure>

                        <header class="card__header">
                            <div class="card__top">
                                <span class="card__byline byline">
                                    <?php 
                                        if ($category == 'category') {
                                            post_category( );
                                        } else {
                                            esc_attr_e( $type_webinar ); 
                                        }
                                    ?>
                                </span>
                                <h3><?php esc_html_e( get_the_title( ) ); ?></h3>
                                <div class="card__content">
                                    <?php esc_html_e( $the_excerpt ); ?>
                                </div>
                            </div>

                            <div class="card__footer">
                                <button class="btn btn--lightin">
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

                <?php } ?>
                </div>
            </div>
        </section>
<?php } ?>