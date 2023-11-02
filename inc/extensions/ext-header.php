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
	]
);

/**
 * header top section 
 * 
 * @return void
 */
Redux::set_section(
	$opt_name,
	[
		'id'         => 'cc-header-top-section',
		'title'      => esc_html__( 'Top Section', CC_DOMAIN ),
		'subtitle'   => esc_html__( 'Header top Setting Options', CC_DOMAIN ),
		'desc'       => esc_html__( 'Change all the things of header top section.', CC_DOMAIN ),
		'subsection' => true,
		'fields'     => [
			[
				'id'       => 'cc-header-top-section-email',
				'type'     => 'text',
				'title'    => esc_html__( 'Email', CC_DOMAIN ),
				'subtitle' => esc_html__( 'Set the email', CC_DOMAIN ),
				'desc'     => esc_html__( 'Chnage the email', CC_DOMAIN ),
				'validate' => 'email',
				'default'  => 'example@domain.com'
			],
			[
				'id'       => 'cc-header-top-section-phone',
				'type'     => 'text',
				'title'    => esc_html__( 'Phone', CC_DOMAIN ),
				'subtitle' => esc_html__( 'Set the phone number.', CC_DOMAIN ),
				'desc'     => esc_html__( 'Chnage the phone number.', CC_DOMAIN ),
				'validate' => 'numeric',
				'default'  => '123456789'
			],
			[
				'id'          => 'cc-header-top-section-social',
				'type'        => 'repeater',
				'title'       => esc_html__( 'Social Links', CC_DOMAIN ),
				'subtitle'    => esc_html__( 'Set the social link into the top bar.', CC_DOMAIN ),
				'desc'        => esc_html__( 'Change the social links from here.', CC_DOMAIN ),
				'item_name'   => 'Add New',
				'sortable'    => true,
				'active'      => false,
				'collapsible' => false,
				'fields'      => [
					[
						'id'       => 'social-share-item-name',
						'type'     => 'text',
						'title'    => esc_html__( 'item name to remember.', CC_DOMAIN ),
						'validate' => 'not_empty',
						'default'  => 'Facebook'
					],
					[
						'id'       => 'social-share-class-name',
						'type'     => 'text',
						'title'    => esc_html__( 'Set Font-Awesome Class Name', CC_DOMAIN ),
						'validate' => 'not_empty',
						'default'  => 'fa-brands fa-facebook-f'
					],
					[
						'id'       => 'social-share-class-link',
						'type'     => 'text',
						'title'    => esc_html__( 'Set the social link.', CC_DOMAIN ),
						'validate' => 'url',
						'default'  => 'https://www.facebook.com/'
					],
				]
			],
		]
	]
);

/**
 * header middle section 
 * 
 * @return void
 */
Redux::set_section(
	$opt_name,
	[
		'id'         => 'cc-header-middle-section',
		'title'      => esc_html__( 'Middle Section', CC_DOMAIN ),
		'subtitle'   => esc_html__( 'Header middle Setting Options', CC_DOMAIN ),
		'desc'       => esc_html__( 'Change all the things of header middle section.', CC_DOMAIN ),
		'subsection' => true,
		'fields'   => [
			[
				'id'       => 'cc-header-enable',
				'type'     => 'switch',
				'title'    => esc_html__( 'Enabel/Desable', CC_DOMAIN ),
				'subtitle' => esc_html__( 'You may enable or desable header option', CC_DOMAIN ),
				'default'  => true,
				'on'       => 'Enabled',
				'off'      => 'Disabled'
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
				'required' => ['cc-header-enable', '=', true ]
			],
			[
				'id'   => 'devide-search',
				'type' => 'divide'
			],
			[
				'id'       => 'cc-header-search',
				'type'     => 'switch',
				'title'    => esc_html__( 'Search', CC_DOMAIN ),
				'subtitle' => esc_html__( 'Enable/Desable Search Option.', CC_DOMAIN ),
				'default'  => true,
				'required' => ['cc-header-enable', '=', true ],
				'on'       => 'Enable',
				'off'      => 'Disable',
			],
			[
				'id'   => 'devide-woocommerce-menu',
				'type' => 'divide'
			],
			[
				'id'       => 'cc-header-woocommerce',
				'type'     => 'switch',
				'title'    => esc_html__( 'Woocommerce Menu', CC_DOMAIN ),
				'subtitle' => esc_html__( 'Enable/Desable Woocommerce Option.', CC_DOMAIN ),
				'default'  => true,
				'required' => ['cc-header-enable', '=', true ],
				'on'       => 'Enable',
				'off'      => 'Disable',
			]
		]
	]
);

/**
 * header end section 
 * 
 * @return void
 */
Redux::set_section(
	$opt_name,
	[
		'id'         => 'cc-header-end-section',
		'title'      => esc_html__( 'Bottom Section', CC_DOMAIN ),
		'subtitle'   => esc_html__( 'Header bottom Setting Options', CC_DOMAIN ),
		'desc'       => esc_html__( 'Change all the things of header bottom section.', CC_DOMAIN ),
		'subsection' => true
	]
);