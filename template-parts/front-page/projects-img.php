<?php 
/**
 * Projects IMG on Front-Page
 * 
 *
 * @package    Bikatti
 * @since      Bikatti 0.0.3
 */

$projects_img = [
    '1' => get_theme_mod( 'dep_hero_img_1' ),
    '2' => get_theme_mod( 'dep_hero_img_2' ),
    '3' => get_theme_mod( 'dep_hero_img_3' )
];

?>

<div class="projects-img">
    <div class="project-img project-img-1" style="background-image: url('<?php esc_html_e( $projects_img['1'] ); ?>');"></div>
    <div class="project-img project-img-2" style="background-image: url('<?php esc_html_e( $projects_img['2'] ); ?>');"></div>
    <div class="project-img project-img-3" style="background-image: url('<?php esc_html_e( $projects_img['3'] ); ?>');"></div>
</div>