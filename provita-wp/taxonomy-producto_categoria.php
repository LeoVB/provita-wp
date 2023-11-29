<?php
/**
 * Template Name: Producto Categoria
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package provitapet
 */
    get_header();
    $parent_categories = get_parent_categories();
?>
<section id="tax-producto-cat" class="simple-page-head">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <h2 class="simple-title">Categorías</h2>
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
            <div class="col-12 col-md-9">
                <div class="row">
                    <?php
                    if (is_tax('producto_categoria')) {
                        while (have_posts()) : the_post();
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
                    } else {
                        echo "404";
                        die();
                        ?>
                        <p>No se ha seleccionado ninguna categoría.</p>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function ($) {
        var currentCategoryId = <?php echo is_tax('producto_categoria') ? get_queried_object_id() : '0'; ?>;
        
        if (currentCategoryId !== 0) {
            // Si estamos en una categoría, obtenemos el ID del padre
            var parentCategoryId = <?php echo is_tax('producto_categoria') ? get_term(get_queried_object_id())->parent : '0'; ?>;
            // Si hay un padre, abrimos el collapsable del padre
            if (parentCategoryId !== 0) {
                $('#collapse-' + parentCategoryId).addClass('show');
            } else {
                // Si no hay padre, abrimos el collapsable de la categoría actual
                $('#collapse-' + currentCategoryId).addClass('show');
            }
        }
    });
</script>
<?php
get_footer();
?>
