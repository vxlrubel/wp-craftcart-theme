<?php

// directly access denied
defined('ABSPATH') || exit;


// define constant
define( 'CC_DOMAIN', 'craft-cart' );
define( 'CC_VERSION', '1.0' );
define( 'CC_DIR', trailingslashit( get_template_directory() ) ); 
define( 'CC_URI', trailingslashit( get_template_directory_uri() ) );
define( 'CC_ASSETS', trailingslashit( CC_URI . 'assets' ) ); 
define( 'CC_ASSETS_IMG', trailingslashit( CC_ASSETS . 'img' ) ); 
define( 'CC_ASSETS_CSS', trailingslashit( CC_ASSETS .'css/min' ) ); 
define( 'CC_ASSETS_ADMIN_CSS', trailingslashit( CC_ASSETS .'admin/css' ) ); 
define( 'CC_ASSETS_ADMIN_JS', trailingslashit( CC_ASSETS .'admin/js' ) ); 
define( 'CC_ASSETS_JS', trailingslashit( CC_ASSETS .'js' ) );


// include all the require file
require_once CC_DIR . 'inc/autoload.php';

final class Craft_Cart{

    // create evil
    private static $instance;


    public function __construct(){

        // register all the scripts for frontend panel
        new CC\Frontend\Register_Scripts;

        // recomended & required plugins activate
        new CC\Plugins\Activation;

        // initiate the default programms
        add_action( 'after_setup_theme', [ $this, 'initiate_theme'] );

        add_action( 'admin_bar_menu', [ $this, 'admin_bar_menu' ], 85 );

        // disable gutenberg block editor
        self::disable_block_editor();

        // enable classic widget
        self::enable_classic_widget();

        // register sidebar
        add_action( 'widgets_init', [ $this, 'register_sidebar' ] );

        // register widgets items
        add_action( 'widgets_init', [ $this, 'register_widgets_items' ] );
    }

    /**
     * register widgets items using this function
     * register_widget()
     *
     * @return void
     */
    public function register_widgets_items(){
        // register recent blog post widget item
        register_widget( 'CC\Widgets\Recent_Blog' );
    }

    /**
     * Register sidebar area
     *
     * @return void
     */
    public function register_sidebar(){

        // blog sidebar
        $args = [
            'name'           => esc_html__( 'Right Sidebar', CC_DOMAIN ),
            'id'             => 'cc-right-sidebar',
            'description'    => esc_html__( 'Drag the widgets item from left to drag here', CC_DOMAIN ),
            'before_widget'  => '<div class="RightPerDiv">',
            'after_widget'   => "</div>\n",
            'before_title'   => '<h5>',
            'after_title'    => "</h5>\n",
        ];
        register_sidebar( $args );

        // woocommerce sidebar
        register_sidebar(
            [
                'id'            => 'cc-woocommerce-sidebar',
                'name'          => esc_html__( 'Woocommerce Sidebar', CC_DOMAIN ),
                'description'   => esc_html__( 'Drag the widget items from leto to drag here.', CC_DOMAIN ),
                'before_widget' => "<div class=\"Catagori2\">\n",
                'after_widget'  => "</div>",
                'before_title'  => "<h5>\n",
                'after_title'   => "</h5>"
            ]
        );
        // footer widget args
        $widgets_args = [
            'before_widget'  => '<div class="footer-widgets-item">',
            'after_widget'   => "</div>\n",
            'before_title'   => '<h4>',
            'after_title'    => "</h4>\n",
        ];

        
        /**
         * register footer widget using 
         * register_sidebar()
         * 
         * @return void
         */
        for ($i=1; $i <= 4 ; $i++) { 
            register_sidebar( array_merge(
                $widgets_args,
                [
                    'id'          => "cc-footer-widgets-{$i}",
                    'name'        => esc_html__( "Footer Widget {$i}", CC_DOMAIN ),
                    'description' => esc_html__( 'Drop here the widgets item', CC_DOMAIN )
                ]
            ) );
        }
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
            'mobile_menu'   => __( 'Responsive Mobile Menu', CC_DOMAIN ),
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
     * @return $instance
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


// Retrieve product gallery image URLs
function get_product_gallery_images() {
    global $product;

    // Get the product gallery attachment IDs
    $attachment_ids = $product->get_gallery_image_ids();

    // Initialize an empty array to store image URLs
    $gallery_images = array();

    // Loop through each attachment ID and get the image URL
    foreach ($attachment_ids as $attachment_id) {
        $image_url = wp_get_attachment_url($attachment_id);
        $gallery_images[] = $image_url;
    }

    return $gallery_images;
}
