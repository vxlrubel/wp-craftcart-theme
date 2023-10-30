<?php

// directly access denied
defined('ABSPATH') || exit;


Redux::set_section(
	$opt_name,
	[
                'id'       => 'cc-homepage',
                'title'    => esc_html__( 'Homepage', CC_DOMAIN ),
                'subtitle' => esc_html__( 'Homepage Setting Options', CC_DOMAIN ),
                'desc'     => esc_html__( 'Change all the things of homepage.', CC_DOMAIN ),
                'icon'     => 'el el-home',
                'fields'   => [
                        [
                                'id'       => 'cc-homepage-content-sorter',
                                'type'     => 'sorter',
                                'title'    => esc_html__( 'Homepage content management', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Enable or Desable content using drap and drop method.', CC_DOMAIN ),
                                'compiler' => 'true',
                                'options'  => [
                                       'enabled'  => [
                                                'cc_hero_area'           => 'Hero Section',
                                                'cc_services_categories' => 'Service Categories',
                                                'cc_feature_brand'       => 'Feature Brand',
                                                'cc_populer_categories'  => 'Populer Categories',
                                                'cc_flash_sale'          => 'Flash Sale',
                                                'cc_furniture'           => 'Furniture',
                                                'cc_light'               => 'Light',
                                                'cc_pet_supplies'        => 'Pet Supplies',
                                                'cc_kitchen'             => 'Kitchen',
                                                'cc_bedding'             => 'Bedding',
                                                'cc_partners'            => 'Partners'
                                       ],
                                       'disabled' => [
                                                'cc_banner_1' => 'Banner 1',
                                                'cc_banner_2' => 'Banner 2',
                                                'cc_banner_3' => 'Banner 3'
                                       ]
                                ]
                        ]
                ]
	]
);


/**
 * Hero section of home page
 * 
 * @return void
 */
Redux::set_section(
	$opt_name,
	[
                'id'         => 'cc-homepage-content',
                'title'      => esc_html__( 'Hero Section', CC_DOMAIN ),
                'subtitle'   => esc_html__( 'Change hero section elements', CC_DOMAIN ),
                'desc'       => esc_html__( 'Change or modify hero section.', CC_DOMAIN ),
                'subsection' => true,
                'fields'     => [
                        [
                                'id'       => 'cc-categories-visibility',
                                'type'     => 'switch',
                                'title'    => esc_html__( 'Category Menu', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Enable/Disable Category Menu.', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Enable to show the category menu in the homepage.', CC_DOMAIN ),
                                'default'  => true,
                                'on'       => 'Enable',
                                'off'      => 'Disable'
                        ],
                        [
                                'id'       => 'cc-homeslider-visibility',
                                'type'     => 'switch',
                                'title'    => esc_html__( 'Home Slider', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Enable/Disable Home Slider.', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Enable to show the Homeslider in hero section.', CC_DOMAIN ),
                                'default'  => true,
                                'on'       => 'Enable',
                                'off'      => 'Disable'
                        ],
                        [
                                'id'              => 'cc-homeslider-gallery',
                                'type'            => 'multi_media',
                                'title'           => esc_html__( 'Slider Image', CC_DOMAIN ),
                                'subtitle'        => esc_html__( 'Upload slider images.', CC_DOMAIN ),
                                'desc'            => esc_html__( 'Upload multiple image to slide.', CC_DOMAIN ),
                                'required'        => [ 'cc-homeslider-visibility', '=', true ],
                                'max_file_upload' => 20
                        ],
                        [
                                'id'       => 'cc-home-hero-banner-visibility',
                                'type'     => 'switch',
                                'title'    => esc_html__( 'Banner', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Enable/Disable Hero section banner.', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Enable to show the banner into top of the section.', CC_DOMAIN ),
                                'default'  => true,
                                'on'       => 'Enable',
                                'off'      => 'Disable'
                        ],
                        [
                                'id'              => 'cc-home-hero-banner-items',
                                'type'            => 'multi_media',
                                'title'           => esc_html__( 'Select Banner', CC_DOMAIN ),
                                'subtitle'        => esc_html__( 'Upload banner images.', CC_DOMAIN ),
                                'desc'            => esc_html__( 'Upload multiple image to banner. (only 3 images will receive.)', CC_DOMAIN ),
                                'required'        => [ 'cc-home-hero-banner-visibility', '=', true ],
                                'max_file_upload' => 3
                        ],
                ]
        ]
);


/**
 * sert service list
 */
Redux::set_section(
	$opt_name,
	[
                'id'         => 'cc-homepage-service-list',
                'title'      => esc_html__( 'Service List', CC_DOMAIN ),
                'subtitle'   => esc_html__( 'Change service list item', CC_DOMAIN ),
                'desc'       => esc_html__( 'Change or modify Service list items.', CC_DOMAIN ),
                'subsection' => true,
                'fields'     => [
                        [
                                'id'       => 'cc-homepage-service-list-visibility',
                                'type'     => 'switch',
                                'title'    => esc_html__( 'Service List', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Enable/Disable service list.', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Enable to show the service list in the homepage.', CC_DOMAIN ),
                                'default'  => true,
                                'on'       => 'Enable',
                                'off'      => 'Disable'
                        ],
                        [
                                'id'       => 'cc-homepage-service-list-shipping',
                                'type'     => 'text',
                                'title'    => esc_html__( 'Shipping', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Set shipping title.', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Set shipping title here.', CC_DOMAIN ),
                                'default'  => 'Free Shipping!',
                                'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
                                'validate' => 'no_html'
                        ],
                        [
                                'id'       => 'cc-homepage-service-list-shipping-subtitle',
                                'type'     => 'text',
                                'title'    => esc_html__( 'Shipping Subtitle', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Set shipping subtitle.', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Set shipping subtitle here.', CC_DOMAIN ),
                                'default'  => 'On Orders Over 2000 Taka.',
                                'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
                                'validate' => 'no_html'
                        ],
                        [
                                'id'       => 'cc-homepage-service-list-shipping-subtitle-divide',
                                'type'     => 'divide',
                        ],
                        [
                                'id'       => 'cc-homepage-service-list-exchange',
                                'type'     => 'text',
                                'title'    => esc_html__( 'Exchange', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Set exchange title.', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Set exchange title here.', CC_DOMAIN ),
                                'default'  => 'Exchange Policy',
                                'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
                                'validate' => 'no_html'
                        ],
                        [
                                'id'       => 'cc-homepage-service-list-exchange-subtitle',
                                'type'     => 'text',
                                'title'    => esc_html__( 'Exchange Subtitle', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Set exchange subtitle.', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Set exchange subtitle here.', CC_DOMAIN ),
                                'default'  => 'Fast & Hassle Free',
                                'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
                                'validate' => 'no_html'
                        ],
                        [
                                'id'       => 'cc-homepage-service-list-exchange-subtitle-divide',
                                'type'     => 'divide',
                        ],
                        [
                                'id'       => 'cc-homepage-service-list-support',
                                'type'     => 'text',
                                'title'    => esc_html__( 'Support', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Set support title.', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Set support title here.', CC_DOMAIN ),
                                'default'  => 'Online Support ',
                                'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
                                'validate' => 'no_html'
                        ],
                        [
                                'id'       => 'cc-homepage-service-list-support-subtitle',
                                'type'     => 'text',
                                'title'    => esc_html__( 'Support Subtitle', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Set support subtitle.', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Set support subtitle here.', CC_DOMAIN ),
                                'default'  => '24/7 Everyday',
                                'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
                                'validate' => 'no_html'
                        ],
                        [
                                'id'       => 'cc-homepage-service-list-support-subtitle-divide',
                                'type'     => 'divide',
                        ],
                        [
                                'id'       => 'cc-homepage-service-list-reward',
                                'type'     => 'text',
                                'title'    => esc_html__( 'Reward', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Set reward title.', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Set reward title here.', CC_DOMAIN ),
                                'default'  => 'Reward Points',
                                'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
                                'validate' => 'no_html'
                        ],
                        [
                                'id'       => 'cc-homepage-service-list-reward-subtitle',
                                'type'     => 'text',
                                'title'    => esc_html__( 'Reward Subtitle', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Set reward subtitle.', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Set reward subtitle here.', CC_DOMAIN ),
                                'default'  => 'Earn 1% Cashback',
                                'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
                                'validate' => 'no_html'
                        ],
                        [
                                'id'       => 'cc-homepage-service-list-reward-subtitle-divide',
                                'type'     => 'divide',
                        ],
                        [
                                'id'       => 'cc-homepage-service-list-payment',
                                'type'     => 'text',
                                'title'    => esc_html__( 'Payment', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Set payment title.', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Set payment title here.', CC_DOMAIN ),
                                'default'  => 'Payment Method',
                                'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
                                'validate' => 'no_html'
                        ],
                        [
                                'id'       => 'cc-homepage-service-list-payment-subtitle',
                                'type'     => 'text',
                                'title'    => esc_html__( 'Payment Subtitle', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Set payment subtitle.', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Set payment subtitle here.', CC_DOMAIN ),
                                'default'  => 'Credit Card, bKash & PayPal.',
                                'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
                                'validate' => 'no_html'
                        ]
                ]
        ]
);