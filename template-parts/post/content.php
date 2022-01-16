<?php 
/**
 * Content - Post
 *
 *
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */

?>

<div class="container">
    <div class="wp__content">
        <header class="wp__header">
            <h1><?php the_title( ); ?></h1>
        </header>

        <?php 
        the_content( ); 
        
        if (!is_post_type('participation')) get_template_part( 'template-parts/post/share' ); 
        ?>
    </div>
</div>