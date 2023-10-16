<?php

// directly access denied
defined('ABSPATH') || exit;

require_once dirname(__FILE__) . '/template.php';


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
