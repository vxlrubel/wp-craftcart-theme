<?php

/**
 * Modify woocommerce action hooks and filter hooks.
 * 
 * @package Craft_Cart
 * @version 1.0
 * @since 1.0
 * @author Rubel Mahmud (Sujan)
 * @link https://github.com/vxlrubel
 */

// directly access denied
defined('ABSPATH') || exit;


/**
 * modify woocommerce breadcrumb
 *
 * @param [type] $args
 * @return $args
 */
function cc_wc_breadcrumb( $args ){
   // modify key of array
   $args['wrap_before'] = '<ul>';
   $args['wrap_after']  = '</ul>';

   return $args;
}

add_filter( 'woocommerce_breadcrumb_defaults', 'cc_wc_breadcrumb' );

function cc_wc_catalog_orderby( $items ){

   $items['name'] = 'Name';
   return $items;
}
add_filter( 'woocommerce_catalog_orderby', 'cc_wc_catalog_orderby' );


function cc_wc_remove_actions(){
   // remove woocommerce sidebar
   remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
}

add_action( 'init', 'cc_wc_remove_actions' );




/**
 * custom woocomerce tab add inside the single product page
 *
 * @return void
 */
function _cb_cc_wc_tab_information(){
   echo 'Information';
}

function cc_wc_add_custom_tab( array $items ){

   $items['information'] = [
      'title'    => 'Information',
      'priority' => 15,
      'callback' => '_cb_cc_wc_tab_information'
   ];
   return $items;
}

add_filter( 'woocommerce_product_tabs', 'cc_wc_add_custom_tab' );