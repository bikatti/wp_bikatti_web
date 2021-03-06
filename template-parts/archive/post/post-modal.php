<?php 
/* 
 * Post (Modal)
 * 
 * 
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */

$tax = $args['type_categories'];

$terms = get_terms(
    $tax,
    [
        'hide_empty' => false,  
        'orderby'    => 'name',
        'order'      => 'ASC' 
    ]
);
?>

<div class="modal micromodal-slide" id="aula<?php esc_attr_e( the_ID(  ) ); ?>" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-aula<?php esc_attr_e( the_ID(  ) ); ?>-title">
            <div class="modal__content">
                <header class="modal__header">
                    <?php if (!empty($tax)) { ?>
                    <span class="modal__byline byline">
                        <?php
                        foreach($terms as $term) {
                            if(!$term->parent && $term->term_id > 1) {
                                esc_html_e( $term->name );
                            }
                        }
                        ?>
                    </span>
                    <?php } ?>
                    <h2 class="modal__title" id="modal-aula<?php esc_attr_e( the_ID(  ) ); ?>-title">
                        <?php echo ($args['title']) ? $args['title'] : the_title( ); ?>
                    </h2>

                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__text" id="modal-aula<?php esc_attr_e( the_ID(  ) ); ?>-content">
                    <div class="wp-block-embed__wrapper">
                        <?php echo ($args['video']) ? $args['video'] : the_post_thumbnail( 'full' ); ?>
                    </div>
                </main>

                <?php
                if ( empty( $btn ) ) { 
                    get_template_part( 'template-parts/post/share' ); 
                } else {
                    ?>
                    <div class="modal__bottom">
                        <button class="btn btn--outline">
                            <a href="<?php echo esc_url( $btn_url ); ?>" download><?php esc_html_e( $btn_text );?></a>
                        </button>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>