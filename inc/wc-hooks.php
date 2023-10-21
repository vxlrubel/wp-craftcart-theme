<?php

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