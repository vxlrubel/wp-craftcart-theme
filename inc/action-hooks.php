<?php

// directly access denied
defined('ABSPATH') || exit;

/**
 * page content before div element
 *
 * @return void
 */
function cc_page_before_content(){
    echo "<div class=\"clearfix page-top-margin\"\n><div class=\"container\">\n";
}

add_action( 'cc_page_before_content', 'cc_page_before_content', 10 );


/**
 * page content after div element
 *
 * @return void
 */
function cc_page_after_content(){
    echo "</div>\n</div>\n";
}

add_action( 'cc_page_after_content', 'cc_page_after_content', 10 );