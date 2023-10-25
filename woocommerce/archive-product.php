<?php

defined('ABSPATH') || exit;

global $cc;

get_header(); ?>
   <!-- mid div start -->
   <Section class="CommonpaddingSection TitleBorderBottom productPhonemargin ProductViewArea CatagorisPage" >
      <div class="container">

            <?php
            /**
             * woocommerce breadcrumb 
             * 
             */
            if( is_enable_options('cc-product-page-banner-visibility') ){
               echo "<div class=\"ShowCatagoritStapes\">\n";
                  woocommerce_breadcrumb();
               echo "</div>\n";
            }
            
            ?>
            <?php if( woocommerce_product_loop() ): ?>
               <div class="row">

                  <!-- catagoris and brand menu start -->
                  <?php get_sidebar('woocommerce'); ?>
                  <!-- catagoris and brand menu end -->
                  
                  <!-- Product view and filter result start -->
                  <div class="col-xl-10 col-lg-9 col-md-12 col-sm-12 AllProduct">

                     <!-- banner -->
                     <?php if( $cc['cc-product-banner-enable'] == 1 ): ?>
                        <div class="AllProductImg row">
                              <div>
                                 <?php
                                    printf(
                                       '<img src="%s" alt="%s">',
                                       esc_url( $cc['cc-product-banner']['url'] ),
                                       esc_attr( $cc['cc-product-banner-alt'] )
                                    );
                                 ?>
                              </div>
                        </div>
                     <?php endif ?>
                     <!-- banner end -->

                     <!-- Filtering ptoduct acroding to populer type -->
                     <?php if( $cc['cc-product-filter'] == 1 ): ?>
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
                     <?php endif ?>
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
                     
                     <?php if( $cc['cc-product-pagination'] == 1 ): ?>
                        <div class="wc-custom-pagination mt-3">
                           <?php woocommerce_pagination(); ?>
                        </div>
                     <?php endif ?>
                  </div> 
                  <!-- Product view and filter result start --> 
               </div>

            <?php else: ?>

               <?php do_action( 'woocommerce_no_products_found' ); ?>
            
            <?php endif ?>
      </div>
   </Section>
   <!-- mid div Product end -->
<?php get_footer(); ?>
