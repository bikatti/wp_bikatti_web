<?php 
/* 
 * Post (SLEP)
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.14
 */ 

$url_slep = get_field('link_slep');
$region_slep = get_field( 'region_slep' );
?>


<article class="card card--slep">
    <a href="<?php echo esc_url( $url_slep ); ?>" class="card__wrap">
        <figure class="card__line">
            <div class="color-line"></div>
        </figure>

        <header class="card__header">
            <div class="card__top">
                <h4><?php esc_html_e( get_the_title( ) ); ?></h4>            
                <span class="card__byline byline">
                    <?php esc_html_e( $region_slep ); ?>
                </span>
            </div>

            <div class="card__bottom">
                <span class="card__more">
                    Visitar
                </span>
            </div>
        </header>
    </a>
</article>