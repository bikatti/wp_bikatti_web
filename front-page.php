<?php 
/**
 * Front-page
 *
 *
 * @package    DEP
 * @since      DEP 0.1.0
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