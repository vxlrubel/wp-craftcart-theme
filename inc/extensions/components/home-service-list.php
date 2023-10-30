<?php

// directly access denied
defined('ABSPATH') || exit;

/**
 * sert service list
 * 
 * @return void
 */
Redux::set_section(
	$opt_name,
	[
      'id'         => 'cc-homepage-service-list',
      'title'      => esc_html__( 'Service List', CC_DOMAIN ),
      'subtitle'   => esc_html__( 'Change service list item', CC_DOMAIN ),
      'desc'       => esc_html__( 'Change or modify Service list items.', CC_DOMAIN ),
      'subsection' => true,
      'fields'     => [
         [
            'id'       => 'cc-homepage-service-list-visibility',
            'type'     => 'switch',
            'title'    => esc_html__( 'Service List', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Enable/Disable service list.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Enable to show the service list in the homepage.', CC_DOMAIN ),
            'default'  => true,
            'on'       => 'Enable',
            'off'      => 'Disable'
         ],
         [
            'id'       => 'cc-homepage-service-list-shipping',
            'type'     => 'text',
            'title'    => esc_html__( 'Shipping', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set shipping title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set shipping title here.', CC_DOMAIN ),
            'default'  => 'Free Shipping!',
            'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
            'validate' => 'no_html'
         ],
         [
            'id'       => 'cc-homepage-service-list-shipping-subtitle',
            'type'     => 'text',
            'title'    => esc_html__( 'Shipping Subtitle', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set shipping subtitle.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set shipping subtitle here.', CC_DOMAIN ),
            'default'  => 'On Orders Over 2000 Taka.',
            'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
            'validate' => 'no_html'
         ],
         [
            'id'       => 'cc-homepage-service-list-shipping-subtitle-divide',
            'type'     => 'divide',
         ],
         [
            'id'       => 'cc-homepage-service-list-exchange',
            'type'     => 'text',
            'title'    => esc_html__( 'Exchange', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set exchange title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set exchange title here.', CC_DOMAIN ),
            'default'  => 'Exchange Policy',
            'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
            'validate' => 'no_html'
         ],
         [
            'id'       => 'cc-homepage-service-list-exchange-subtitle',
            'type'     => 'text',
            'title'    => esc_html__( 'Exchange Subtitle', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set exchange subtitle.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set exchange subtitle here.', CC_DOMAIN ),
            'default'  => 'Fast & Hassle Free',
            'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
            'validate' => 'no_html'
         ],
         [
            'id'       => 'cc-homepage-service-list-exchange-subtitle-divide',
            'type'     => 'divide',
         ],
         [
            'id'       => 'cc-homepage-service-list-support',
            'type'     => 'text',
            'title'    => esc_html__( 'Support', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set support title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set support title here.', CC_DOMAIN ),
            'default'  => 'Online Support ',
            'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
            'validate' => 'no_html'
         ],
         [
            'id'       => 'cc-homepage-service-list-support-subtitle',
            'type'     => 'text',
            'title'    => esc_html__( 'Support Subtitle', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set support subtitle.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set support subtitle here.', CC_DOMAIN ),
            'default'  => '24/7 Everyday',
            'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
            'validate' => 'no_html'
         ],
         [
            'id'       => 'cc-homepage-service-list-support-subtitle-divide',
            'type'     => 'divide',
         ],
         [
            'id'       => 'cc-homepage-service-list-reward',
            'type'     => 'text',
            'title'    => esc_html__( 'Reward', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set reward title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set reward title here.', CC_DOMAIN ),
            'default'  => 'Reward Points',
            'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
            'validate' => 'no_html'
         ],
         [
            'id'       => 'cc-homepage-service-list-reward-subtitle',
            'type'     => 'text',
            'title'    => esc_html__( 'Reward Subtitle', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set reward subtitle.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set reward subtitle here.', CC_DOMAIN ),
            'default'  => 'Earn 1% Cashback',
            'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
            'validate' => 'no_html'
         ],
         [
            'id'       => 'cc-homepage-service-list-reward-subtitle-divide',
            'type'     => 'divide',
         ],
         [
            'id'       => 'cc-homepage-service-list-payment',
            'type'     => 'text',
            'title'    => esc_html__( 'Payment', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set payment title.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set payment title here.', CC_DOMAIN ),
            'default'  => 'Payment Method',
            'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
            'validate' => 'no_html'
         ],
         [
            'id'       => 'cc-homepage-service-list-payment-subtitle',
            'type'     => 'text',
            'title'    => esc_html__( 'Payment Subtitle', CC_DOMAIN ),
            'subtitle' => esc_html__( 'Set payment subtitle.', CC_DOMAIN ),
            'desc'     => esc_html__( 'Set payment subtitle here.', CC_DOMAIN ),
            'default'  => 'Credit Card, bKash & PayPal.',
            'required' => [ 'cc-homepage-service-list-visibility', '=', true ],
            'validate' => 'no_html'
         ]
      ]
   ]
);
