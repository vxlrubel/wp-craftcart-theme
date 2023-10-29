<?php

// directly access denied
defined( 'ABSPATH' ) || exit;

global $product, $cc;

// if have no product found then return
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div class="DuleProduct col-xl-3 col-lg-4 col-md-4 col-sm-6 Mobile50">
   <div class="PerProductDiv">
         <a href="<?php the_permalink(); ?>">
            <div class="ProductImgage position-relative">

               <?php if( has_post_thumbnail( get_the_ID() )){

                  printf(
                     '<img src="%s" alt="%s">',
                     esc_url( get_the_post_thumbnail_url() ),
                     esc_html( get_the_title() )
                  );

               } ?>
               <div class="cc-flast-sale">
                  <?php woocommerce_show_product_loop_sale_flash(); ?>
               </div>
               <div class="cc-wishlist">
                  <?php echo do_shortcode( '[yith_wcwl_add_to_wishlist]'); ?>
               </div>
               
            </div>

            <div class="PrductText">
               <p class="ProductTitle"><?php echo get_cc_trim_post_title(25); ?></p>
               
               <p><span class="Price"> <?php woocommerce_template_loop_price(); ?> </span></p>

               <ul class="StartList"> 
                  <?php woocommerce_template_loop_rating(); ?>
               </ul>

               <?php if( $cc['cc-product-add-cart'] == 1 ): ?>
                  <div class="d-flex align-items-center wc-custom-add-to-cart">
                     <?php woocommerce_template_loop_add_to_cart(); ?>
                  </div>
               <?php endif ?>
            </div>
         </a>
   </div>
</div>