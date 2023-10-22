<?php

// directly access denied
defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	[
      'id'       => 'cc-commerce',
      'title'    => esc_html__( 'WooCommerce', CC_DOMAIN ),
      'subtitle' => esc_html__( 'Change some Woocommerce stucture.', CC_DOMAIN ),
      'desc'     => esc_html__( 'Change WooCommerce stucture.', CC_DOMAIN ),
      'icon'     => 'el el-shopping-cart'
	]
);

// product page content section
Redux::set_section(
	$opt_name,
	[
      'id'         => 'cc-commerce-product',
      'title'      => esc_html__( 'Product Page', CC_DOMAIN ),
      'subtitle'   => esc_html__( 'Change the product page content.', CC_DOMAIN ),
      'desc'       => esc_html__( 'You may change some product page content', CC_DOMAIN ),
      'subsection' => true,
      'fields'     => [
         [
            'id'       => 'cc-product-banner-enable',
            'type'     => 'switch',
            'title'    => esc_html__( 'Enable/Desable', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable or desable banner', CC_DOMAIN ),
            'desc'     => esc_html__( 'You may change the options to enable to view banner in front-end.', CC_DOMAIN ),
            'on'       => 'Enable',
            'off'      => 'Disable',
            'default'  => true,
         ],
         [
            'id'       => 'cc-product-banner',
            'type'     => 'media',
            'title'    => esc_html__( 'Banner', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Change the banner', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change the product page banner of top section', CC_DOMAIN ),
            'default'  => [ 'url' => CC_ASSETS_IMG . 'banner-product-page-default.jpg' ],
            'url'      => false,
            'required' => [ 'cc-product-banner-enable', '=', true ]
         ],
         [
            'id'       => 'cc-product-banner-alt',
            'type'     => 'text',
            'title'    => esc_html__( 'Banner Alt Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Change the alt title', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change the alt title for SEO friendly.', CC_DOMAIN ),
            'default'  => 'banner title',
            'validate' => [ 'no_html', 'not_empty' ],
            'required' => [ 'cc-product-banner-enable', '=', true ]
         ],
         [
            'id'   => 'cc-product-banner-alt-divide',
            'type' => 'divide'
         ],
         [
            'id'       => 'cc-product-filter',
            'type'     => 'switch',
            'title'    => esc_html__( 'Filter', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable or desable filter', CC_DOMAIN ),
            'desc'     => esc_html__( 'You may change the options to enable to view filter options in front-end.', CC_DOMAIN ),
            'on'       => 'Enable',
            'off'      => 'Disable',
            'default'  => true,
         ],
         [
            'id'   => 'cc-product-filter-divide',
            'type' => 'divide'
         ],
         [
            'id'       => 'cc-product-add-cart',
            'type'     => 'switch',
            'title'    => esc_html__( 'Add To Cart', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable or desable Add To Cart', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change to enable to view the "Add To Cart" button in the front-end.', CC_DOMAIN ),
            'on'       => 'Enable',
            'off'      => 'Disable',
            'default'  => true,
         ],
         [
            'id'   => 'cc-product-add-cart-divide',
            'type' => 'divide'
         ],
         [
            'id'       => 'cc-product-pagination',
            'type'     => 'switch',
            'title'    => esc_html__( 'Pagination', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable or desable pagination', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change to enable to view the pagination in the front-end.', CC_DOMAIN ),
            'on'       => 'Enable',
            'off'      => 'Disable',
            'default'  => true,
         ]
      ]
	]
);


// product single page content
Redux::set_section(
	$opt_name,
	[
      'id'         => 'cc-commerce-product-single',
      'title'      => esc_html__( 'Single Page', CC_DOMAIN ),
      'subtitle'   => esc_html__( 'Change the single page content.', CC_DOMAIN ),
      'desc'       => esc_html__( 'You may change single page content', CC_DOMAIN ),
      'subsection' => true
	]
);