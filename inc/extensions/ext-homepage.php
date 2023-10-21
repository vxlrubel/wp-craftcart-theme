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