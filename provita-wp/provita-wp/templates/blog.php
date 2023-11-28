<?php get_header(); 
/* Template Name: blog-page */
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
                    <a href="#" class="current">Blog</a>
                </div>
                <div class="post-wrapper">
                    <div class="blog-post">
                        <div class="blog-img background-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog-banner.jpg')"></div>
                        <div class="blog-content">
                             <a href="/blog-single-page">
                                <h3>Ideas y recetas para preparar golosinas y comidas caseras para animales.</h3>
                             </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="blog-post">
                        <div class="blog-img background-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog-banner.jpg')"></div>
                        <div class="blog-content">
                             <a href="/blog-single-page">
                                <h3>Ideas y recetas para preparar golosinas y comidas caseras para animales.</h3>
                             </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="blog-post">
                        <div class="blog-img background-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog-banner.jpg')"></div>
                        <div class="blog-content">
                             <a href="/blog-single-page">
                                <h3>Ideas y recetas para preparar golosinas y comidas caseras para animales.</h3>
                             </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="blog-post">
                        <div class="blog-img background-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog-banner.jpg')"></div>
                        <div class="blog-content">
                             <a href="/blog-single-page">
                                <h3>Ideas y recetas para preparar golosinas y comidas caseras para animales.</h3>
                             </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <a href="#" class="page-link">&laquo;</a>
                    <span class="page-number current">1</span>
                    <a href="#" class="page-link">2</a>
                    <a href="#" class="page-link">3</a>
                    <a href="#" class="page-link">&raquo;</a>
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