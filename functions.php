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
require_once dirname( __FILE__) . '/inc/autoload.php';

final class Craft_Cart{

    // create evil
    private static $instance;


    public function __construct(){
        // register all the scripts for frontend panel
        new CC\Frontend\Register_Scripts;

        // initiate the default programms
        add_action( 'after_setup_theme', [ $this, 'initiate_theme'] );
    }

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