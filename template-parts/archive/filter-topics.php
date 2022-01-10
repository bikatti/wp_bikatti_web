<?php 
/* 
 * Filter 'Categories'
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.4
 */ 

$tax = 'topics';

$terms = get_terms(
    $tax,
    [
        'hide_empty' => false,  
        'orderby'    => 'name',
        'order'      => 'ASC' 
    ]
);

?>


<div class="filter__dropdown filter--topics">
    <div class="button btn--dropdown dropdown"><span>Temas</span></div>
    <ul class="filter__content dropmenu_list">
        <?php
            foreach($terms as $term) {
                if(!$term->parent && $term->term_id > 1) {
                    ?>
                    <li class="filter__item">
                        <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">
                            <?php esc_html_e( $term->name ); ?>
                        </a>
                    </li>
                    <?php
                }
            }
        ?>
    </ul>
</div>