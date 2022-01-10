<?php 
/* 
 * Search Query Page
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.14
 */


if (is_post_type_url(null) && is_search()) {
    get_template_part( 'template-parts/archive/breadcrumbs' ); 

    ?>
    <section class="search-form__container">
        <h4>Resultados para tu búsqueda:</h4>
        <?php
        get_template_part( 
            'searchform', 
            '', 
            $args = [
                'input_btn' => true
            ]
        ); 
        ?>
    </section>

    <section class="search-page">
        <div class="search-page__container">
            <div class="search-page__content">
            <?php
                if (have_posts(  )) {
                    while(have_posts()) {
                        the_post(  );

                        get_template_part( 'template-parts/archive/post/post-result' );
                    }
                    
                    get_template_part( 'template-parts/archive/accesories/pagination' );
                } else {
                    echo '<div class="query-error">';
                    echo '<span>No se encontraron resultados</span>';
                    echo '<span>Intenta usar otras palabras o categorías distintas</span>';
                    echo '</div>';
                }
            ?>
            </div>
        </div>
    </section>
    <?php
    }
?>