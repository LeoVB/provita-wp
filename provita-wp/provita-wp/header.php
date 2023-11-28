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
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
   <link rel="profile" href="https://gmpg.org/xfn/11">
   <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">
   <?php wp_head(); ?>
</head>


<!-- header mobile and tablet -->
<header style="background-color: #ffff:" class="d-lg-none">
   <section id="header">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="header">
                  <?php
                  if (function_exists('the_custom_logo')) {
                     $custom_logo_id = get_theme_mod('custom_logo');
                     $logo = wp_get_attachment_image_src($custom_logo_id);
                  }
                  ?>
                  <img class="logo"
                     src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO_PROVITA-small-1.png"
                     alt="logo">
                  <button class="menu-btn" type="button">
                     <i class="fas fa-bars"></i>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </section>
</header>


<header class="d-none d-lg-block site-header animate__animated" id="masthead">
   <section id="header">
      <div class="container">
         <div class="row">
            <div class="col-4">
               <div class="header">
                  <?php
                  if (function_exists('the_custom_logo')) {
                     $custom_logo_id = get_theme_mod('custom_logo');
                     $logo = wp_get_attachment_image_src($custom_logo_id);
                  }
                  ?>
                  <img class="logo"
                     src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO_PROVITA-small-1.png"
                     alt="logo">

               </div>
            </div>
            <div class="col-8">
               <nav class="navbar h-100">
                  <div class="wrapper-navbar">
                     <div id="main-menu-wrapper">
                        <?php
                        wp_nav_menu(
                           array(
                              'menu' => 'primary',
                              'container' => '',
                              'theme_location' => 'primary',
                              'items_wrap' => '<ul id="" class="navbar-nav flex-row justify-content-end mx-2">%3$s</ul>' // Cambiado flex-column a flex-row
                           )
                        );
                        ?>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </section>
</header>



<section id="popUp">
   <div id="navigation" class="flex-column">
      <div class="close-popup mr-1 "><i class="fa fa-times"></i></div>
      <div style="text-align: center;">
         <?php
         wp_nav_menu(
            array(
               'menu' => 'primary',
               'container' => '',
               'theme_location' => 'primary',
               'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center">%3$s</ul>'
            )
         );
         ?>
         <hr>
         <ul class="social-list list-inline mx-auto">
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook fa-fw"></i></a></li>
            <li class="list-inline-item "><a href="#"><i class="fa fa-phone"></i></a></li>
         </ul>
      </div>
   </div>
</section>

<body>