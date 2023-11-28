<?php get_header(); 
/* Template Name: blog-single-page */
?>
<section id="blog-section" class="background-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog-banner.jpg')">
    <div class="container">
        <div class="row info">
            <div class="col-md-12">
                <h2>Conoce nuestro <span>Blog</span></h2>
            </div>
        </div>
    </div>
</section>
<section id="blog-posts">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="breadcrumbs">
                    <a href="#">Inicio</a>
                    <span class="separator"> / </span> 
                    <a href="#">Blog</a>
                    <span class="separator"> / </span> 
                    <span class="current">Ideas y recetas para preparar golosinas y comidas caseras para animales.</span>
                </div>
                <div class="post-single-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-banner.jpg" alt="" class="img-fluid mb-3">
                    <div class="blog-content">
                        <h3>Ideas y recetas para preparar golosinas y comidas caseras para animales.</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000.</p>
                        <p>years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a</p>
                        <p>Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="sidebar">
                    <h3 class="simple-title">Categorías</h3>
                    <ul class="categories-list">
                        <li><a href="#"><i class="fa fa-tag"></i>Nutrición Animal</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>Productos Recomendados</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>Consejos de Compra</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>Estilo de Vida y Bienestar</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>Noticias del Mundo Animal</a></li>
                    </ul>

                    <h3 class="simple-title">Entradas recientes</h3>
                    <ul class="categories-list">
                        <li><a href="#"><i class="fa fa-bookmark"></i>Recetas de alimentos caseros y saludables.</a></li>
                        <li><a href="#"><i class="fa fa-bookmark"></i>Consejos para tratar problemas de alimentación en mascotas.</a></li>
                        <li><a href="#"><i class="fa fa-bookmark"></i>Guías para elegir el mejor alimento para tu mascota.</a></li>
                        <li><a href="#"><i class="fa fa-bookmark"></i>Ideas y recetas para preparar golosinas y comidas caseras para animales.</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>