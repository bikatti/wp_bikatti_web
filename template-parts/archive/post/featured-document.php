<?php 
/* 
 * featured Document Format Post
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.4
 */ 

$download_link = get_field('documento_download');
$categories = get_the_terms( get_the_ID(  ), 'library_categories' );
?>

<article class="card card--featured-document">
    <div class="card__wrap">
        <figure class="card__img">
            <div class="crop"><?php the_post_thumbnail( 'full' ); ?></div>
        </figure>

        <header class="card__header">
            <span class="card__byline byline">
                <?php 
                foreach ($categories as $category) {
                    esc_html_e( $category->name );
                }
                ?>
            </span>
            <h4><?php esc_html_e( get_the_title( ) ); ?></h4>
            <button class="btn btn--without btn--arrow">
                <a href="<?php echo esc_url( $download_link ); ?>" download>Descargar</a>
            </button>
        </header>
    </div>
</article>