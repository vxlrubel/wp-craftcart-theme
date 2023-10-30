<?php

// directly access denied
defined('ABSPATH') || exit;

/**
 * banner section
 * 
 * @return void
 */
Redux::set_section(
	$opt_name,
	[
      'id'         => 'cc-homepage-banner-content',
      'title'      => esc_html__( 'Banner', CC_DOMAIN ),
      'subtitle'   => esc_html__( 'Change the banner', CC_DOMAIN ),
      'desc'       => esc_html__( 'Change the banner image from here.', CC_DOMAIN ),
      'subsection' => true,
      'fields'     => [
         [
            'id'       => 'cc-homepage-banner1-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'First Banner', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable Banner.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Enable to show the first banner into the homepage.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'  
         ],
         [
            'id'       => 'cc-homepage-banner1',
            'type'     => 'media',
            'title'    => esc_html__( 'Banner Image', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Change the banner image.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change the banner image to show inside the homepage.', CC_DOMAIN ),
            'default'  => [ 'url' => CC_ASSETS_IMG . 'banners/default-banner-1.jpg'],
            'required' => [ 'cc-homepage-banner1-visibility', '=', true ],
            'url'      => false
         ],
         [
            'id'       => 'cc-homepage-banner2-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Second Banner', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable Banner.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Enable to show the first banner into the homepage.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-homepage-banner2',
            'type'     => 'media',
            'title'    => esc_html__( 'Banner Image', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Change the banner image.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change the banner image to show inside the homepage.', CC_DOMAIN ),
            'default'  => [ 'url' => CC_ASSETS_IMG . 'banners/default-banner-2.jpg'],
            'required' => [ 'cc-homepage-banner2-visibility', '=', true ],
            'url'      => false
         ],
         [
            'id'       => 'cc-homepage-banner3-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Third Banner', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable Banner.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Enable to show the first banner into the homepage.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'  
         ],
         [
            'id'       => 'cc-homepage-banner3',
            'type'     => 'media',
            'title'    => esc_html__( 'Banner Image', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Change the banner image.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change the banner image to show inside the homepage.', CC_DOMAIN ),
            'default'  => [ 'url' => CC_ASSETS_IMG . 'banners/default-banner-3.jpg'],
            'required' => [ 'cc-homepage-banner3-visibility', '=', true ],
            'url'      => false
         ]
      ]
   ]
);