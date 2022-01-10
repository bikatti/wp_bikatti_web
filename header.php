<?php 
/**
 * Tag <html>, the metatags on head,
 * and the header
 *
 *
 * @package    DEP
 * @since      DEP 0.1.0
 */
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <?php wp_head(  ); ?>

</head>
<body id="theBody" class="theBody">
    <?php get_template_part( 'template-parts/header/site-header', null, $args ); ?>
