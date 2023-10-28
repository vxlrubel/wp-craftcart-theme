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
// function _cb_cc_wc_tab_information( $urwna ){

//    pre( $urwna );
   
// }

// function cc_wc_add_custom_tab( array $default ){

//    $default['information'] = [
//       'title'    => 'Information',
//       'priority' => 15,
//       'callback' => '_cb_cc_wc_tab_information'
//    ];

//    return $default;
// }

// add_filter( 'woocommerce_product_tabs', 'cc_wc_add_custom_tab' );

/**
 * add custom field for custom delivery charge.
 *
 * @return void
 */
function cc_custom_delivery_charge() {
   woocommerce_wp_text_input(
      [
         'id'          => '_cc_custom_delivary_inside_location',
         'label'       => 'Inside Location',
         'description' => 'Type location like [ Dhaka ]',
      ]
   );
   woocommerce_wp_text_input(
      [
         'id'          => '_cc_custom_delivary_charge',
         'label'       => 'Delivery Charge',
         'description' => 'Enter the delivary charge here. [ Only neumeric value will be allow ]',
      ]
   );
   woocommerce_wp_text_input(
      [
         'id'          => '_cc_custom_delivary_outside_location',
         'label'       => 'Outside Location',
         'description' => 'Type location like [ Pirojpur ]',
      ]
   );
   woocommerce_wp_text_input(
      [
         'id'          => '_cc_custom_delivary_charge_outside',
         'label'       => 'Outside Delivery Charge',
         'description' => 'Enter the delivary charge here. [ Only neumeric value will be allow ]',
      ]
   );
}
add_action('woocommerce_product_options_general_product_data', 'cc_custom_delivery_charge');


/**
 * save the custom data
 *
 * @param [type] $post_id
 * @return void
 */
function cc_save_custom_delivery_charge($post_id) {
   
   // update the value of custom field
   $inside_location = isset($_POST['_cc_custom_delivary_inside_location']) ? $_POST['_cc_custom_delivary_inside_location'] : '';

   $inside_charge = isset($_POST['_cc_custom_delivary_charge']) ? $_POST['_cc_custom_delivary_charge'] : '';

   $outside_location = isset($_POST['_cc_custom_delivary_outside_location']) ? $_POST['_cc_custom_delivary_outside_location'] : '';

   $outside_charge = isset($_POST['_cc_custom_delivary_charge_outside']) ? $_POST['_cc_custom_delivary_charge_outside'] : '';

   update_post_meta($post_id, '_cc_custom_delivary_inside_location', sanitize_text_field($inside_location));

   update_post_meta($post_id, '_cc_custom_delivary_charge', sanitize_text_field($inside_charge));

   update_post_meta($post_id, '_cc_custom_delivary_outside_location', sanitize_text_field($outside_location));

   update_post_meta($post_id, '_cc_custom_delivary_charge_outside', sanitize_text_field($outside_charge));

}
add_action('woocommerce_process_product_meta', 'cc_save_custom_delivery_charge');
