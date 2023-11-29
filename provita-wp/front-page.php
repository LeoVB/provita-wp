<?php 
   get_header();
   $categories = get_parent_categories();
   $dealers_array = get_distributors();
?>
<section id="home-section" class="background-img blog-header simple-page-head" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cat.jpg">
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
      <div class="row">
         <div class="col-md-12">
            <h4>CATEGORIAS</h4>
         </div>
      </div>
   </div>
   <div class='container d-block d-lg-none'>
      <div class="row">
         <div class="col-md-12">
            <div class="owl-carousel owl-theme home-category-carrousel" id="small-carousel">
               <?php
                  if ($categories):
                     foreach ($categories as $category):
                        $catgegory_background = get_field('background_image', 'term_' . $category->term_id);
                        $category_link = get_category_link($category->term_id);
                        ?>
                        <a href="<?php echo $category_link; ?>">
                           <div class='category-wrapper' style='background-image: url(<?php echo esc_url($catgegory_background); ?>'>
                              <div class='category-content'>
                                 <h5>
                                    <?php echo esc_html($category->name); ?>
                                 </h5>
                              </div>
                           </div>
                        </a>
               <?php endforeach;
                  endif;
                  ?>
            </div>
         </div>
      </div>
      
   </div>
   <div class="container-fluid d-none d-lg-block">
      <div class="row">
         <?php if ($categories): foreach ($categories as $category): $catgegory_background = get_field('background_image', 'term_' . $category->term_id); $category_link = get_category_link($category->term_id);?>
               <div class="col-md-3 category-wrapper" style="background-image: url(<?php echo esc_url($catgegory_background); ?>)">
                  <a href="<?php echo $category_link; ?>">
                     <div class="category-content">
                        <h5>
                           <?php echo esc_html($category->name); ?>
                        </h5>
                     </div>
                  </a> 
               </div>  
         <?php endforeach; endif; ?>
      </div>
   </div>
</section>
<section id="map-front">
   <div class="container-fluid mx-auto footer-wrapper" style="background-color: #c0c0c052;">
      <div class="row">
         <div class="col-12">
            <h3 class="text-center mt-3" style="color:#2F2F6F;">Oficionas centrales</h3>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="info-box container">
               <div class="row">
                  <div class="col-md-12">
                     <h4 class="my-3 text-center ">San José Centro</h4>
                  </div>
               </div>
               <div class="row">
                  <div class="col-3 col-md-5 text-right ">
                     <i class="fas fa-phone footer-icon mx-2"></i>
                  </div>
                  <div class="col-9">
                     <p>787-970-1155</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-3 col-md-5 text-right ">
                     <i class="far fa-envelope footer-icon mx-2"></i>
                  </div>
                  <div class="col-9">
                     <p>paupei@8agroup.com</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-3 col-md-5 text-right ">
                     <i class="far fa-clock footer-icon mx-2"></i>
                  </div>
                  <div class="col-9">
                     <p>8:00 am - 8:00 pm</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="map-dealers" class="dealers-map" style="height: 500px;width: 100%;margin: auto;"></div>
</section>
<script type="text/javascript">
   var dealers_locations = <?php echo json_encode($dealers_array); ?>;
</script>
<?php 
   get_footer(); 
?>