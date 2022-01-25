<?php 
/* 
 * Post (Portafolio - Column direction)
 * 
 * 
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */ 

$topics = get_the_terms(
    get_the_ID(  ),
    'topics'
);

$tecnologias = get_the_terms(
    get_the_ID(  ),
    'tech'
);

$protocol = get_field('protocolo');
$web = get_field('sitio_web');
?>

<article class="card card--portafolio">
    <a href="<?php echo esc_url( $protocol . $web ); ?>" class="card__wrap" target="_blank">
    <!-- <div data-micromodal-trigger="aula<?php esc_attr_e( the_ID(  ) ); ?>" class="card__wrap"> -->
        <figure class="card__img">
            <div class="crop">
                <?php the_post_thumbnail( 'full' ); ?>
            </div>

            <div class="card__tag">
            <?php
            foreach($topics as $term) {
                if(!$term->parent && $term->term_id > 1) {
                    $color = get_field('color', $term->term_id );
                    ?>
                    <span class="badge purple"><?php esc_html_e( $term->name ); ?></span>
                    <?php
                }
            }
            ?>
            </div>
        </figure>

        <header class="card__header">
            <div class="card__top">
                <h4><?php esc_html_e( get_the_title( ) ); ?></h4>
                <span class="card__link">
                    <?php esc_html_e( $web ); ?>
                </span>
                <div class="card__content">
                    <?php the_excerpt(  ); ?>
                </div>
            </div>


            <div class="card__bottom">
                <ul>
                <?php
                foreach($tecnologias as $term) {
                    if(!$term->parent && $term->term_id > 1) {
                        $color = get_field('color', $term->term_id );
                        ?>
                        <li><span class="badge <?php esc_attr_e( $color ); ?>"><?php esc_html_e( $term->name ); ?></span></li>
                        <?php
                    }
                }
                ?>
                </ul>
            </div>
        </header>
    <!-- </div> -->
    </a>
</article>