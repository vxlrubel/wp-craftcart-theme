<?php

// directly access denied
defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	[
        'id'       => 'cc-homepage',
        'title'    => esc_html__( 'Homepage', CC_DOMAIN ),
        'subtitle' => esc_html__( 'Homepage Setting Options', CC_DOMAIN ),
        'desc'     => esc_html__( 'Change all the things of homepage.', CC_DOMAIN ),
        'icon'     => 'el el-home'
	]
);