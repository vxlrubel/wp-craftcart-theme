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

// modify woocommerce breadcrumb
add_filter( 'woocommerce_breadcrumb_defaults', 'cc_wc_breadcrumb' );


/**
 * modify filter section from product page.
 *
 * @param [type] $items
 * @return $items
 */
function cc_wc_catalog_orderby( $items ){

   $items['name'] = 'Name';
   return $items;
}

// modify filter section from product page
add_filter( 'woocommerce_catalog_orderby', 'cc_wc_catalog_orderby' );


/**
 * remove default woocommerce sidebar
 *
 * @return void
 */
function cc_wc_remove_actions(){
   // remove woocommerce sidebar
   remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
}

// remove default woocommerce sidebar from product single page
add_action( 'init', 'cc_wc_remove_actions' );


/**
 * modify addicitonal template label and stucture
 *
 * @return void
 */
function cc_modify_descriptions(){
   // include additional template 
   wc_get_template('single-product/tabs/additional-information.php');
}


/**
 * modify the additional informations title
 *
 * @param [type] $args
 * @return $args
 */
function cc_additional_description( $args ){
   
   $args['additional_information'] = [
      'title'    => 'Description',
      'priority' => 20,
      'callback' => 'cc_modify_descriptions'
   ];

   return $args;
}

// modify additional tabs content
add_filter('woocommerce_product_tabs', 'cc_additional_description');


/**
 * add custom field inside the product in dashboard
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
 * save the custom meta and update
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

// update custom product meta
add_action( 'woocommerce_process_product_meta', 'cc_save_custom_delivery_charge' );
