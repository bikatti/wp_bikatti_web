<?php 
/* 
 * Curriculum Block 
 * of Front-page
 * 
 * 
 * @package    Bikatti
 * @since      Bikatti 0.0.1
 */

?>

<div class="curriculum">
    <p>Descarga mi</p>
    <button class="btn btn--primary btn--download">
        <a href="<?php echo esc_url( $args['link_curriculum'] ); ?>" download>Curriculum</a>
    </button>
</div>