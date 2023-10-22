<?php

namespace CC\Frontend;

// directly access denied
defined('ABSPATH') || exit;

/**
 * Create Register_Scripts for regiter all the scripts
 * @since 1.0
 * @package Craft_Cart
 * @version 1.0
 */
class Register_Scripts{
    public function __construct(){
        // enqueue all the stylesheet
        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );

        // enqueue all the scripts file 
        add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );

        // admin enqueue style and script
        add_action( 'admin_enqueue_scripts', [$this, 'register_admin_scrips'] );
    }

    /**
     * enqueue admin style and scripts
     *
     * @return void
     */
    public function register_admin_scrips(){

        // enqueue admin style
        wp_enqueue_style( 
            'cc-admin-style',
            CC_ASSETS_ADMIN_CSS . 'admin-style.css',
            '', 
             CC_VERSION
        );

        wp_enqueue_script( 
            'cc-admin-script',
            CC_ASSETS_ADMIN_JS . 'admin-script.js',
            ['jquery'],
            CC_VERSION,
            true
        );
    }

    /**
     * register all the necessary scripts
     *
     * @return void
     */
    public function register_scripts(){
        // get all the script file
        $scripts = self::get_scripts();

        foreach ( $scripts as $handle => $script ) {
            // set the dependancy
            $deps = isset( $script['deps'] ) ? $script['deps'] : '';
            wp_enqueue_script( 
                $handle,
                $script['src'], 
                $deps,
                CC_VERSION,
                true
            );
        }
        

        // if comment is open of have comment and it's a single page
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }

        // if is single page 
        if( is_singular() ){
            wp_enqueue_script( 
                'magiczoomplus',
                CC_ASSETS_JS . 'magiczoomplus.js',
                ['jquery'],
                CC_VERSION,
                true
            );
        }

    }

    /**
     * register all the necessary styles
     *
     * @return void
     */
    public function register_styles(){
        // get all the stylesheet
        $styles = self::get_style();

        foreach ( $styles as $handle => $style ) {
            // set dependancy
            $deps = isset( $style['deps'] ) ? $style['deps'] : '';
            wp_enqueue_style(
                $handle,
                $style['src'],
                $deps,
                CC_VERSION
            );
        }


        if( is_singular() ){
            wp_enqueue_style( 
                'magiczoomplus', 
                CC_ASSETS_CSS . 'magiczoomplus.css', 
                '', 
                CC_VERSION
            );
        }
        wp_enqueue_style( 
            'cc-stylesheet', 
            get_stylesheet_uri(),
            '', 
            CC_VERSION
        );
    }


    /**
     * get all the scripts file
     *
     * @return $file;
     */
    public static function get_scripts(){
        $scripts = [
            'bootstrap-bundle' => [
                'src'  => 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js',
                'deps' => ['jquery']
            ],
            'carousel'         => [
                'src'  => CC_ASSETS_JS . 'owl.carousel.min.js',
                'deps' => ['jquery']
            ],
            'commonjs'         => [
                'src'  => CC_ASSETS_JS . 'Common.js',
                'deps' => ['jquery']
            ],
            'customjs'         => [
                'src'  => CC_ASSETS_JS . 'custom.js',
                'deps' => ['jquery']
            ]
        ];

        return $scripts;
    }

    /**
     * get all the shelesheet
     *
     * @return $file;
     */
    public static function get_style(){

        $style = [
            'fontawesome' => [
                'src' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
            ],
            'bootstrap'   => [
                'src' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css'
            ],
            'carousel'    => [
                'src' => CC_ASSETS_CSS . 'owl.carousel.min.css'
            ],
            'carousel-theme' => [
                'src' => CC_ASSETS_CSS . 'owl.theme.default.min.css'
            ],
            'main'        => [
                'src' => CC_ASSETS_CSS . 'main.css'
            ],
            'about-us'    => [
                'src' => CC_ASSETS_CSS . 'about-us.css'
            ],
            'product-page'    => [
                'src' => CC_ASSETS_CSS . 'product-page.css'
            ],
            'all-producte'    => [
                'src' => CC_ASSETS_CSS . 'all-product.css'
            ]
        ];

        return $style;
        
    }
}