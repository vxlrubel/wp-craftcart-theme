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
      'id'         => 'cc-homepage-flash-sale-content',
      'title'      => esc_html__( 'Flash Sale', CC_DOMAIN ),
      'subtitle'   => esc_html__( 'Flash Sale Area', CC_DOMAIN ),
      'desc'       => esc_html__( 'Change the the flash sale area.', CC_DOMAIN ),
      'subsection' => true,
      'fields'     => [
         [
            'id'       => 'cc-homepage-flash-sale-content-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Visibility', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable Flash Area.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Enable to show the flash sale area.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-homepage-flash-sale-title',
            'type'     => 'text',
            'title'    => esc_html__( 'Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Change the tile.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change the title from here.', CC_DOMAIN ),
            'default'  => 'Flash Sale',
            'validate' => 'no_html',
            'required' => [ 'cc-homepage-flash-sale-content-visibility', '=', true ]
         ],
         [
            'id'          => 'cc-homepage-flash-sale-end_date',
            'type'        => 'datetime',
            'title'       => esc_html__( 'End Date', CC_DOMAIN ),
            'subtitle'    => esc_html__( 'Set the End Date.', CC_DOMAIN ),
            'desc'        => esc_html__( 'Change the end date from here.', CC_DOMAIN ),
            'time-picker' => false,
            'placeholder' => 'Date only',
            'default'     => '10-11-2023',
            'required'    => [ 'cc-homepage-flash-sale-content-visibility', '=', true ]
         ]
      ]
   ]
);