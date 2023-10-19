<?php

// directly acess denied
defined('ABSPATH') || exit;

Redux::set_section(
	$opt_name,
	[
		'id'       => 'cc-editor',
		'title'    => esc_html__( 'Editor', CC_DOMAIN ),
		'subtitle' => esc_html__( 'Write the necessary code', CC_DOMAIN ),
		'desc'     => esc_html__( 'Write the css and js code here.', CC_DOMAIN ),
		'icon'     => 'el el-edit',
		'fields'   => [
			[
				'id'       => 'cc-editor-css',
				'type'     => 'ace_editor',
				'mode'     => 'css',
				'theme'    => 'monokai',
				'title'    => esc_html__( 'CSS Editor', CC_DOMAIN ),
				'subtitle' => esc_html__( 'Add CSS style for fornt-end', CC_DOMAIN ),
				'desc'     => esc_html__( 'Write the css code here to change front-end.', CC_DOMAIN ),
				'default'  => '#d-flex{display:flex}'
			],
			[
				'id'   => 'devide-css',
				'type' => 'divide'
			],
			[
				'id'       => 'cc-editor-js',
				'type'     => 'ace_editor',
				'mode'     => 'js',
				'theme'    => 'chrome',
				'title'    => esc_html__( 'JS Editor', CC_DOMAIN ),
				'subtitle' => esc_html__( 'Add js style for fornt-end', CC_DOMAIN ),
				'desc'     => esc_html__( 'Write the js code here to change front-end effect or event.', CC_DOMAIN ),
				'default'  => 'alert("done")'
			],
			[
				'id'   => 'devide-js',
				'type' => 'divide'
			],
			[
				'id'       => 'cc-editor-php',
				'type'     => 'ace_editor',
				'mode'     => 'js',
				'theme'    => 'chrome',
				'title'    => esc_html__( 'PHP Editor', CC_DOMAIN ),
				'subtitle' => esc_html__( 'Add php code for change or modify functions.', CC_DOMAIN ),
				'desc'     => esc_html__( 'Write php code to modity functions.', CC_DOMAIN ),
				'default'  => 'echo "hello world";'
			],
		]
	]
);