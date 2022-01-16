<?php 
/**
 * Front-page
 *
 *
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */


get_header();
?>

<main class="front-page">
    <?php
    if (have_posts()) {
        while(have_posts()) {
            the_post(  );
            the_content( );
        }
    } else {
        echo "<p>Esta página no tiene contenido</p>";
    }
    ?>
</main>

<?php
get_footer();