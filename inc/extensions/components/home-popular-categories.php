<?php

// directly access denied
defined('ABSPATH') || exit;


/**
 * Partners section
 * 
 * @return void
 */
Redux::set_section(
	$opt_name,
	[
      'id'         => 'cc-homepage-popular-categories-content',
      'title'      => esc_html__( 'Popular Categories', CC_DOMAIN ),
      'subtitle'   => esc_html__( 'Popular categories section', CC_DOMAIN ),
      'desc'       => esc_html__( 'Change the section if you want.', CC_DOMAIN ),
      'subsection' => true,
      'fields'     => [
         [
            'id'       => 'cc-homepage-popular-categories-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Visibility', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable popular categories ares.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Enable to show the popular-categories area.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-homepage-popular-categories-title',
            'type'     => 'text',
            'title'    => esc_html__( 'Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set the popular categories title.', CC_DOMAIN ),
            'default'  => 'Our Partners',
            'required' => ['cc-homepage-popular-categories-visibility', '=', true],
            'validate' => 'no_html'
         ],
         [
            'id'          => 'cc-homepage-popular-categories',
            'type'        => 'repeater',
            'title'       => esc_html__( 'Categories Image', CC_DOMAIN ),
            'subtitle'    => esc_html__( 'Upload categories image.', CC_DOMAIN ),
            'desc'        => esc_html__( 'Upload categories image. image dimention: (300*200)', CC_DOMAIN ),
            'hint'        => ['content'=> 'Image categories will be (300*200)px.'],
            'item_name'   => '',
            'sortable'    => true,
            'active'      => false,
            'collapsible' => false,
            'required'    => ['cc-homepage-popular-categories-visibility', '=', true],
            'fields'      => [
               [
                  'id'      => 'cc-homepage-popular-categorie-image',
                  'type'    => 'media',
                  'url'     => false,
                  'default' => ['url'=> CC_ASSETS_IMG . 'feature-brand/default-popular-category.jpg']
               ],
               [
                  'id'       => 'cc-homepage-popular-categorie-name',
                  'type'     => 'text',
                  'default'  => 'Furniture',
                  'validate' => 'no_html'
               ],
               [
                  'id'       => 'cc-homepage-popular-categorie-url',
                  'type'     => 'text',
                  'default'  => home_url('/'),
                  'validate' => 'url'
               ]
            ]
         ]
      ]
   ]
);