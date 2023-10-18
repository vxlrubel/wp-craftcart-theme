<?php

// directly access denied
defined('ABSPATH') || exit;

require_once dirname(__FILE__) . '/template.php';

require_once dirname(__FILE__) . '/add-filter-template.php';


// require all the front-end class

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


/**.
 * require all the widgets item
 * inside the foreach loop
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
