<?php
// directly access denied
defined( 'ABSPATH' ) || exit;

global $product;

// if have no product found then return
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div class="DuleProduct col-xl-3 col-lg-4 col-md-4 col-sm-6 Mobile50">
   <div class="PerProductDiv">
         <a href="<?php the_permalink(); ?>">
            <div class="ProductImgage">

               
               <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="">
               <div class="DiscountPersentese">
                     -30%
               </div>
               <div class="ProductLove">
                     <i class="fa-regular fa-heart"></i>
               </div>
            </div>

            <div class="PrductText">
               <p class="ProductTitle"><?php the_title(); ?></>
               
               <p><span class="Price"> <?php woocommerce_template_loop_price(); ?> </span><span class="Discount">৳600</span></p>

               <ul class="StartList"> 
                  <?php woocommerce_template_loop_rating(); ?>
               </ul>
               <p>
                  <?php woocommerce_template_loop_add_to_cart(); ?>
               </p>
            </div>
         </a>
   </div>
</div>