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
      'id'         => 'cc-homepage-partners-content',
      'title'      => esc_html__( 'Partners', CC_DOMAIN ),
      'subtitle'   => esc_html__( 'Change the partners image', CC_DOMAIN ),
      'desc'       => esc_html__( 'Change the partners image.', CC_DOMAIN ),
      'subsection' => true,
      'fields'     => [
         [
            'id'       => 'cc-homepage-partners-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Visibility', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable Partners Area.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Enable to show the pertners area.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-homepage-partners-title',
            'type'     => 'text',
            'title'    => esc_html__( 'Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set the partners title.', CC_DOMAIN ),
            'default'  => 'Our Partners',
            'required' => ['cc-homepage-partners-visibility', '=', true],
            'validate' => 'no_html'
         ],
         [
            'id'          => 'cc-homepage-partners',
            'type'        => 'repeater',
            'title'       => esc_html__( 'Partners Image', CC_DOMAIN ),
            'subtitle'    => esc_html__( 'Upload Partners image.', CC_DOMAIN ),
            'desc'        => esc_html__( 'Upload Partners image. image dimention: (300*200)', CC_DOMAIN ),
            'hint'        => ['content'=> 'Image dimention will be (300*200)px.'],
            'item_name'   => '',
            'sortable'    => true,
            'active'      => false,
            'collapsible' => false,
            'required'    => ['cc-homepage-partners-visibility', '=', true],
            'fields'      => [
               [
                  'id'      => 'cc-homepage-partners-image',
                  'type'    => 'media',
                  'url'     => false,
                  'default' => ['url'=> CC_ASSETS_IMG . 'feature-brand/default-partners.jpg']
               ]
            ]
         ]
      ]
   ]
);