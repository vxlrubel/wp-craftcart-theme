<?php

// directly access denied
defined('ABSPATH') || exit;


/**
 * Feature brand
 * 
 * @return void
 */
Redux::set_section(
	$opt_name,
	[
      'id'         => 'cc-homepage-feature-brand-content',
      'title'      => esc_html__( 'Feature Brand', CC_DOMAIN ),
      'subtitle'   => esc_html__( 'Change the feature brand image', CC_DOMAIN ),
      'desc'       => esc_html__( 'Change the feature brand image.', CC_DOMAIN ),
      'subsection' => true,
      'fields'     => [
         [
            'id'       => 'cc-homepage-feature-brand-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Visibility', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable Feature brand.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Enable to show the feature brand.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-homepage-feature-brand-title',
            'type'     => 'text',
            'title'    => esc_html__( 'Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set the brand feature title.', CC_DOMAIN ),
            'default'  => 'Featured Brand',
            'required' => ['cc-homepage-feature-brand-visibility', '=', true],
            'validate' => 'no_html'
         ],
         [
            'id'          => 'cc-homepage-feature-brand',
            'type'        => 'repeater',
            'title'       => esc_html__( 'Brand Image', CC_DOMAIN ),
            'subtitle'    => esc_html__( 'Upload Feature brand image.', CC_DOMAIN ),
            'desc'        => esc_html__( 'Upload feature brand image. image dimention: (300*200)', CC_DOMAIN ),
            'hint'        => ['content'=> 'Image dimention will be (300*200)px.'],
            'item_name'   => '',
            'sortable'    => true,
            'active'      => false,
            'collapsible' => false,
            'required'    => ['cc-homepage-feature-brand-visibility', '=', true],
            'fields'      => [
               [
                  'id'      => 'cc-homepage-feature-brand-image',
                  'type'    => 'media',
                  'url'     => false,
                  'default' => ['url'=> CC_ASSETS_IMG . 'feature-brand/default-feature-brand.jpg']
               ]
            ]
         ]
      ]
   ]
);