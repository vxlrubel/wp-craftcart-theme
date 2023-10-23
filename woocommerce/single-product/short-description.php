<?php

/**
 * short descriptions
 * 
 * @package Craft_Cart
 * @version 1.0
 * @since 1.0
 * @author Rubel Mahmud (Sujan)
 * @link https://github.com/vxlrubel
 */

// directly access denied
defined('ABSPATH') || exit;

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
	return;
}

printf( '<p class="dscr">%s</p>', $short_description );