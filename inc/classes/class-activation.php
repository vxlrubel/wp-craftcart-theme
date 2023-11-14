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

		$plugins = [
			[
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => true,
			],
			[
				'name'      => 'YITH WooCommerce Wishlist',
				'slug'      => 'yith-woocommerce-wishlist',
				'required'  => true,
			],
			[
				'name'        => 'Litespeed Cache',
				'slug'        => 'litespeed-cache',
			],
			[
				'name'        => 'Rank Math',
				'slug'        => 'seo-by-rank-math',
			],
			[
				'name'        => 'Elementor Page Builder',
				'slug'        => 'elementor',
			],
	
		];
		$config = [
			'id'           => 'craft-cart',
			'default_path' => '',
			'menu'         => 'tgmpa-install-plugins',
			'has_notices'  => true, 
			'dismissable'  => true, 
			'dismiss_msg'  => '', 
			'is_automatic' => false,
			'message'      => '', 
		];
		tgmpa( $plugins, $config );
	}
}

