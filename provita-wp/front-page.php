<?php get_header(); 
   $args = array(
     'post_type' => 'producto',
     'taxonomy'  => 'producto_categoria'
     );
     $categories = get_terms($args);
   ?>
<section class="front-page text-center "
   style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cat.jpg">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-11 mt-5">
            <div class="">
               <h5>Hola</h5>
               <h3>Cuidado gatuno</h3>
            </div>
         </div>
      </div>
      <!-- <div class="row">
         <div class="col-11 mt-5">
            <div class="leer-mas-btn ">
               <h5>Leer más</h5>
               <div class="icon-wrapper ">
                  <i class="fa fa-arrow-right"></i>
               </div>
            </div>
         </div>
         </div> -->
   </div>
</section>
<section id="categories">
   <div class = 'container text-center my-4'>
      <h4>CATEGORIAS</h4>
   </div>
</section>
<section>
   <div class = 'container'>
      <div class="owl-carousel owl-theme" id="small-carousel">
         <!-- <div class = 'category-wrapper' style = 'background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/alimento_mascotas.jpg'>
            <div class = 'category-content'>
               <h5>Alimento para mascotas</h5>
            </div>
            </div> -->
         <?php 
            if ($categories) :
            foreach ($categories as $category) :
                //$category_link = get_term_link($categories[0]); 
                $catgegory_background = get_field( 'background_image', 'term_'.$category->term_id);
                ?>
         <div class='category-wrapper' style='background-image: url(<?php echo esc_url($catgegory_background); ?>'>
            <div class='category-content'>
               <h5><?php echo esc_html($category->name); ?></h5>
            </div>
         </div>
         <?php endforeach;
            endif;
            ?>      
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
<?php get_footer();
   ?>