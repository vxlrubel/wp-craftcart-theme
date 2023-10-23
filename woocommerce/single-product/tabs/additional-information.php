<?php

/**
 * Modify tab additional information
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

do_action( 'woocommerce_product_additional_information', $product );


