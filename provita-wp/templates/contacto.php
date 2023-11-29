<?php get_header(); 
/* Template Name: contact-page */
?>
<section id="contact-page" class="simple-page-head">
    <div class="container">
        <div class="row">
        <div class="col-12 col-md-6 background-img herocol" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/blog-banner.jpg')"></div>
            <div class="col-12 col-md-6">
                <h2 class="simple-title">Como contactarnos</h2>
                <p>La comunicación con clientes y usuarios potenciales es muy importante para nosotros</p>
                <p>Le animamos a que nos envíe cualquier sugerencia o petición <br> Le atenderemos enseguida</p>
                <ul>
                    <li>Dirección</li>
                    <li>Teléfono</li>
                    <li>Email</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form-wrapper text-center">
                <h2 class="simple-title2">Escribanos</h2>
                    <?php echo do_shortcode('[contact-form-7 id="a68fda4" title="Contact form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
