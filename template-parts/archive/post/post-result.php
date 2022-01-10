<?php 
/* 
 * Post (Result of search)
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.14
 */ 

$category_webinar = get_field('tipo_de_webinar');
?>


<article class="card card--result">
    <a href="<?php echo esc_url( the_permalink( ) ); ?>" class="card__wrap">

        <header class="card__header">
            <div class="card__top">
                <span class="card__byline byline">
                    <?php 
                    if (is_post_type('post')) post_category( ); 
                    if (is_post_type('webinar')) echo $category_webinar; 
                    if (is_post_type('participation')) echo 'Participación'; 
                    if (is_post_type('page')) echo 'Página informativa'; 
                    ?>
                </span>
                <h3><?php esc_html_e( get_the_title( ) ); ?></h3>
                <div class="card__content">
                    <?php the_excerpt(  ); ?>
                </div>
            </div>
        </header>

    </a>
</article>