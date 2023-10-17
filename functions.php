<?php

// directly access denied
defined('ABSPATH') || exit;


// define constant
define( 'CC_DOMAIN', 'craft-cart' );
define( 'CC_VERSION', '1.0' );
define( 'CC_DIR', trailingslashit( get_template_directory() ) ); 
define( 'CC_URI', trailingslashit( get_template_directory_uri() ) );
define( 'CC_ASSETS', trailingslashit( CC_URI . 'assets' ) ); 
define( 'CC_ASSETS_CSS', trailingslashit( CC_ASSETS .'css/min' ) ); 
define( 'CC_ASSETS_JS', trailingslashit( CC_ASSETS .'js' ) );


// include all the require file
require_once CC_DIR . 'inc/autoload.php';

final class Craft_Cart{

    // create evil
    private static $instance;


    public function __construct(){
        // register all the scripts for frontend panel
        new CC\Frontend\Register_Scripts;

        // initiate the default programms
        add_action( 'after_setup_theme', [ $this, 'initiate_theme'] );

        add_action( 'admin_bar_menu', [ $this, 'admin_bar_menu' ], 85 );

        // disable gutenberg block editor
        self::disable_block_editor();

        // enable classic widget
        self::enable_classic_widget();

        // register sidebar
        add_action( 'widgets_init', [ $this, 'register_sidebar' ] );
    }

    /**
     * Register sidebar area
     *
     * @return void
     */
    public function register_sidebar(){
        $args = [
            'name'           => esc_html__( 'Right Sidebar', CC_DOMAIN ),
            'id'             => 'truvik-right-sidebar',
            'description'    => esc_html__( 'Drag the widgets item from left to drag here', 'truvik'),
            'before_widget'  => '<aside class="widget with-title">',
            'after_widget'   => "</aside>\n",
            'before_title'   => '<h3 class="widget-title">',
            'after_title'    => "</h3>\n",
            'show_in_rest'   => true,
        ];
        register_sidebar( $args );
    }

    /**
     * enable classic editor
     *
     * @return void
     */
    public static function enable_classic_widget(){
        // Disables the block editor from managing widgets in the Gutenberg plugin.
        add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
        // Disables the block editor from managing widgets.
        add_filter( 'use_widgets_block_editor', '__return_false' );
    }

    /**
     * disable gutenberg block editor for post and page
     *
     * @return void
     */
    public static function disable_block_editor(){
        
        // Disable the block editor (Gutenberg) for posts
        add_filter('use_block_editor_for_post', '__return_false', 10);

        // Disable the block editor (Gutenberg) for pages
        add_filter('use_block_editor_for_page', '__return_false', 10);

    }

    /**
     * create admin top bar menu
     *
     * @param [object] $menu_options
     * @return void
     */
    public function admin_bar_menu( $menu_options ){
        $args = [
            'id'    => 'cc_admin_bar_top_menu_item',
            'title' => __( 'Visit Website', CC_DOMAIN ),
            'href'  => esc_url( get_home_url('/') ),
            'meta'  => [ 'target' => '_blank' ]
        ];
        $menu_options->add_node( $args );
    }

    /**
     * initiate the default functionality
     *
     * @return void
     */
    public function initiate_theme(){

        // register textdomain for translation
        load_theme_textdomain( CC_DOMAIN, CC_DIR . 'lang' );

        // get the website title and favicon
        add_theme_support('title-tag');

        // support post format
        add_theme_support(
			'post-formats',
			[
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
            ]
		);

        // get post thumbnail
        add_theme_support( 'post-thumbnails' );

        // set woocommerce support
        add_theme_support( 'woocommerce');

        // register nav menus
        $menus = [
            'primary_menu'  => __( 'Primary Menu', CC_DOMAIN ),
            'category_menu' => __( 'Category Menu', CC_DOMAIN ),
            'footer_menu'   => __( 'Footer Menu', CC_DOMAIN )
        ];
        register_nav_menus( $menus );

        // add theme support
        add_theme_support(
			'html5',
			[
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
            ]
		);

        // add post thumbnail size
        set_post_thumbnail_size( 500, 250, true );
    }
    
    /**
     * create singletone instance
     *
     * @return void
     */
    public static function init(){
        if( is_null( self::$instance ) )
            self::$instance = new self();

        return self::$instance;
    }
}

if( ! function_exists('craft_cart') ){
    function craft_cart(){
        return Craft_Cart::init();
    }
}
craft_cart();