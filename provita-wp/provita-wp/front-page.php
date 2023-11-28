<?php get_header();
$args = array(
   'post_type' => 'producto',
   'taxonomy' => 'producto_categoria'
);
$categories = get_terms($args);
$half_count = count($categories) / 2;
$first_half = array_slice($categories, 0, $half_count);
$second_half = array_slice($categories, $half_count);

$args = array('posts_per_page' => -1, 'post_type' => 'distribuidor');
$stores = get_posts($args);
$array_template = array();
$_array_new = array();
//var_dump($stores);
foreach ($stores as $key => $value) {
   $array_template["id"] = $value->ID;
   $array_template["title"] = $value->post_title;
   $array_template["image"] = false;
   $meta = get_post_meta($value->ID);
   $array_template["name"] = $value->post_title;
   $array_template["latitude"] = $meta["latitude"][0];
   $array_template["longitude"] = $meta["longitude"][0];
   $array_template["address"] = $meta["address"][0];
   $array_template["phone"] = $meta["phone"][0];
   $array_template["country"] = "";
   $array_template["lang"] = "";


   array_push($_array_new, $array_template);
}

?>
<section id="home-section" class="background-img blog-header"
   style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cat.jpg">
   <div class="container">
      <div class="row info">
         <div class="col-md-12">
            <h1>Provita<span>Amor por los Animales y Excelencia Veterinaria</span></h1>
         </div>
      </div>
   </div>
</section>
<section id="categories">
   <div class='container text-center my-4'>
      <h4>CATEGORIAS</h4>
   </div>
</section>
<section>
   <div class='container d-lg-none'>
      <div class="owl-carousel owl-theme " id="small-carousel">
         <!-- <div class = 'category-wrapper' style = 'background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/alimento_mascotas.jpg'>
            <div class = 'category-content'>
               <h5>Alimento para mascotas</h5>
            </div>
            </div> -->
         <?php
         if ($categories):
            foreach ($categories as $category):
               //$category_link = get_term_link($categories[0]); 
               $catgegory_background = get_field('background_image', 'term_' . $category->term_id);
               ?>
               <div class='category-wrapper' style='background-image: url(<?php echo esc_url($catgegory_background); ?>'>
                  <div class='category-content'>
                     <h5>
                        <?php echo esc_html($category->name); ?>
                     </h5>
                  </div>
               </div>

            <?php endforeach;
         endif;
         ?>
      </div>


   </div>

   <div class="container-fluid d-none d-lg-block">
      <div class="row ">
         <?php
         if ($first_half):
            foreach ($first_half as $category):
               $catgegory_background = get_field('background_image', 'term_' . $category->term_id);
               ?>
               <div class="col-3 category-wrapper"
                  style="background-image: url(<?php echo esc_url($catgegory_background); ?>)">
                  <div class="category-content">
                     <h5>
                        <?php echo esc_html($category->name); ?>
                     </h5>
                  </div>
               </div>
            <?php endforeach; endif; ?>
      </div>
      <div class="row ">
         <?php
         if ($second_half):
            foreach ($second_half as $category):
               $catgegory_background = get_field('background_image', 'term_' . $category->term_id);
               ?>
               <div class="col-3 category-wrapper"
                  style="background-image: url(<?php echo esc_url($catgegory_background); ?>)">
                  <div class="category-content">
                     <h5>
                        <?php echo esc_html($category->name); ?>
                     </h5>
                  </div>
               </div>
            <?php endforeach; endif; ?>
      </div>
   </div>


</section>


<section id="map-front">
   <style>
      .mapboxgl-marker {
         height: 50px;
         width: 50px;
         display: block;
         background-repeat: no-repeat;
         background-position: center;
         background-size: contain;
      }

      .mapboxgl-popup-content .info-tabs-center a img {
         max-width: 40px;
      }

      .mapboxgl-popup-content {
         width: 350px;
         -webkit-box-shadow: 0px 6px 49px -17px rgba(0, 0, 0, 0.75);
         -moz-box-shadow: 0px 6px 49px -17px rgba(0, 0, 0, 0.75);
         box-shadow: 0px 6px 49px -17px rgba(0, 0, 0, 0.75);
      }

      .dealers-map {
         margin: 0px auto !important;
      }
   </style>


   <!-- <div class="container" style="background-color: #c0c0c052;">
      <div class="row">
         <div class="col-12">
            <div class="map-info-wrapper flex-column">
               <h5 class="text-center mt-3">Oficionas centrales</h5>
               <div class="info-box my-4 mx-3">
                  <h5 class="mt-2">San José Centro</h5>
                  <div class="row">
                     <i class="fas fa-phone footer-icon mx-2"></i>
                     <p>787-970-1155</p>
                  </div>
                  <div class="row">
                     <i class="far fa-envelope footer-icon mx-2"></i>
                     <p>paupei@8agroup.com</p>
                  </div>
                  <div class="row">
                     <i class="fas fa-map-marker-alt footer-icon mx-2"></i>
                     <p>Puerto Rico</p>
                  </div>
                  <div class="row">
                     <i class="far fa-clock footer-icon mx-2"></i>
                     <p>8:00 am - 8:00 pm</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
 -->

   <div class="container-fluid mx-auto footer-wrapper" style="background-color: #c0c0c052;">
      <div class="row">
         <div class="col-12">
            <h3 class="text-center mt-3" style="color:#2F2F6F;">Oficionas centrales</h3>
         </div>
      </div>


      <!-- pantalla telefonos -->
      <div class="info-box my-4 mx-3">
         <h4 class="my-3 text-center ">San José Centro</h4>
         <div class="row">
            <div class="col-3 col-md-5 text-right ">
               <i class="fas fa-phone footer-icon mx-2"></i>
            </div>
            <div class="col">
               <p>787-970-1155</p>
            </div>
         </div>

         <div class="row">
            <div class="col-3 col-md-5 text-right ">
               <i class="far fa-envelope footer-icon mx-2"></i>
            </div>
            <div class="col">
               <p>paupei@8agroup.com</p>
            </div>
         </div>

         <div class="row">
            <div class="col-3 col-md-5 text-right ">
               <i class="far fa-clock footer-icon mx-2"></i>
            </div>
            <div class="col">
               <p>8:00 am - 8:00 pm</p>
            </div>
         </div>

      </div>



   </div>


   <div id="map-dealers" class="dealers-map" style="height: 500px;width: 100%;margin: auto;">



      <div class="scrolldown" style="
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 50px;
         ">
         <div class="col-md-12 text-center dwnarrow">
            <a class="scroll" target="footer"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
         </div>
      </div>
   </div>
</section>


<script type="text/javascript">

   var dealers_locations = <?php echo json_encode($_array_new); ?>;
   console.log(dealers_locations);
</script>


<?php get_footer();
?>