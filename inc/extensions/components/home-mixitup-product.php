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
      'id'         => 'cc-homepage-product-furniture',
      'title'      => esc_html__( 'Furniture', CC_DOMAIN ),
      'subtitle'   => esc_html__( 'Change the furniture section from here.', CC_DOMAIN ),
      'desc'       => esc_html__( 'Change the furniture section from here.', CC_DOMAIN ),
      'subsection' => true,
      'fields'     => [
         [
            'id'       => 'cc-homepage-product-furniture-title',
            'type'     => 'text',
            'title'    => esc_html__( 'Furniture', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'You may able to chnage the furniture title from here.', CC_DOMAIN ),
            'default'  => esc_html__( 'Furniture', CC_DOMAIN ),
         ],
         [
            'id'       => 'cc-homepage-product-furniture-cat',
            'type'     => 'multi_text',
            'title'    => esc_html__( 'Category', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the product category.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set the category name which you want to show inside website.', CC_DOMAIN ),
            'default'  => ['0'=>'accessories'],
         ],
      ]
   ]
);