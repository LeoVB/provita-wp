<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Blog Site Template">
      <meta name="author" content="https://youtube.com/FollowAndrew">
      <!-- <link rel="shortcut icon" href="/wp-content/themes/Provita/assets/images/logo.png"> -->
      <!-- Styles loading -->
      <?php
         wp_head();
         ?>
   </head>
   <body>
      <header 
         style="background-color: #ffff:">
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
                        <img class="logo" src="<?php echo get_template_directory_uri();?>/assets/images/LOGO_PROVITA-small-1.png" alt="logo">
                        <button class="menu-btn" type="button">
                        <i class="fas fa-bars"></i>
                        </button>
                     </div>
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