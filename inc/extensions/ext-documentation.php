<?php

// directly access denied
defined('ABSPATH') || exit;


// $wisshlist_content


$theme_documentation = '';

if( file_exists( dirname(__FILE__) . '/doc/theme-documention.html' ) ){

   global $wp_filesystem;

   $cc_file_system = Redux_Filesystem::get_instance();

   $theme_documentation = $wp_filesystem->get_contents( dirname(__FILE__) . '/doc/theme-documention.html' );
}

/**
 * Woocommerce Section
 */
Redux::set_section(
	$opt_name,
	[
      'id'     => 'cc-commerce-theme-documentation',
      'title'  => esc_html__( 'Documentation', CC_DOMAIN ),
      'icon'   => 'el el-hearing-impaired',
      'fields' => [
         [
            'id'      => 'cc-commerce-theme-documentation-content',
            'type'    => 'raw',
            'title'   => esc_html__( 'Theme Documentation', CC_DOMAIN ),
            'content' => $theme_documentation
         ]
         
      ]
	]
);