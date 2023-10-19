<?php

// directly access denied
defined('ABSPATH') || exit;

// create custom function
require_once dirname(__FILE__) . '/template.php';

// modify defaults filter hooks
require_once dirname(__FILE__) . '/filter-hooks.php';

// create custom action hook
require_once dirname(__FILE__) . '/action-hooks.php';

// theme options redux framework
require_once dirname(__FILE__) . '/theme-options/redux-core/framework.php';

// theme options file
// require_once dirname(__FILE__) . '/theme-options/sample/sample-config.php';

require_once dirname(__FILE__) . '/options.php';

/**
 * require all the core classes
 * 
 * @return void
 */
$classes = [
    'tgm-plugin-activation',
    'activation',
];

foreach ( $classes as $class ) {
    // get all the file name
    $file = dirname(__FILE__) . "/classes/class-{$class}.php";

    // prepare file for include if exists
    $files = ! file_exists( $file ) ? cc_error( "This file {$file} is not exists.") : $file;

    // require the file
    require_once $files;
}

/**
 * require all the front-end class
 * 
 * @return void
 */
$frontend_classes = [
    'enqueue-scripts',
];

foreach ( $frontend_classes as $class_file ) {

    // get all the file name
    $file = dirname(__FILE__) . "/classes/front-end/class-{$class_file}.php";

    // prepare file for include if exists
    $files = ! file_exists( $file ) ? cc_error( "This file {$file} is not exists.") : $file;

    // require the file
    require_once $files;
}


/**
 * require all the widgets item
 * inside the foreach loop
 * 
 * @return void
 */
$widgets_item = [
    'recent-blog'
];

foreach ( $widgets_item as $item ) {
    // get the widget file name
    $widget = dirname(__FILE__) . "/widgets/class-{$item}.php";

    // prepare file to require
    $widgets = file_exists( $widget ) ? $widget : cc_error("This file {$widget} not exists.");
    
    require_once $widgets;

}
