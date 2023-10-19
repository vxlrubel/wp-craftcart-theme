<?php
Redux::set_section( $opt_name, [
    'title'  => esc_html__( 'Header Options', CC_DOMAIN ),
	'id'     => 'cc-header',
	'desc'   => esc_html__( 'Basic field with no subsections.', 'your-textdomain-here' ),
	'icon'   => 'el el-home',
	'fields' => array(
		array(
			'id'       => 'cc-header-text',
			'type'     => 'text',
			'title'    => esc_html__( 'Header Text', 'your-textdomain-here' ),
			'desc'     => esc_html__( 'Header Description.', 'your-textdomain-here' ),
			'subtitle' => esc_html__( 'Example subtitle.', 'your-textdomain-here' ),
			'hint'     => ['content'=>'hint']
		),
	),
] );