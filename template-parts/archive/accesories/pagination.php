<?php 
/* 
 * Pagination
 * 
 * 
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */ 
?>


<div class="posts__pagination">
    <div class="posts__buttons">
        <?php 

        if (!empty( $args['the_query'] )) {
            echo paginate_links( [
                'total'        => $args['the_query']->max_num_pages,
                'current'      => max( 1, get_query_var( 'paged' ) ),
                'prev_text'    => '',
                'next_text'    => '',
            ] );
        } 
        
        if (empty( $args['the_query'] )) {
            echo paginate_links( [
                'prev_text'    => '',
                'next_text'    => '',
            ] );
        }
        ?>
    </div><!-- .posts__buttons -->
</div><!-- .posts__pagination -->