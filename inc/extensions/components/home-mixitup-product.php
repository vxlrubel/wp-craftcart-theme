<?php

// directly access denied
defined('ABSPATH') || exit;


/**
 * Furniture section
 * 
 * @return void
 */
Redux::set_section(
	$opt_name,
	[
      'id'         => 'cc-homepage-product-furniture',
      'title'      => esc_html__( 'Furniture', CC_DOMAIN ),
      'desc'       => esc_html__( 'This is a WooCommerce feature. It\'s allow to set category and showing the product inside the mixitup. Showing the result which category you added.', CC_DOMAIN ),
      'subsection' => true,
      'fields'     => [
         [
            'id'       => 'cc-homepage-product-furniture-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Visibility', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable section.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Enable to show the section inside the front-end.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable',
         ],
         [
            'id'       => 'cc-homepage-product-furniture-title',
            'type'     => 'text',
            'title'    => esc_html__( 'Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the furniture section title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'You may able to chnage the furniture title from here.', CC_DOMAIN ),
            'default'  => esc_html__( 'Furniture', CC_DOMAIN ),
            'required' => ['cc-homepage-product-furniture-visibility', '=', true ],
            'validate' => [ 'not_empty', 'no_html', 'no_special_chars' ]
         ],
         [
            'id'       => 'cc-homepage-product-furniture-cat',
            'type'     => 'multi_text',
            'title'    => esc_html__( 'Category', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the product category.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set the category name which you want to show inside website.', CC_DOMAIN ),
            'default'  => ['0'=>'uncategorized'],
            'required' => ['cc-homepage-product-furniture-visibility', '=', true ],
            'validate' => [ 'not_empty', 'no_html', 'no_special_chars' ]
         ],
      ]
   ]
);


/**
 * product light section
 * 
 * @return void
 */
Redux::set_section(
	$opt_name,
	[
      'id'         => 'cc-homepage-product-light',
      'title'      => esc_html__( 'Light', CC_DOMAIN ),
      'desc'       => esc_html__( 'This is a WooCommerce feature. It\'s allow to set category and showing the product inside the mixitup. Showing the result which category you added.', CC_DOMAIN ),
      'subsection' => true,
      'fields'     => [
         [
            'id'       => 'cc-homepage-product-light-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Visibility', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable section.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Enable to show the section inside the front-end.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable',
         ],
         [
            'id'       => 'cc-homepage-product-light-title',
            'type'     => 'text',
            'title'    => esc_html__( 'Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the light section title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'You may able to chnage the light section title from here.', CC_DOMAIN ),
            'default'  => esc_html__( 'light', CC_DOMAIN ),
            'required' => ['cc-homepage-product-light-visibility', '=', true ],
            'validate' => [ 'not_empty', 'no_html', 'no_special_chars' ]
         ],
         [
            'id'       => 'cc-homepage-product-light-cat',
            'type'     => 'multi_text',
            'title'    => esc_html__( 'Category', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the product category.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set the category name which you want to show inside website.', CC_DOMAIN ),
            'default'  => ['0'=>'uncategorized'],
            'required' => ['cc-homepage-product-light-visibility', '=', true ],
            'validate' => [ 'not_empty', 'no_html', 'no_special_chars' ]
         ],
      ]
   ]
);


/**
 * product light section
 * 
 * @return void
 */
Redux::set_section(
	$opt_name,
	[
      'id'         => 'cc-homepage-product-pet_suplies',
      'title'      => esc_html__( 'Pet Suplies', CC_DOMAIN ),
      'desc'       => esc_html__( 'This is a WooCommerce feature. It\'s allow to set category and showing the product inside the mixitup. Showing the result which category you added.', CC_DOMAIN ),
      'subsection' => true,
      'fields'     => [
         [
            'id'       => 'cc-homepage-product-pet_suplies-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Visibility', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable section.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Enable to show the section inside the front-end.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable',
         ],
         [
            'id'       => 'cc-homepage-product-pet_suplies-title',
            'type'     => 'text',
            'title'    => esc_html__( 'Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the section title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'You may able to chnage the pet suplies section title from here.', CC_DOMAIN ),
            'default'  => esc_html__( 'Pet Suplies', CC_DOMAIN ),
            'required' => ['cc-homepage-product-pet_suplies-visibility', '=', true ],
            'validate' => [ 'not_empty', 'no_html', 'no_special_chars' ]
         ],
         [
            'id'       => 'cc-homepage-product-pet_suplies-cat',
            'type'     => 'multi_text',
            'title'    => esc_html__( 'Category', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the product category.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set the category name which you want to show inside website.', CC_DOMAIN ),
            'default'  => ['0'=>'uncategorized'],
            'required' => ['cc-homepage-product-pet_suplies-visibility', '=', true ],
            'validate' => [ 'not_empty', 'no_html', 'no_special_chars' ]
         ],
      ]
   ]
);

/**
 * product kitchen section
 * 
 * @return void
 */
Redux::set_section(
	$opt_name,
	[
      'id'         => 'cc-homepage-product-kitchen',
      'title'      => esc_html__( 'Kitchen', CC_DOMAIN ),
      'desc'       => esc_html__( 'This is a WooCommerce feature. It\'s allow to set category and showing the product inside the mixitup. Showing the result which category you added.', CC_DOMAIN ),
      'subsection' => true,
      'fields'     => [
         [
            'id'       => 'cc-homepage-product-kitchen-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Visibility', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable section.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Enable to show the section inside the front-end.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable',
         ],
         [
            'id'       => 'cc-homepage-product-kitchen-title',
            'type'     => 'text',
            'title'    => esc_html__( 'Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the section title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'You may able to chnage the kitchen section title from here.', CC_DOMAIN ),
            'default'  => esc_html__( 'Kitchen', CC_DOMAIN ),
            'required' => ['cc-homepage-product-kitchen-visibility', '=', true ],
            'validate' => [ 'not_empty', 'no_html', 'no_special_chars' ]
         ],
         [
            'id'       => 'cc-homepage-product-kitchen-cat',
            'type'     => 'multi_text',
            'title'    => esc_html__( 'Category', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the product category.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set the category name which you want to show inside website.', CC_DOMAIN ),
            'default'  => ['0'=>'uncategorized'],
            'required' => ['cc-homepage-product-kitchen-visibility', '=', true ],
            'validate' => [ 'not_empty', 'no_html', 'no_special_chars' ]
         ],
      ]
   ]
);


/**
 * product bedding section
 * 
 * @return void
 */
Redux::set_section(
	$opt_name,
	[
      'id'         => 'cc-homepage-product-bedding',
      'title'      => esc_html__( 'Bedding', CC_DOMAIN ),
      'desc'       => esc_html__( 'This is a WooCommerce feature. It\'s allow to set category and showing the product inside the mixitup. Showing the result which category you added.', CC_DOMAIN ),
      'subsection' => true,
      'fields'     => [
         [
            'id'       => 'cc-homepage-product-bedding-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Visibility', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable section.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Enable to show the section inside the front-end.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable',
         ],
         [
            'id'       => 'cc-homepage-product-bedding-title',
            'type'     => 'text',
            'title'    => esc_html__( 'Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the section title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'You may able to chnage the bedding section title from here.', CC_DOMAIN ),
            'default'  => esc_html__( 'Bedding', CC_DOMAIN ),
            'required' => ['cc-homepage-product-bedding-visibility', '=', true ],
            'validate' => [ 'not_empty', 'no_html', 'no_special_chars' ]
         ],
         [
            'id'       => 'cc-homepage-product-bedding-cat',
            'type'     => 'multi_text',
            'title'    => esc_html__( 'Category', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the product category.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set the category name which you want to show inside website.', CC_DOMAIN ),
            'default'  => ['0'=>'uncategorized'],
            'required' => ['cc-homepage-product-bedding-visibility', '=', true ],
            'validate' => [ 'not_empty', 'no_html', 'no_special_chars' ]
         ],
      ]
   ]
);