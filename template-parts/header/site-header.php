<?php 
/**
 * Header Nav
 *
 *
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */

$blog_info      = get_bloginfo( 'name' );
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image          = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>

<header class="header">
    <div class="header__container">
        <div class="header__menu">
            <a href="<?php echo esc_url( home_url( ) ); ?>" class="header__logo">
                <img src="<?php esc_attr_e( $image[0] ); ?>" alt="logotipo de <?php echo esc_attr( $blog_info ); ?>">
            </a><!-- .header__logo -->
    
            <nav class="header__navbar">
                <?php 
                wp_nav_menu(
                    array(
                        'theme_location'  => 'header_menu',
                        'menu_class'      => 'header__nav',
                        'container'       => 'ul'
                    )
                ); 
                ?>
                <button class="btn--outline" data-micromodal-trigger="contact">
                    <span>Contactar</span>
                </button>
            </nav>
        </div><!-- .header__container -->
    </div>
</header><!-- .header -->