<?php

// directly access denied
defined('ABSPATH') || exit;

if( ! function_exists('cc_error') ){
    function cc_error( $error_message = 'critical error' ){
        throw new Exception( $error_message );
    }
}