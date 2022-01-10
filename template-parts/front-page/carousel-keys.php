<?php 
/* 
 * Carousel Keys Block 
 * of Front-page
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.13
 */

$title_1 = get_theme_mod( 'dep_carousel_keys_title_1' );
$text_1 = get_theme_mod( 'dep_carousel_keys_text_1' );
$img_1 =  get_theme_mod( 'dep_carousel_keys_img_1' );

$title_2 = get_theme_mod( 'dep_carousel_keys_title_2' );
$text_2 = get_theme_mod( 'dep_carousel_keys_text_2' );
$img_2 = get_theme_mod( 'dep_carousel_keys_img_2' );

?>

<section class="carousel-keys__carousel">
    <div class="splide splide--carousel-keys">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="carousel-keys__item">
                        <figure>
                            <img src="<?php echo esc_url( $img_1 ); ?>" alt="">
                        </figure>
                        <div class="carousel-keys__body">
                            <h3><?php esc_html_e( $title_1 ); ?></h3>
                            <p><?php esc_html_e( $text_1 ); ?></p>
                        </div>
                    </div>
                </li>

                <li class="splide__slide">
                    <div class="carousel-keys__item">
                        <figure>
                            <img src="<?php echo esc_url( $img_2 ); ?>" alt="">
                        </figure>
                        <div class="carousel-keys__body">
                            <h3><?php esc_html_e( $title_2 ); ?></h3>
                            <p><?php esc_html_e( $text_2 ); ?></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <?php get_template_part( 'template-parts/front-page/arrow' ); ?>
    </div>
</section>