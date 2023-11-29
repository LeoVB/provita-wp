<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package provitapet Theme
 */

?>
<footer>
	<section id="footer-section">
		<!-- <div class="container mx-auto">
			<div class="row">
				<div class="col-12">
					<div class="footer-wrapper mt-3">
						<h5>Contacto</h5>
						<div class="info-footer-wrapper">
							<i class="fas fa-phone footer-icon mx-2"></i>
							<p>787-970-1155</p>
						</div>
						<div class="info-footer-wrapper">
							<i class="far fa-envelope footer-icon mx-2"></i>
							<p>paupei@8agroup.com</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<ul class="social-list list-inline mx-auto text-center">
						<li class="list-inline-item"><a href="https://www.instagram.com/provitapet/"><i
									class="fab fa-instagram fa-fw"></i></a></li>
						<li class="list-inline-item"><a href="https://www.facebook.com/ProVitaPetsPuertoRico"><i
									class="fab fa-facebook fa-fw"></i></a></li>
						<li class="list-inline-item "><a href="#"><i class="fa fa-phone"></i></a></li>
					</ul>
				</div>
			</div>
		</div> -->


		<!-- pantallas mobile -->
		<div class="container mx-auto footer-wrapper d-lg-none">
			<div class="row">
				<div class="col-2 col-md-1">
					<i class="fas fa-phone footer-icon mx-2"></i>
				</div>
				<div class="col">
					<p>787-970-1155</p>
				</div>
			</div>
			<div class="row">
				<div class="col-2 col-md-1">
					<i class="far fa-envelope footer-icon mx-2"></i>
				</div>
				<div class="col">
					<p>paupei@8agroup.com</p>
				</div>
			</div>
			<div class="row">
				<div class="col-2 col-md-1">
					<i class="fas fa-map-marker-alt footer-icon mx-2"></i>
				</div>
				<div class="col">
					<p>Puerto Rico, 500 mts norte 230 oeste</p>
				</div>
			</div>
		</div>


		<div class="container mx-auto footer-wrapper d-none d-lg-block">
			<div class="row">
				<div class="col-6">
					<div class="row">
						<div class="col-2 col-md-1">
							<i class="fas fa-phone footer-icon mx-2"></i>
						</div>
						<div class="col">
							<p>787-970-1155</p>
						</div>
					</div>
					<div class="row">
						<div class="col-2 col-md-1">
							<i class="far fa-envelope footer-icon mx-2"></i>
						</div>
						<div class="col">
							<p>paupei@8agroup.com</p>
						</div>
					</div>
					<div class="row">
						<div class="col-2 col-md-1">
							<i class="fas fa-map-marker-alt footer-icon mx-2"></i>
						</div>
						<div class="col">
							<p>Puerto Rico, 500 mts norte 230 oeste</p>
						</div>
					</div>
				</div>
				<div class="col-6">
					<h5 class="mb-4">Escríbanos</h5>
					<form>
						<div class="row">
							<div class="flex-column ">
								<!-- Columna con 3 inputs -->
								<div class="custom-input mb-3">
									<input type="text" class="form-control " id="nombre"
										placeholder="Nombre" required>
								</div>

								<div class="custom-input mb-3">
									<input type="email" class="form-control " id="email" placeholder="Email"
										required>
								</div>

								<div class="custom-input mb-3">
									<input type="text" class="form-control " id="asunto"
										placeholder="Asunto" required>
								</div>
							</div>
							<div class="flex-column ">
								<!-- Columna con 1 input y 1 textarea -->

								<div class="custom-input mb-3">
									<input type="tel" class="form-control" id="telefono"
										placeholder="Teléfono" required>
								</div>
								<div class="custom-input mb-3">
									<textarea class="form-control " id="mensaje" placeholder="Mensaje"
										rows="4" required></textarea>
								</div>
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Enviar</button>
					</form>
				</div>
			</div>






		</div>




		<div class="container-fluid">
			<div class="row" style="background-color: #2F2F6F;">
				<div class="col-12">
					<div class="copyright mt-2 text-center ">
						<p>©
							<?php echo date("Y") ?> ProVita Pet. All Rights Reserved.
						</p>
					</div>
				</div>
			</div>
		</div>

	</section>
</footer>
<?php wp_footer(); ?>
</body>

</html>