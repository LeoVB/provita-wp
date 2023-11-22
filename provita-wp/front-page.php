<?php get_header(); ?>


<article class="px-3 py-3 p-md-5">

	<section>
		<div class="container text-center">
			<h4>CATEGORIAS</h4>
		</div>
	</section>

	<section>
		<div class="container-fluid">

			<div class="category-wrapper" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/alimento_mascotas.jpg">
				<div class="category-content">
					<h5>Alimento para mascotas</h5>
				</div>
			</div>

		</div>
	</section>


	<?php
	// if ( have_posts() ) {
	// 	while ( have_posts() ) {
	// 		the_post();
	// 		the_content();
	// 	}
	// }
	
	?>

</article>

<?php get_footer(); ?>