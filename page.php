<?php 
/**
 * Default View of Page
 *
 *
 * @package    DEP
 * @since      DEP 0.1.0
 */

if (is_page( 'charlas' )) {
    $id_news = get_theme_mod( 'dep_id_news' );
}

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
                    get_template_part( 
                        'template-parts/archive/breadcrumbs',
                        '',
                        $args = [
                            'id' => $id_news
                        ]
                    ); 

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