<?php

/**
 * Modify the gallary image stucture
 * 
 * @package Craft_Cart
 * @version 1.0
 * @since 1.0
 * @author Rubel Mahmud (Sujan)
 * @link https://github.com/vxlrubel
 */

// directly access denied
defined('ABSPATH') || exit;

global $product;

$attachment_ids = $product->get_gallery_image_ids();

if( $attachment_ids && $product->get_image_id() ):
   echo "<div class=\"SmallImg d-flex\">\n";
   foreach ( $attachment_ids as $attachment_id ) {
      $url = wp_get_attachment_url( $attachment_id );
      printf(
         '<div><a href="%s" data-zoom-id="jeans" data-image="%s" data-options="cssClass: mz-show-arrows;"><img src="%s" alt=""></a></div>',
         $url,
         $url,
         $url
      );
   }
   echo "</div>\n";
endif;