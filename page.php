<?php

// get the header content
get_header();

/**
 * page content before element
 * cc_page_before_content()
 * priroty 10
 * 
 * @return void
 */
 do_action( 'cc_page_before_content' );


/**
 * Load the page content
 * @return void
 */
the_content();


/**
 * page content after element
 * cc_page_after_content()
 * priroty 10
 * 
 * @return void
 */
do_action( 'cc_page_after_content' );

// get the footer content
get_footer();