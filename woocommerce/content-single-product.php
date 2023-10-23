<?php

// derectly access denied
defined('ABSPATH') || exit;

global $product;

// include header functionality
get_header(); ?>

<!-- Forduct view area start -->
<section class="CommonpaddingSection ProductViewArea">
   <div class="container">

         <?php woocommerce_output_all_notices(); ?>

         <!-- show file direction  -->
         <div class="ShowCatagoritStapes">
               <?php woocommerce_breadcrumb(); ?>
         </div>

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
                  cc_show_1_related_product();

                ?>

            </div>

            <div class="col-lg-4 col-md-7 col-sm-6 product-view-area">
               <div class="part-txt">
               
                     <h2 class="main-product-title"><?php the_title(); ?></h2>

                     <?php cc_wc_product_rating_n_reviews_count(); ?>

                     <p class="price"><span class="mr-2">Price: </span> <?php woocommerce_template_loop_price(); ?></p>

                     <ul class="short-details">
                        <li>Availability: <span>In stock</span></li>
                        <li>Product Code: <span>#4657</span></li>
                        <li>Tags: <span>Fashion, Hood, Classic</span></li>
                     </ul>
                     <?php woocommerce_template_single_excerpt(); ?>

                     <div class="VariantColor">
                        <div class="ProductColor">
                           <span>Color:</span>
                           <div class="BtnsDiv">
                                 <button class="ColorBtn1"></button>
                                 <button class="ColorBtn2"></button>
                                 <button class="ColorBtn3"></button>
                           </div>
                        </div>

                        <div class="Variant">
                           <span>Variant:</span>
                           <div class="VariantImgs">
                                 <div class="VarImg">
                                    <img src="./Images/Product/Product1.jpg" alt="">
                                 </div>
                                 <div class="VarImg">
                                    <img src="./Images/Product/Product2.jpg" alt="">
                                 </div>
                                 <div class="VarImg">
                                    <img src="./Images/Product/Product3.jpg" alt="">
                                 </div>
                           </div>

                           <div class="VariantImgs">
                                 <div class="TextVariant">
                                    <span>Variant1</span>
                                 </div>
                                 <div class="TextVariant">
                                    <span>Variant2</span>
                                 </div>
                                 <div class="TextVariant">
                                    <span>Variant3</span>
                                 </div>
                                 <div class="TextVariant">
                                    <span>Variant1</span>
                                 </div>
                                 <div class="TextVariant">
                                    <span>Variant2</span>
                                 </div>
                                 <div class="TextVariant">
                                    <span>Variant3</span>
                                 </div>
                           </div>
                        </div>
                     </div>

                     <form>
                        <div class="row g-xl-4 g-3">
                           <div class="col-lg-8 col-md-12 col-sm-4">
                                 <div class="quantity-wrap">
                                    <label>QTY</label>
                                    <div class="product-count">
                                       <div class="quantity rapper-quantity">
                                             <input type="number" min="1" max="100" step="1" value="1" readonly />
                                             <div class="quantity-nav">
                                                <div class="quantity-button quantity-down"><i class="fa-solid fa-minus"></i></div>
                                                <div class="quantity-button quantity-up"><i class="fa-solid fa-plus"></i></div>
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </form>

                     
                     <div class="mb-2">
                        <?php woocommerce_template_single_meta(); ?>
                     </div>
                     
                     <!-- will be sharing icon -->
                     
                     
                     <div class="btn-box">
                     <?php woocommerce_template_loop_add_to_cart(); ?>
                        <button id="addToWishList">
                           <span><i class="fa fa-heart"></i></span> add to wishlist
                        </button>
                     </div>

                     <div class="product-share">
                        <span>Share Link:</span>
                        <div class="social">
                           <a href="#"><i class="fa-brands fa-facebook-f"></i></a> <a href="#"><i class="fa-brands fa-twitter"></i></a> <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                           <a href="#"><i class="fa-solid fa-rss"></i></a>
                        </div>
                     </div>
               </div>
            </div>

            <div class="col-lg-3 col-md-0 col-sm-0">
               <div class="delivary">
                     <div>
                        <h5><i class="fa-solid fa-truck"></i> Delivery Charge: </h5>
                        <ul>
                           <li>
                                 <i class="fa fa-location-dot"></i> 
                                 Inside Dhaka : Taka 60 (1-5 Days)
                           </li>
                           <li>
                                 <i class="fa-solid fa-location-arrow"></i>
                                 Outside Dhaka : Taka 150 (1-7 Days)
                           </li>
                           <li>
                                 <i class="fa fa-hand-holding"></i>
                                 Cash on Delivery available
                           </li>
                        </ul>
                     </div>

                     <div>
                        <h5><i class="fa-solid fa-person-walking-arrow-loop-left"></i> Return & Warranty: </h5>
                        <ul>
                           <li>
                                 <!-- <i class="fa-solid fa-hand"></i> -->
                                 <i class="fa fa-lock"></i>
                                 7 Days Returns Change of mind is not applicable
                           </li>
                           <li>
                                 <i class="fa-solid fa-shield-halved"></i>
                                 Warranty not available
                           </li>
                           <li>
                                 <i class="fa fa-hand-holding"></i>
                                 Cash on Delivery available
                           </li>
                        </ul>
                     </div>
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
<?php woocommerce_output_product_data_tabs(); ?>
<!-- PRODUCT REVIEW AND COMMENT START -->

<!-- PRODUCT REVIEW AND COMMENT START -->

<!-- Banner2 after Service icon start -->
<Section class="CommonpaddingSection productPhonemargin">
   <div class="container BannerSec">
         <img src="<?php echo get_template_directory_uri(). '/assets/img/banner-product-page-default.jpg'; ?>" alt="">
   </div>
</Section>
<!-- Banner2 after Service icon end -->

<!-- Related Product start -->
<?php 
   woocommerce_output_related_products();

 ?>
<!-- Related Product end -->

<?php get_footer(); ?>