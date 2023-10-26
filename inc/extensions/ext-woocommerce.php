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
            'id'       => 'cc-product-page-banner-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Breadcrumb', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable or desable breadcrumb', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change to enable to show the breadcrumb inside the product page.', CC_DOMAIN ),
            'on'       => 'Enable',
            'off'      => 'Disable',
            'default'  => true,
         ],
         [
            'id'       => 'cc-product-banner-enable',
            'type'     => 'switch',
            'title'    => esc_html__( 'Banner', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable or desable banner', CC_DOMAIN ),
            'desc'     => esc_html__( 'You may change the options to enable to view banner in front-end.', CC_DOMAIN ),
            'on'       => 'Enable',
            'off'      => 'Disable',
            'default'  => true,
         ],
         [
            'id'       => 'cc-product-banner',
            'type'     => 'media',
            'title'    => esc_html__( 'Banner Image', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Change the banner iamge', CC_DOMAIN ),
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
      'subsection' => true,
      'fields'     => [
         [
            'id'       => 'cc-commerce-notice-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'WooCommerce Notice', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Desable notice.', CC_DOMAIN ),
            'desc'     => esc_html__( 'It\'s enable to show the notice when add this product into the cart after click the add to cart button.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-commerce-banner-single-page-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Breadcrumb', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Desable Breadcrumb', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change to enable to show the breadcrumb in the front-end.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-commerce-buy-one-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Buy One', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Desable Buy One', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change to enable to show one related product below the product thumb.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-commerce-buy-one-text',
            'type'     => 'text',
            'title'    => esc_html__( 'Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Change the buy one title', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change the title to show the above the product.', CC_DOMAIN ),
            'default'  => 'You can also buy',
            'validate' => 'no_html', 
            'required' => [ 'cc-commerce-buy-one-visibility', '=', true ]
         ],
         [
            'id'       => 'cc-commerce-buy-one-text-divide',
            'type'     => 'divide',
         ],
         [
            'id'       => 'cc-commerce-share-link-single-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Social Share', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable social share', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change to enable to show to the social share icon in product single page.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-commerce-share-link-single-text',
            'type'     => 'text',
            'title'    => esc_html__( 'Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable Title', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change to enable to show to the title sideof social share icon in product single page.', CC_DOMAIN ),
            'default'  => 'Share: ',
            'validate' => 'no_html',
            'required' => [ 'cc-commerce-share-link-single-visibility', '=', true ]
         ],
         [
            'id'       => 'cc-commerce-share-link-single-text-divide',
            'type'     => 'divide',
         ],
         [
            'id'       => 'cc-commerce-cash-on-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Cash On Delivery', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable cash on delivery', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change to enable to show cash on delivery.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-commerce-return-n-warranty-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Return & Warranty', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable return and warranty.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change to enable to show this section side of the product single page.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-commerce-return-n-warranty-title',
            'type'     => 'text',
            'title'    => esc_html__( 'Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set the title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set the title to show in front-end.', CC_DOMAIN ),
            'default'  => 'Return & Warranty',
            'validate' => 'no_html',
            'required' => [ 'cc-commerce-return-n-warranty-visibility', '=', true ]
         ],
         [
            'id'       => 'cc-commerce-return-n-warranty',
            'type'     => 'multi_text',
            'title'    => esc_html__( 'Add Policy', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Add return & warranty policy.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Add Return and Warranty Policy inside the product details page.', CC_DOMAIN ),
            'validate' => 'no_html',
            'default'  => [ '7 Days Returns Change of mind is not applicable', 'Warranty not available' ],
            'required' => [ 'cc-commerce-return-n-warranty-visibility', '=', true ]
         ],
         [
            'id'       => 'cc-commerce-return-n-warranty-divide',
            'type'     => 'divide',
         ],
         [
            'id'       => 'cc-commerce-payment-method-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Payment', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable payment section.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Enable to show the payment method image.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-commerce-payment-method-title',
            'type'     => 'text',
            'title'    => esc_html__( 'Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Change the title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change the title to show in front-end.', CC_DOMAIN ),
            'default'  => 'Payment Method',
            'validate' => 'no_html',
            'required' => [ 'cc-commerce-payment-method-visibility', '=', true ]
         ],
         [
            'id'       => 'cc-commerce-payment-method-image',
            'type'     => 'media',
            'title'    => esc_html__( 'Image', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Change the payment image.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change the image to show in front-end.', CC_DOMAIN ),
            'default'  => [ 'url'=> CC_ASSETS_IMG . 'payment-method-default.jpg' ],
            'url'      => false,
            'required'=> [ 'cc-commerce-payment-method-visibility', '=', true ]
         ],
         [
            'id'       => 'cc-commerce-payment-method-visibility-divide',
            'type'     => 'divide',
         ],
         [
            'id'       => 'cc-commerce-banner-single-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Banner', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable banner', CC_DOMAIN ),
            'desc'     => esc_html__( 'Show the banner above the related product section.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-commerce-banner-single-thumb',
            'type'     => 'media',
            'title'    => esc_html__( 'Banner Image', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Upload banner image.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Upload the banner image to show inside the product details page.', CC_DOMAIN ),
            'default'  => [ 'url' => CC_ASSETS_IMG . 'banner-product-page-default.jpg' ],
            'url'      => false,
            'required' => [ 'cc-commerce-banner-single-visibility', '=', true ]
         ],
         [
            'id'       => 'cc-commerce-related-product-single-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Related Product', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable related product', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change to enable to show the related product in the product single page.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-commerce-related-product-single-title',
            'type'     => 'text',
            'title'    => esc_html__( 'Title', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Change the title', CC_DOMAIN ),
            'desc'     => esc_html__( 'Change the title to display.', CC_DOMAIN ),
            'default'  => 'Related Products',
            'validate' => 'no_html'
         ]
      ]
	]
);