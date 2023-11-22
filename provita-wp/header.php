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

	<header class="header text-center "
		style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cat.jpg">

		<section id="header">
			<div class="content">

				<?php
				if (function_exists('the_custom_logo')) {
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id);
				}
				?>
				<img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo">

				<nav class="navbar navbar-expand-lg navbar-dark justify-content-end ">
					<button class="navbar-toggler popup-btn" type="button" data-target="#navigation"
						aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</nav>

				<section class="container">
					<div class="mt-5 title-green">
						<h3>Cuidado gatuno</h3>
					</div>

					<div class="leer-mas-btn mt-5">
						<h5>Leer más</h5>
						<div class="icon-wrapper ">
							<i class="fa fa-arrow-right"></i>
						</div>
					</div>

				</section>



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