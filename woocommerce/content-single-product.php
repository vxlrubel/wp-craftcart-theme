<?php

// derectly access denied
defined('ABSPATH') || exit;

global $product, $cc;

// include header functionality
get_header(); ?>

<!-- Forduct view area start -->
<section class="CommonpaddingSection ProductViewArea">
   <div class="container">

         <?php 

            /**
             * woocommerce notice while add the product via click the add to cart button
             * 
             */
            if( is_enable_options('cc-commerce-notice-visibility') ){
               woocommerce_output_all_notices();
            }


            /**
             * woocommerce breadcrumb 
             * 
             */
            if( is_enable_options('cc-commerce-banner-single-page-visibility') ){
               echo "<div class=\"ShowCatagoritStapes\">\n";
                  woocommerce_breadcrumb();
               echo "</div>\n";
            }
            
          ?>

         <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5">
               <div class="BigImg">
                     <a href="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="MagicZoom" id="jeans">
                        <?php the_post_thumbnail(); ?>
                     </a>
               </div>

               <?php 
                  /**
                   * Showing product gallary images
                   */
                  do_action( 'woocommerce_product_thumbnails' );

                  /**
                   * show one related product 
                   */

                  if( is_enable_options('cc-commerce-buy-one-visibility') ){
                     cc_show_1_related_product();
                  }
                ?>

            </div>

            <div class="col-lg-4 col-md-7 col-sm-6 product-view-area">
               <div class="part-txt">
               
                     <h2 class="main-product-title"><?php the_title(); ?></h2>

                     <?php cc_wc_product_rating_n_reviews_count(); ?>

                     <p class="price"><span class="mr-2">Price: </span> <?php woocommerce_template_loop_price(); ?></p>

                     <ul class="short-details">

                        <?php
                           if( $product->is_in_stock() ){
                              printf('<li>Availability: <span>%s</span></li>', 'In stock');
                           }else{
                              printf('<li>Availability: <span>%s</span></li>', 'Out of stock');
                           }
                         ?>
                        <li class="cc-product-tag">
                           <?php
                              echo apply_filters( 'cc_product_tag_before', 'Categories:
                                 ' );
                              the_terms( get_the_ID(), 'product_cat', '<span>', ', ', '</span>' );
                           ?>
                        </li>
                        <li class="cc-product-tag">
                           <?php
                              echo apply_filters( 'cc_product_tag_before', 'Tags:
                                 ' );
                              the_terms( get_the_ID(), 'product_tag', '<span>', ', ', '</span>' );
                           ?>
                        </li>
                     </ul>
                     <?php woocommerce_template_single_excerpt(); ?>

                     <?php if( $product->is_type('variable') ): ?>
                        <div class="VariantColor">
                           <div class="cc-product-variable Variant">
                              <?php
                                 $variations = $product->get_available_variations();
                                 if( $variations ){
                                    woocommerce_variable_add_to_cart();
                                 }
                              ?>
                           </div>
                        </div>
                     <?php else: ?>
                        <div class="btn-box">
                           <?php woocommerce_template_single_add_to_cart(); ?>
                           <button id="addToWishList">
                              <span><i class="fa fa-heart"></i></span> add to wishlist
                           </button>
                        </div>
                     <?php endif; ?>
                     
                     <!-- will be sharing icon -->
                     <?php 
                        if( is_enable_options('cc-commerce-share-link-single-visibility') ){
                           cc_wc_product_share_icon();
                        }
                        
                      ?>

               </div>
            </div>

            <div class="col-lg-3 col-md-0 col-sm-0">
               <div class="delivary">
                     <div>

                        <?php

                        // Get the custom field value
                        $inside_location  = get_post_meta($product->get_id(), '_cc_custom_delivary_inside_location', true);
                        $inside_charge    = get_post_meta($product->get_id(), '_cc_custom_delivary_charge', true);
                        $outside_location = get_post_meta($product->get_id(), '_cc_custom_delivary_outside_location', true);
                        $outside_charge   = get_post_meta($product->get_id(), '_cc_custom_delivary_charge_outside', true);

                        if (! empty($inside_location) ): ?>
                           <h5><i class="fa-solid fa-truck"></i> Delivery Charge: </h5>
                           <ul>

                              <?php
                                 if( ! empty( $inside_location ) ){
                                    printf(
                                       '<li><i class="fa fa-location-dot"></i> Inside %s: %s</li>',
                                       $inside_location,
                                       $inside_charge
                                    );
                                 }
                                 if( ! empty( $outside_location ) ){
                                    printf(
                                       '<li><i class="fa-solid fa-location-arrow"></i> Outside %s: %s</li>',
                                       $outside_location,
                                       $outside_charge
                                    );
                                 }

                                 printf('<li><i class="fa fa-hand-holding"></i>%s</li>', 'Cash on Delivery available');
                               ?>
                           
                           </ul>
                        <?php endif; ?>
                     </div>


                     <?php

                        /**
                         * warranty and privacy policy section
                         * 
                         * @return void
                         */
                        cc_warranty_n_privacy_in_product_page();

                      ?>

               </div>
               
               <div class="delivary delivary2">
                     <div>
                        <span>Sold by</span>
                        <h5>FRESHED Fashion</h5>
                     </div>
                     
                     <div class="PdpSellerInfoPc">
                        <div>
                           <span>Positive Seller Ratings</span>
                           <h5>92%</h5>
                        </div>
                        <div>
                           <span>Ship on Time</span>
                           <h5>100%</h5>
                        </div>
                        <div>
                           <span>Chat Response Rate</span>
                           <h5>80%</h5>
                        </div>
                     </div>
               </div>

               <div class="ChargeDiv mt-3">
                  <h5 class="title">Payment Method</h5>
                  <div class="panel-body">
                     <img src="./Images/Amex.jpg" alt="">
                     <img src="./Images/Visa.jpg" alt="">
                     <img src="./Images/Master-card.jpg" alt="">
                     <img src="./Images/paypal.png" alt="">
                  </div>
               </div>
            </div>
         </div>
   </div>
</section>
<!-- Forduct view area end -->

<?php 
   /**
    * woocommerce product data tabs it's an accordion
    * 
    * @return void
    */
   woocommerce_output_product_data_tabs();


   /**
    * woocommerce banner for single page
    *
    * @return void
    */


   //  will be execute...the below code



 ?>

<!-- Banner2 after Service icon start -->

<?php if( is_enable_options('cc-commerce-banner-single-visibility') ): ?>
   <Section class="CommonpaddingSection productPhonemargin">
      <div class="container BannerSec">
            <img src="<?php echo esc_url( $cc['cc-commerce-banner-single-thumb']['url'] ); ?>" >
      </div>
   </Section>
<?php endif; ?>
 ?>

<!-- Banner2 after Service icon end -->

<!-- Related Product start -->
<?php 
   if( is_enable_options('cc-commerce-related-product-single-visibility') ){
      woocommerce_output_related_products();
   }

 ?>
<!-- Related Product end -->

<?php get_footer(); ?>