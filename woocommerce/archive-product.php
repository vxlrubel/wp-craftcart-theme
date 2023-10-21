<?php

defined('ABSPATH') || exit; 

get_header(); ?>
   <!-- mid div start -->
   <Section class="CommonpaddingSection TitleBorderBottom productPhonemargin ProductViewArea CatagorisPage" >
      <div class="container">
            <!-- show the file decrection -->
            <div class="ShowCatagoritStapes">
               <?php woocommerce_breadcrumb(); ?>
            </div>
            <?php if( woocommerce_product_loop() ): ?>
               <div class="row">
                  <!-- catagoris and brand menu start -->
                  <div class="col-xl-2 col-lg-3 col-md-0 col-sm-0 Catagori">
                     <div class="Catagori2">
                           <h5>FILTER PRODUCTS BY</h5>
                           <div class="Catagori3">
                              <span class="TaiterSpan">CATEGORY</span>
                              <a href="#">Hair Brushes & Combs (2)</a>
                           </div>

                           <div class="Catagori3">
                              <span class="TaiterSpan">Price</span>
                              <div class="priceLabel"> <span class="pricelavel1"></span> <span class="pricelavel2"></span></div>
                              <div class="priceInput">
                                 <span>TK </span> <input type="text" value="257"> - 
                                 <span>TK </span> <input type="text" value="1000">
                              </div>
                           </div>
                           
                           <div class="Catagori3">
                              <span class="TaiterSpan">PRODUCT TYPE</span>
                              <a href="#">Unassigned (1)</a>
                              <a href="#">Hair Brushs (1)</a>
                              <a href="#">Razor (1)</a>
                           </div>
                           
                           <div class="Catagori3">
                              <span class="TaiterSpan">BRAND NAME</span>
                              <a href="#">Unassigned (1)</a>
                              <a href="#">Hair Brushs (1)</a>
                              <a href="#">Razor (1)</a>
                           </div>
                           
                           <div class="Catagori3">
                              <span class="TaiterSpan">Location</span>
                              <a href="#">Bangladesh</a>
                              <a href="#">china</a>
                           </div>
                           
                           <div class="Catagori3">
                              <span class="TaiterSpan">Warranty</span>
                              <a href="#">Yes</a>
                              <a href="#">No</a>
                           </div>
                     </div>
                  </div>
                  <!-- catagoris and brand menu end -->
                  
                  <!-- Product view and filter result start -->
                  <div class="col-xl-10 col-lg-9 col-md-12 col-sm-12 AllProduct">
                     <div class="AllProductImg row">
                           <div>
                              <img src="<?php echo get_template_directory_uri(). '/assets/img/Product/Kitchern/Kitchern10.webp'; ?>" alt="">
                           </div>
                     </div>

                     <!-- Filtering ptoduct acroding to populer type -->
                     <div class="CtagorisFilter">

                           <div class="ShortIcon">
                              <?php woocommerce_result_count(); ?>
                           </div>

                           <div class="ShortBy">
                              <div class="d-flex align-items-center">
                                 <span class="mx-2">Short By</span>
                                 <?php woocommerce_catalog_ordering(); ?>
                              </div>
                              
                           </div>
                     </div>
                     <!-- Filtering ptoduct acroding to populer type -->

                     <div class="tab-content">

                        <?php 
                           // loop  before element
                           woocommerce_product_loop_start();

                           if( wc_get_loop_prop('total') ){
                              while( have_posts() ): the_post();
                                 do_action( 'woocommerce_shop_loop' );
                                 wc_get_template_part( 'content', 'product' );
                              endwhile;
                           }

                           // loop after element
                           woocommerce_product_loop_end();
                           
                         ?>

                     </div>
                  </div> 
                  <!-- Product view and filter result start --> 
               </div>
            <?php endif ?>
      </div>
   </Section>
   <!-- mid div Product end -->
<?php get_footer(); ?>
