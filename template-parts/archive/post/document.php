<?php 
/* 
 * Document Format Post
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.4
 */ 

$download_link = get_field('documento_download');
$categories = get_the_terms( get_the_ID(  ), 'library_categories' );
$color_category = get_field('color_card', $categories[0] );
?>


<article class="card card--document color-line--<?php esc_attr_e( $color_category ); ?>">
    <div class="card__wrap">
        <figure class="card__line">
            <div class="color-line"></div>
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
            <div class="card__content">
                <?php the_excerpt(  ); ?>
            </div>
            <button class="btn btn--without btn--arrow">
                <a href="<?php echo esc_url( $download_link ); ?>" download>Descargar</a>
            </button>
        </header>
    </div>
</article>