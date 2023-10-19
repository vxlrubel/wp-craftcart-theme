<?php

// directly access denied
defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	[
        'id'       => 'cc-footer',
        'title'    => esc_html__( 'Footer', CC_DOMAIN ),
        'subtitle' => esc_html__( 'Footer Setting Options', CC_DOMAIN ),
        'desc'     => esc_html__( 'Change all the things of Footer section.', CC_DOMAIN ),
        'icon'     => 'el el-file-edit'
	]
);