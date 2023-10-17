<?php

// directly access denied
defined('ABSPATH') || exit;

if( ! function_exists('cc_error') ){
    function cc_error( $error_message = 'critical error' ){
        throw new Exception( $error_message );
    }
}

if( ! function_exists('cc_editor') ){
    function cc_editor(){
        if( is_user_logged_in() && current_user_can( 'edit_posts' ) )
            return true;
    }
}

/**
 * get the post title
 * get_cc_trim_post_title() this function working inside the loop
 * 
 * @param $string_width
 * @type [string]
 * @return $title;
 */
if( ! function_exists('get_cc_trim_post_title') ){
    function get_cc_trim_post_title( $string_width = 25 ){
        $title  = mb_strimwidth( get_the_title( get_the_ID() ), 0, $string_width );
        return $title;
    }
}
/**
 * get post content
 * get_cc_trim_post_content() this function working inside the loop
 * 
 * @param $string_width
 * @type [string]
 * @return $title;
 */
if( ! function_exists('get_cc_trim_post_content') ){
    function get_cc_trim_post_content( $string_width = 55 ){
        $title  = mb_strimwidth( get_the_content( get_the_ID() ), 0, $string_width );
        return $title;
    }
}