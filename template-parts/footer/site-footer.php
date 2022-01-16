<?php 
/**
 * The Footer Nav
 *
 *
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */

$custom_logo_id = get_theme_mod( 'custom_logo' );
$image          = wp_get_attachment_image_src( $custom_logo_id , 'full' );

$name = get_bloginfo('name');
$year = date('Y');

?>


<footer class="footer">
    <div class="footer__container">
        <div class="footer__content">
            <div class="footer__column footer--logo">
                <img src="<?php esc_attr_e( $image[0] ); ?>" alt="logotipo de <?php echo esc_attr( $name ); ?>">
            </div>

            <div class="footer__column footer--contact">
                <button class="btn--transparent" data-micromodal-trigger="contact">
                    <span>Contactar</span>
                </button>
            </div>

            <div class="footer__column footer--nav">
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'footer',
                        'menu_class'      => 'footer__list',
                        'container'       => 'ul',
                        )
                ); ?>
            </div>

            <div class="footer__column footer--copy">
                <span>Hecho con ❤ por Bikatti</span>
            </div>
        </div>
    </div>
</footer>