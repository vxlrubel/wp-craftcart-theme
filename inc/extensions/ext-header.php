<?php

// directly acess denied
defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	[
		'id'       => 'cc-header',
		'title'    => esc_html__( 'Header', CC_DOMAIN ),
		'subtitle' => esc_html__( 'Header Setting Options', CC_DOMAIN ),
		'desc'     => esc_html__( 'Change all the things of header section.', CC_DOMAIN ),
		'icon'     => 'el el-view-mode',
		'fields'   => [
			[
				'id'       => 'cc-header-enable',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enabel/Desable', CC_DOMAIN ),
				'subtitle' => esc_html__( 'You may enable or desable header option', CC_DOMAIN ),
				'default'  => true,
				'on'       => 'Enabled',
				'off'      => 'Disabled',
			],
			[
				'id'   => 'devide-logo',
				'type' => 'divide'
			],
			[
				'id'       => 'cc-header-logo',
				'type'     => 'media',
				'title'    => esc_html__( 'Logo', CC_DOMAIN ),
				'subtitle' => esc_html__( 'Upload Logo', CC_DOMAIN ),
				'default'  => ['url' => CC_ASSETS . 'img/Jamidar.png'],
				'url'      => false,
				'validate' => 'url',
				'required' => ['cc-header-enable', '=', true ]
			],
			[
				'id'   => 'devide-search',
				'type' => 'divide'
			],
			[
				'id'       => 'cc-header-search',
				'type'     => 'checkbox',
				'title'    => esc_html__( 'Search', CC_DOMAIN ),
				'subtitle' => esc_html__( 'Enable/Desable Search Option.', CC_DOMAIN ),
				'default'  => true,
				'required' => ['cc-header-enable', '=', true ]
			],
			[
				'id'   => 'devide-woocommerce-menu',
				'type' => 'divide'
			],
			[
				'id'       => 'cc-header-woocommerce',
				'type'     => 'checkbox',
				'title'    => esc_html__( 'Woocommerce Menu', CC_DOMAIN ),
				'subtitle' => esc_html__( 'Enable/Desable Woocommerce Option.', CC_DOMAIN ),
				'default'  => true,
				'required' => ['cc-header-enable', '=', true ]
			],
		]
	]
);