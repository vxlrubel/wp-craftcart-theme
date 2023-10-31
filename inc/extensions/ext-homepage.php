<?php

// directly access denied
defined('ABSPATH') || exit;


/**
 * include all the homepage components
 * 
 * @return void
 * @package Craft_Cart
 * @version 1.0
 */

$components = [	'main', 'hero', 'service-list', 'banner', 'feature-brand', 'partners', 'popular-categories' ];

foreach ( $components as $component ) {
    // get file name
    $file = dirname(__FILE__) . "/components/home-{$component}.php";

    // prepare file for include if exists
    $files = ! file_exists( $file ) ? cc_error( "This file {$component} is not exists.") : $file;

    // require the file
    require_once $files;
}