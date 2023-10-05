<!DOCTYPE html>
<html <?php language_attributes( );?>>
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'title' )?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.png">
    <?php wp_head();?>
</head>
<body <?php body_class();?> onclick >
    <?php if ( is_front_page() ) { get_template_part( 'partials/hero-video' ); }  ?>
    <?php get_template_part( 'partials/main-nav' ); ?>