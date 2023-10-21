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
                'icon'     => 'el el-file-edit',
                'fields'   => [
                        [
                                'id'           => 'cc_copyright_text',
                                'type'         => 'textarea',
                                'title'        => esc_html__( 'Copyright Text', CC_DOMAIN ),
                                'subtitle'     => esc_html__( 'Change the copyright text', CC_DOMAIN ),
                                'desc'         => esc_html__( 'Change or modify the footer text from here.', CC_DOMAIN ),
                                'validate'     => 'html_custom',
                                'allowed_html' => [
                                        'a' => [
                                                'href'   => [],
                                                'title'  => [],
                                                'target' => []
                                        ]
                                ],
                                'default'      => sprintf(
                                        'Copyright &copy; All right reserved by <a href="%s">Craft Cart</a>.',
                                        'https://github.com/vxlrubel/wp-craftcart-theme'
                                ),
                                'hint'         => [
                                        'content' => esc_html__( 'You may use only a tag with href and target attributes.', CC_DOMAIN )
                                ]
                        ],
                        [
                                'id'=> 'cc_copyright_text_divide',
                                'type' => 'divide'
                        ],
                        [
                                'id'       => 'cc_copyright_text_align',
                                'type'     => 'radio',
                                'title'    => esc_html__( 'Alignment', CC_DOMAIN ),
                                'subtitle' => esc_html__( 'Change the copyright text alignment', CC_DOMAIN ),
                                'desc'     => esc_html__( 'Change or modify the footer text alignment from here.', CC_DOMAIN ),
                                'options'  => [
                                        'left'   => 'Left Alignment',
                                        'center' => 'Middle Alignment',
                                        'right'  => 'Right Alignment',
                                ],
                                'default'  => 'center'
                        ]
                ]
	]
);