<?php 
/* 
 * Filters
 * 
 * 
 * @package    DEP
 * @since      DEP 0.2.4
 */ 

$title = $args['search_title'];
$search = $args['search'];
$categories = $args['categories'];
$topics = $args['topics'];
$class_filter = $args['class_filter'];
?>


<div class="filters__container">
    <nav class="filters <?php if($class_filter) echo $class_filter; ?> <?php echo ($search && $categories && $topics) ? 'all-filters' : 'two-filters';?> <?php if (!$categories && !$topics) echo 'one-filter';?>">
        <span class="filters__title"><?php esc_html_e( $title ) ?></span>
        
        <?php if ($search) { ?>
            <div class="filters__list">
                <?php if ($topics) get_template_part( 'template-parts/archive/filter-topics', '', $args ); ?>
                
                <?php if ($categories) get_template_part( 'template-parts/archive/filter-categories', '', $args ); ?>
                
                <?php get_template_part( 'searchform', '', $args ); ?>
            </div>
        <?php } ?>
    </nav>
</div>