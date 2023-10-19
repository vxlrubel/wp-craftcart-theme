<?php

// namespace CC\Activate;
namespace CC\Plugins;
// directly access denied
defined('ABSPATH') || exit;

class Activation{

	public function __construct(){
		add_action( 'tgmpa_register', [ $this, 'activate' ] );
	}
	
	/**
	 * Activate require and recomended plugins
	 * 
	 * @package TGM_Plugin_Activation
	 * @return void
	 */
	public function activate(){
		$plugins = array(
			// array(
			// 	'name'               => 'TGM Example Plugin',
			// 	'slug'               => 'tgm-example-plugin',
			// 	'source'             => get_template_directory() . '/lib/plugins/tgm-example-plugin.zip',
			// 	'required'           => true,
			// 	'version'            => '',
			// 	'force_activation'   => false,
			// 	'force_deactivation' => false, 
			// 	'external_url'       => '', 
			// 	'is_callable'        => '',
			// ),
	
			// array(
			// 	'name'         => 'TGM New Media Plugin',
			// 	'slug'         => 'tgm-new-media-plugin',
			// 	'source'       => 'https://s3.amazonaws.com/tgm/tgm-new-media-plugin.zip',
			// 	'required'     => true,
			// 	'external_url' => 'https://github.com/thomasgriffin/New-Media-Image-Uploader',
			// ),
			array(
				'name'      => 'Adminbar Link Comments to Pending',
				'slug'      => 'adminbar-link-comments-to-pending',
				'source'    => 'https://github.com/jrfnl/WP-adminbar-comments-to-pending/archive/master.zip',
			),
			array(
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => true,
			),
			array(
				'name'        => 'WordPress SEO by Yoast',
				'slug'        => 'wordpress-seo',
				'is_callable' => 'wpseo_init',
			),
	
		);
		$config = array(
			'id'           => 'craft-cart',
			'default_path' => '',
			'menu'         => 'tgmpa-install-plugins',
			'has_notices'  => true, 
			'dismissable'  => true, 
			'dismiss_msg'  => '', 
			'is_automatic' => false,
			'message'      => '', 
		);
		tgmpa( $plugins, $config );
	}
}

