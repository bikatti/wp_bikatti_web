<?php 
/**
 * The post
 *
 *
 * @package    DEP
 * @since      DEP 0.1.0
 */

$id_news = get_theme_mod( 'dep_id_news' );

get_header();
?>

<main class="post 
    <?php 
    if (is_post_type('webinar')) echo 'post--webinar';
    if (is_post_type('participation')) echo 'post--participation';
    ?>
">

<?php
    if (have_posts()) {
        while(have_posts()) {
            the_post(  );

            $id_post = get_the_ID(  );
            ?>
            <article class="page__container">
                <div class="page__content">
                    <?php 
                    get_template_part( 
                        'template-parts/archive/breadcrumbs',
                        '',
                        $args = [
                            'id' => $id_news,
                            'id_post' => $id_post
                        ]
                    ); 

                    get_template_part( 'template-parts/post/header-post' ); 
                    get_template_part( 'template-parts/post/content' );

                    if (is_post_type('webinar')) {
                        get_template_part( 
                            'template-parts/archive/webinar',
                            '', 
                            $args = [
                                'n_post' => '3',
                                'title_query' => 'Otras Charlas'
                            ]
                        );
                    }

                    if (!is_post_type('participation')) get_template_part( 'template-parts/post/news-related' ); 
                    ?>
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