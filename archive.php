<?php 
/* 
 * Archive
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.4
 */ 

get_header( );
?>

<main class="page archive">
    <?php        
    if (have_posts()) {
        get_template_part( 'template-parts/query/search');

        get_template_part( 'template-parts/query/library');

        get_template_part( 'template-parts/query/news');

        get_template_part( 'template-parts/query/webinar');

        get_template_part( 'template-parts/query/aula');
    } else {
        get_template_part( 'template-parts/query/search');
        
        get_template_part( 'template-parts/query/library');

        get_template_part( 'template-parts/query/news');

        get_template_part( 'template-parts/query/webinar');

        get_template_part( 'template-parts/query/aula');
    }
    ?>
</main>

<?php 
get_footer( );