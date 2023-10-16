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