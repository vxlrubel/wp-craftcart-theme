<?php

// directly access denied
defined('ABSPATH') || exit;
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
