<?php

/**
 * Product attributes
 * 
 * @package Craft_Cart
 * @version 1.0
 * @since 1.0
 * @author Rubel Mahmud (Sujan)
 * @link https://github.com/vxlrubel
 */

// directly access denied
defined('ABSPATH') || exit;

if ( ! $product_attributes ) {
	return;
}

?>

<div class="product-information">
   <ul>
   <?php
      foreach ($product_attributes as $key => $attribute) {
         printf(
            '<li class="d-flex align-items-center cc-additional-list" id="items-%s"><span>%s:</span>%s</li>',
            $key,
            wp_kses_post( $attribute['label'] ),
            wp_kses_post( $attribute['value'] ),
         );
      }
    ?>
   </ul>
</div>