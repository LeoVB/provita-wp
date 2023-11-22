<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package provitapet
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
   <link rel="profile" href="https://gmpg.org/xfn/11">
   <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">
   <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="masthead" class="site-header">
</header>