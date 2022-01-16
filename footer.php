<?php 
/**
 * The template for displaying the footer
 *
 *
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */

/**
 * Burger menu is disabled by default, but it is activated
 * by an addEventListener of a javascript function
 */
get_template_part( 'template-parts/header/burguer' ); 


/**
 * Search Modal
 */
get_template_part( 'template-parts/header/search' );

/**
 * The Footer
 */
get_template_part( 'template-parts/footer/site-footer' );

wp_footer(  ); 

?>
    </body>
</html>