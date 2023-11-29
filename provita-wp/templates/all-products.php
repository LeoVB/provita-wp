<?php
/**
 * Template Name: Todos los Productos
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package provitapet
 */

get_header();
$parent_categories = get_parent_categories();
?>

<section id="todos-los-productos" class="simple-page-head">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
            <h2 class="simple-title">Nuestros Productos</h2>
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
                </div>
                <div class="product-cat-group">
                    <?php foreach ($parent_categories as $parent_category) : ?>
                        <div class="product-list-group-item main-category">
                            <div class="item">
                                <a href="<?php echo esc_url(get_term_link($parent_category)); ?>">
                                    <?php echo esc_html($parent_category->name); ?>
                                </a>
                                <?php 
                                    // Obtén las subcategorías de la categoría principal actual
                                    $subcategories = get_subcategories($parent_category->term_id);
                                    if (!empty($subcategories)) : 
                                    ?>
                                    <i class="fas fa-chevron-down subcategories-toggle" data-toggle="collapse" href="#collapse-<?php echo esc_attr($parent_category->term_id); ?>"></i>
                            </div>
                            <?php
                            ?>
                                <div id="collapse-<?php echo esc_attr($parent_category->term_id); ?>" class="product-sub-list-group sub-categories collapse">
                                    <?php foreach ($subcategories as $subcategory) : ?>
                                        <a href="<?php echo esc_url(get_term_link($subcategory)); ?>" class="product-sub-list-group-item sub-category">
                                            <?php echo esc_html($subcategory->name); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'producto',
                'posts_per_page' => -1, // Mostrar todos los productos
            );

            $productos_query = new WP_Query($args);
            if ($productos_query->have_posts()) {
                while ($productos_query->have_posts()) : $productos_query->the_post();
                    ?>
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card-product">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata(); // Restaurar datos originales de la consulta de productos
            } else {
                echo "No hay productos disponibles.";
            }
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>
