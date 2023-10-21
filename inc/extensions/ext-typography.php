<?php

// directly access denied
defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	[
                'id'       => 'cc-typography',
                'title'    => esc_html__( 'Typography', CC_DOMAIN ),
                'subtitle' => esc_html__( 'Change all the typography style from here.', CC_DOMAIN ),
                'desc'     => esc_html__( 'Change all the typography style from here.', CC_DOMAIN ),
                'icon'     => 'el el-font'
	]
);