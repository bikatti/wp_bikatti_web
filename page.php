<?php 
/**
 * Default View of Page
 *
 *
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */

get_header();
?>

<main class="page">
    <?php
    if (have_posts()) {
        while(have_posts()) {
            the_post(  );
            ?>
            <article class="page__container">
                <div class="page__content">
                    <?php 
                    get_template_part( 'template-parts/post/header' ); 
                    ?>
                    <div class="wp__content"><?php the_content( ); ?></div>
                </div>
            </article>
            <?php
        }
    } else {
        echo "<p>Esta página no tiene contenido</p>";
    }
    ?>
</main>

<?php
get_footer();