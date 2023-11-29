<?php
/**
 * Template Name: Producto Single
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package provitapet
 */

get_header();
?>
<section class="simple-page-head">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                    $tabs_content = get_field("product_tabs");
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="entry-content">
                                <div class="post-img text-center">
                                    <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('large', array('class' => 'img-fluid'));
                                        }
                                    ?>
                                </div>
                                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                                    <?php if(function_exists('bcn_display'))
                                    {
                                        bcn_display();
                                    }?>
                                </div>
                                <h2 class="simple-title"><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                                <?php
                            // Filtrar las pestañas que tienen contenido
                            $tabs_with_content = array_filter($tabs_content, function ($content) {
                                return !empty($content);
                            });

                            if (!empty($tabs_with_content)) :
                                ?>
                                <ul class="nav nav-tabs" id="productInfo" role="tablist">
                                    <?php
                                    $first_tab = true;
                                    foreach ($tabs_with_content as $tab => $content) :
                                        ?>
                                        <li class="nav-item">
                                            <a class="nav-link<?php echo $first_tab ? ' active' : ''; ?>" id="<?php echo $tab; ?>-tab" data-toggle="tab" href="#<?php echo $tab; ?>" role="tab" aria-controls="<?php echo $tab; ?>" aria-selected="<?php echo $first_tab ? 'true' : 'false'; ?>"><?php echo ucwords(str_replace('_', ' ', $tab)); ?></a>
                                        </li>
                                        <?php
                                        $first_tab = false;
                                    endforeach;
                                    ?>
                                </ul>
                                <div class="tab-content" id="productInfoContent">
                                    <?php
                                    $first_tab = true;
                                    foreach ($tabs_with_content as $tab => $content) :
                                        ?>
                                        <div class="tab-pane fade<?php echo $first_tab ? ' show active' : ''; ?>" id="<?php echo $tab; ?>" role="tabpanel" aria-labelledby="<?php echo $tab; ?>-tab">
                                            <?php echo $content; ?>
                                        </div>
                                        <?php
                                        $first_tab = false;
                                    endforeach;
                                    ?>
                                </div>
                            <?php endif; ?>
                            </div>
                        </article>
                    <?php endwhile;
                else :
                    echo '<p>No se encontraron productos.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
