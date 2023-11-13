<?php

// directly access denied
defined('ABSPATH') || exit;


/**
 * create a custom print_r function
 */
if( ! function_exists('pre') ){
    function pre( $object ){
        echo '<pre>';
        print_r( $object );
        echo '</pre>';
    }
}

/**
 * create a custom var_dump function
 */
if( ! function_exists('dump') ){
    function dump( $object ){
        echo '<pre>';
        var_dump( $object );
        echo '</pre>';
    }
}

/**
 * create function it's throwing a fatal error
 * @return error
 */
if( ! function_exists('cc_error') ){
    function cc_error( $error_message = 'critical error' ){
        throw new Exception( $error_message );
    }
}

/**
 * create a capability function it's check is admin or editor
 * @return true
 */
if( ! function_exists('cc_editor') ){
    function cc_editor(){
        if( is_user_logged_in() && current_user_can( 'edit_posts' ) )
            return true;
    }
}

if( ! function_exists('is_enable_options') ){
    function is_enable_options( $options ){

        // enable theme options 
        global $cc;

        if( $cc[$options] == 1 )
            return true;

        return false;
    }
}

/**
 * get the post title
 * get_cc_trim_post_title() this function working inside the loop
 * 
 * @param $string_width
 * @type [string]
 * @return $title;
 */
if( ! function_exists('get_cc_trim_post_title') ){
    function get_cc_trim_post_title( $string_width = 25, $more = true ){
        $title  = mb_strimwidth( get_the_title( get_the_ID() ), 0, $string_width );

        if( $more == true ){

            $total_characters = strlen(get_the_title(get_the_id()));

            if( $total_characters > $string_width ){
                $get_title = "{$title}...";
            }else{
                $get_title = $title;
            }

        }else{
            $get_title = $title;
        }
        
        return $get_title;
    }
}
/**
 * get post content
 * get_cc_trim_post_content() this function working inside the loop
 * 
 * @param $string_width
 * @type [string]
 * @return $title;
 */
if( ! function_exists('get_cc_trim_post_content') ){
    function get_cc_trim_post_content( $string_width = 55, $more = true ){
        $content  = mb_strimwidth( get_the_content( get_the_ID() ), 0, $string_width );

        if( $more == true ){

            $total_characters = strlen(get_the_content(get_the_id()));

            if( $total_characters > $string_width ){
                $get_content = "{$content} <span class=\"trim-content-more\">[...]</span>";
            }else{
                $get_content = $content;
            }

        }else{
            $get_content = $content;
        }
        
        return $get_content;
    }
}


/**
 * create custom primary menu
 * theme location 'primary_menu'
 * @return void
 */
if( ! function_exists('cc_primary_menu') ){
    function cc_primary_menu() {
        // if primary menu has created
        if( has_nav_menu( 'primary_menu' ) ){
            $args = [
                'theme_location' => 'primary_menu'
            ];
            // defina primary menu
            wp_nav_menu( $args );
        }else{
            // check condition if admin or editor
            if( cc_editor() ){
                printf(
                    '<ul><li><a href="%s" target="_blank">%s</a></li></ul>',
                    esc_url( admin_url('nav-menus.php') ),
                    __( 'Create Menu', CC_DOMAIN )
                );
            }else{
                wp_list_pages([
                    'title_li'=> ' '
                ]);
            }
            
        }
    }
}

/**
 * create category menu
 * category menu will be the megamenu
 * 
 * @return void
 */
if( ! function_exists('cc_category_menu') ){
    function cc_category_menu(){
        if( has_nav_menu( 'category_menu' ) ){
            $args  = [
                'theme_location' => 'category_menu',
                'menu_class'     => 'navbar-nav',
                'container'      => '',
                'menu_id'        => 'categoryMenu',
                'walker'         => new CC_Nav_Walker()
            ];
            wp_nav_menu( $args );
        }
    }
}

/**
 * create responsive mobile menu
 * category menu will be the megamenu
 * 
 * @return void
 */
if( ! function_exists('cc_responsive_mobile_menu') ){
    function cc_responsive_mobile_menu(){
        if( has_nav_menu( 'mobile_menu' ) ){
            $args = [
                'theme_location' => 'mobile_menu',
                'menu_class'     => 'navbar-nav',
                'container'      => '',
                'menu_id'        => 'responsive-mobile-menu',
                'walker'         => new CC_Nav_Responsive_Walker()
            ];
            wp_nav_menu( $args );
        }
    }
}



/**
 * create custom footer menu
 * theme location 'footer_menu'
 * @return void
 */
if( ! function_exists('cc_footer_menu') ){
    function cc_footer_menu(){
        // if footer menu has created
        if( has_nav_menu( 'footer_menu' ) ){
            $args = [
                'theme_location' => 'footer_menu'
            ];
            // defina footer menu
            echo "<div class=\"mb-4\">\n";
                wp_nav_menu( $args );
            echo "</div>\n";
        }else{
            if( cc_editor() ){
                printf(
                    '<div><ul class="mb-4"><li><a href="%s" target="_blank">%s</a></li></ul></div>',
                    esc_url( admin_url('nav-menus.php?action=edit&menu=0') ),
                    __( 'Create Menu', CC_DOMAIN )
                );
            }
        }
    }
}


/**
 * create app menu for mobile version
 * 
 * @return void
 */
if( ! function_exists('cc_app_menu') ){
    function cc_app_menu(){
        ?>
            <div class="MovboBottom">
                <div class="container">
                    <a class="active" href="<?php echo home_url('/'); ?>"><i class="fa-solid fa-house"></i></a>
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="./Wish.html"><i class="fa-regular fa-heart"></i></a>
                    <a href="<?php cc_profile_page_url(); ?>"><i class="fa-regular fa-user"></i></a>
                </div>
            </div>
        <?php
    }
}


/**
 * this method only use insie the loop outerwise it's not working it will throwing error
 * get 1 single related product
 * 
 * @return void
 */
if( ! function_exists('cc_show_1_related_product') ){
    function cc_show_1_related_product(){
        global $cc;
        // Get the current product ID
        $current_product_id = get_the_ID();

        // Get the product categories and tags for the current product
        $categories = wp_get_post_terms($current_product_id, 'product_cat', array('fields' => 'ids'));
        $tags = wp_get_post_terms($current_product_id, 'product_tag', array('fields' => 'ids'));

        // Setup a query to find a related product
        $args = [
            'post_type'      => 'product',
            'post_status'    => 'publish',
            'posts_per_page' => 1,
            'post__not_in'   => [ $current_product_id ],   // Exclude the current product
            'tax_query'      => [
                'relation' => 'OR',                        // Either in the same category or with the same tag
                [
                    'taxonomy' => 'product_cat',
                    'field'    => 'id',
                    'terms'    => $categories
                ],
                [
                    'taxonomy' => 'product_tag',
                    'field'    => 'id',
                    'terms'    => $tags
                ]
            ],
            'orderby'        => 'rand',
        ];

        $related_products = new WP_Query( $args );

        if ($related_products->have_posts()) {
            while ($related_products->have_posts()) : $related_products->the_post();
                $product = wc_get_product( get_the_ID() );
             ?>
                <div class="BuyBoth">
                  <h6 class="Bothtitle">
                    <?php echo esc_html( $cc['cc-commerce-buy-one-text'] ); ?>
                  </h6>
                  
                  <div class="ProductInfo">
                     <div class="ProductAndTitle">
                        <div class="PRoductImg">
                           <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="ProductTitle">
                           <h6><?php the_title(); ?></h6>
                           <span><?php echo wc_price( $product->get_price() ); ?></span> 
                        </div>
                     </div>

                     <div class="BothPriceAndBtn">

                        <?php

                            printf(
                                '<div class="BothPrice"><span>%s:</span><h6>%s</h6></div>',
                                'Total Price',
                                wc_price( $product->get_price() )
                            );

                            printf(
                                '<div class="BothBtn"><a href="%s">%s</a></div>',
                                esc_url( get_permalink( get_the_ID() ) ),
                                esc_html('Buy Now')
                            );
                         ?>
                     </div>
                  </div>
               </div>
            
            <?php endwhile;
        }

        wp_reset_postdata();
        
    }
}

/**
 * count avarage review and reviews count
 * 
 * @return void
 */
if( ! function_exists( 'cc_wc_product_rating_n_reviews_count' ) ){
    function cc_wc_product_rating_n_reviews_count(){
        $product = wc_get_product( get_the_ID() );
        $review_count = $product->get_review_count();
        $average_rating = $product->get_average_rating();
        // echo $average_rating;

        if( $review_count < 1 ){
            $count = 'No Review';
        }
        if( $review_count == 1 ){
            $count = "{$review_count} review";
        }
        if( $review_count > 1 ){
            $count = "{$review_count} reviews";
        }

        $number = number_format( $average_rating, 2 );

        if( $number && $review_count ){
            printf(
               '<div class="d-flex mb-2">Ratting: %s out of %s</div>',
               $number,
               '5.0'
            );
        }
        ?>
        <div class="review">
            <span class="star">

                <?php 
                    
                    $star       = '<i class="fa-solid fa-star"></i>';
                    $star_empty = '<i class="fa-regular fa-star"></i>';
                    $star_half  = '<i class="fa-solid fa-star-half-stroke"></i>';
                    if( $number && $review_count ){
                        if( $average_rating == 1 ){
                            $star_count = "{$star}{$star_empty}{$star_empty}{$star_empty}{$star_empty}";
                        }
                        if( $average_rating > 1 && $average_rating < 2 ){
                            $star_count = "{$star}{$star_half}{$star_empty}{$star_empty}{$star_empty}";
                        }
                        if( $average_rating == 2 ){
                            $star_count = "{$star}{$star}{$star_empty}{$star_empty}{$star_empty}";
                        }
                        if( $average_rating > 2 && $average_rating < 3 ){
                            $star_count = "{$star}{$star}{$star_half}{$star_empty}{$star_empty}";
                        }
                        if( $average_rating == 3 ){
                            $star_count = "{$star}{$star}{$star}{$star_empty}{$star_empty}";
                        }
                        if( $average_rating > 3 && $average_rating < 4 ){
                            $star_count = "{$star}{$star}{$star}{$star_half}{$star_empty}";
                        }
                        if( $average_rating == 4 ){
                            $star_count = "{$star}{$star}{$star}{$star}{$star_empty}";
                        }
                        if( $average_rating > 4 && $average_rating < 5 ){
                            $star_count = "{$star}{$star}{$star}{$star}{$star_half}";
                        }
                        if( $average_rating == 5 ){
                            $star_count = "{$star}{$star}{$star}{$star}{$star}";
                        }
                        echo $star_count;
                    }else{
                        echo "{$star_empty}{$star_empty}{$star_empty}{$star_empty}{$star_empty}";
                    }
                 ?>
            </span>

            <?php printf( '<span class="rating-amount">%s</span>', $count ); ?>
            
        </div>

        <?php
    }
}


/**
 * it's showing social incon inside the single product page.
 * 
 * @return void
 */
if( ! function_exists('cc_wc_product_share_icon') ){
    function cc_wc_product_share_icon(){

        global $cc;
        // Get the current product's permalink
        $get_link = get_permalink();

        // Generate share links
        $share_facebook = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($get_link);
        $share_twitter  = 'https://twitter.com/intent/tweet?url=' . urlencode($get_link);
        $share_google   = 'https://plus.google.com/share?url=' . urlencode($get_link);
        $share_rss_feed = get_bloginfo('rss2_url');

        printf(
            '
            <div class="product-share">
                <span>%s</span>
                <div class="social">
                    <a href="%s" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="%s" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="%s" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="%s" target="_blank"><i class="fa-solid fa-rss"></i></a>
                </div>
            </div>',
            esc_html( $cc['cc-commerce-share-link-single-text'] ),
            esc_url( $share_facebook ),
            esc_url( $share_twitter ),
            esc_url( $share_google ),
            esc_url( $share_rss_feed )

        );
    }
}


/**
 * create privacy policy and warranty inside the product single page
 * 
 * @return void
 */
if( ! function_exists('cc_warranty_n_privacy_in_product_page') ){
    function cc_warranty_n_privacy_in_product_page(){
        global $cc;

        if( is_enable_options( 'cc-commerce-return-n-warranty-visibility' ) ):

            echo "<div>\n";
            printf(
                '<h5><i class="fa-solid fa-person-walking-arrow-loop-left"></i>%s</h5>',
                $cc['cc-commerce-return-n-warranty-title']
            );
             
            $warn_policy = $cc['cc-commerce-return-n-warranty'];

            if( empty( $warn_policy ) ){
                echo ' ';
            }else{
                if( count( $warn_policy ) >= 1 && ! empty( $warn_policy ) ){
                    echo "<ul>\n";
                        foreach ($warn_policy as $policy ) {
                            printf(
                                '<li><i class="fa-solid fa-shield-halved"></i> %s</li>',
                                $policy
                            );
                        }
                    echo "</ul>\n";
                }
            }
            
            echo "</div>\n";

        endif;
    }
}


if( ! function_exists('cc_commerce_banner_single_page') ){
    function cc_commerce_banner_single_page(){
        global $cc;
        if( is_enable_options('cc-commerce-banner-single-visibility') ){
            printf(
                '<section class="CommonpaddingSection productPhonemargin"><div class="container BannerSec"><img src="%s"></div></section>',
                esc_url( $cc['cc-commerce-banner-single-thumb']['url'] )
            );
        }
    }
}

if( ! function_exists('cc_payment_method_image_integration') ){
    function cc_payment_method_image_integration(){
        global $cc;
        if( is_enable_options('cc-commerce-payment-method-visibility') ) : 
            echo "<div class=\"ChargeDiv mt-3\">\n";
            printf(
                '<h5 class="title">%s</h5>', 
                $cc['cc-commerce-payment-method-title']
            );

            printf(
                '<div class="panel-body"><img src="%s"></div>',
                $cc['cc-commerce-payment-method-image']['url']
            );
            echo "</div>\n";
        endif;
    }
}


/**
 * website logo image with link
 * 
 * @return void
 */
if( ! function_exists('cc_logo') ){
    function cc_logo(){
        global $cc;
        $site_url = esc_url( get_home_url('/') );
        $logo_url = $cc['cc-header-logo']['url'];

        printf('<a href="%s"><img src="%s" alt=""></a>', $site_url, $logo_url);

    }
}


/**
 * get cart page url
 */
if( ! function_exists('cc_cart_page_url') ){
    function cc_cart_page_url(){
        if( class_exists('WooCommerce') ){
            echo get_permalink(wc_get_page_id('cart'));
        }
    }
}

/**
 * get profile page url
 */
if( ! function_exists('cc_profile_page_url') ){
    function cc_profile_page_url(){
        if( class_exists('WooCommerce') ){
            echo get_permalink(wc_get_page_id('myaccount'));
        }
        
    }
}

/**
 * get wishlist page url
 * 
 * @return url
 */
if( ! function_exists('get_wishlist_page_url') ){
    function get_wishlist_page_url(){
        global $wpdb;
        $page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = 'wishlist' AND post_type = 'page'");
        if ($page_id) {
            return get_permalink($page_id);
        } else {
            return ''; // Wishlist page not found
        }
       
    }
}


/**
 * Get the count of wishlist items
 * 
 * @return $count
 */
if( ! function_exists('get_wishlist_item_count') ){
    function get_wishlist_item_count() {
        if (class_exists('YITH_WCWL')) {
            $wishlist = YITH_WCWL();
            $count = $wishlist->count_products();
            return $count;
        } else {
            return 0;
        }
    }
}


/**
 * home slider items set
 * 
 * @return void
 */
if( ! function_exists('cc_home_slider') ){
    function cc_home_slider(){
        global $cc;
        $slider_images = $cc['cc-homeslider-gallery'];
        if( ! is_array( $slider_images) ) return;

        if( ! is_enable_options('cc-homeslider-visibility') ) return;

        ?>

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

            <div class="carousel-inners home-carousel-slider owl-carousel pt-0">

                <?php 
                    foreach ( $slider_images as $image ) {
                        # code...
                        printf( '<div><img src="%s" class="d-block w-100" /></div>', $image );
                        
                    }
                ?>
            </div>
        </div>


        <?php
        
    }
}

/**
 * get top banner section inside the home page
 */
if( ! function_exists('cc_home_top_side_banner') ){
    function cc_home_top_side_banner(){
        global $cc;
        $banner_images = $cc['cc-home-hero-banner-items'];
        
        // return
        if( ! is_enable_options('cc-home-hero-banner-visibility') ) return;
        if( ! is_array( $banner_images ) ) return;

        foreach ( $banner_images as $banner_image ) {
            $url = esc_url( $banner_image );
            printf( '<div><a href="%s" target="_blank"><img src="%s" /></a></div>', $url, $url );
        }

    }
}


/**
 * service list items set for home page.
 * 
 * @return void
 */
if( ! function_exists('cc_service_list_items') ){
    function cc_service_list_items(){
        global $cc;

        if( ! is_enable_options('cc-homepage-service-list-visibility') ) return; ?>

        <section class="CommonpaddingSection">
            <div class="container">
                <div class="row ServicesIconMainDIV">
                    <div class="W20 col-md-4 col-sm-4 d-flex PerServocesDiv">
                        <div class="ServicesImg Freeshoping">
                            <a href="javascript:void(0)">
                                <i class="fa-solid fa-truck-fast"></i>
                            </a>
                        </div>
                        
                        <div class="ServicesText">

                            <?php
                                // print shipping title
                                printf(
                                    '<div class="servicesTitel"><a href="javascript:void(0)">%s</a></div>',
                                    $cc['cc-homepage-service-list-shipping']
                                );

                                // print shipping subtitle
                                printf(
                                    '<div class="servicesP"><a href="javascript:void(0)">%s</a></div>',
                                    $cc['cc-homepage-service-list-shipping-subtitle']
                                );
                            
                            ?>
                        </div>
                    </div>
                    
                    <div class="W20 col-md-4 col-sm-4 d-flex PerServocesDiv">
                        <div class="ServicesImg Policy">
                            <a href="javascript:void(0)">
                                <img src="<?php echo CC_ASSETS_IMG . 'service/exchange-policy-default.png' ?>" alt="exchange policy">
                            </a>
                        </div>
                        
                        <div class="ServicesText">
                            <?php
                                // print exchange title
                                printf(
                                    '<div class="servicesTitel"><a href="javascript:void(0)">%s</a></div>',
                                    $cc['cc-homepage-service-list-exchange']
                                );

                                // print exchange subtitle
                                printf(
                                    '<div class="servicesP"><a href="javascript:void(0)">%s</a></div>',
                                    $cc['cc-homepage-service-list-exchange-subtitle']
                                );
                            
                            ?>
                        </div>
                    </div>

                    <div class="W20 col-md-4 col-sm-4 d-flex PerServocesDiv">
                        <div class="ServicesImg Support">
                            <a href="#">
                                <i class="fa-solid fa-headset"></i>
                            </a>
                        </div>
                        
                        <div class="ServicesText">
                            <?php
                                // print online support title
                                printf(
                                    '<div class="servicesTitel"><a href="javascript:void(0)">%s</a></div>',
                                    $cc['cc-homepage-service-list-support']
                                );

                                // print online support subtitle
                                printf(
                                    '<div class="servicesP"><a href="javascript:void(0)">%s</a></div>',
                                    $cc['cc-homepage-service-list-support-subtitle']
                                );
                            
                            ?>
                        </div>
                    </div>

                    <div class="W20 col-md-4 col-sm-4 d-flex PerServocesDiv">
                        <div class="ServicesImg Points">
                            <a href="#">
                                <i class="fa fa-trophy"></i>
                            </a>
                        </div>
                        
                        <div class="ServicesText">
                            <?php
                                // print reqard title
                                printf(
                                    '<div class="servicesTitel"><a href="javascript:void(0)">%s</a></div>',
                                    $cc['cc-homepage-service-list-reward']
                                );

                                // print reqard subtitle
                                printf(
                                    '<div class="servicesP"><a href="javascript:void(0)">%s</a></div>',
                                    $cc['cc-homepage-service-list-reward-subtitle']
                                );
                            
                            ?>
                        </div>
                    </div>

                    <div class="W20 col-md-4 col-sm-4 d-flex PerServocesDiv">
                        <div class="ServicesImg payment">
                            <a href="#">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Serivices/Services-icon-5.png" alt=""> -->
                                <i class="fa-sharp fa-solid fa-sack-dollar"></i>
                            </a>
                        </div>
                        
                        <div class="ServicesText">

                            <?php
                                // print payment title
                                printf(
                                    '<div class="servicesTitel"><a href="javascript:void(0)">%s</a></div>',
                                    $cc['cc-homepage-service-list-payment']
                                );

                                // print payment subtitle
                                printf(
                                    '<div class="servicesP"><a href="javascript:void(0)">%s</a></div>',
                                    $cc['cc-homepage-service-list-payment-subtitle']
                                );
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php

    }
}


/**
 * get the banner image for home page or any others page
 *
 * @param string $banner_number
 * @return void
 */
if( ! function_exists('cc_banner_image') ){

    function cc_banner_image( $banner_number = '' ){
        if( $banner_number == '' || empty( $banner_number ) ) return;

        // get first banner
        if( $banner_number == 1 ){
            cc_banner_first();
        }
        if( $banner_number == 2 ){
            cc_banner_second();
        }
        if( $banner_number == 3 ){
            cc_banner_third();
        }
        
    }
}

// get first banner
if( ! function_exists('cc_banner_first')){
    function cc_banner_first(){
        global $cc;
        if( ! is_enable_options('cc-homepage-banner1-visibility') ) return;

        printf(
            '<Section class="CommonpaddingSection"><div class="container BannerSec"><div class="row"><div class="col-12 BannerDiv"><img src="%s" /></div></div></div></Section>',
            esc_url( $cc['cc-homepage-banner1']['url'] )
        );
        
    }
}

// get second banner
if( ! function_exists('cc_banner_second')){
    function cc_banner_second(){
        global $cc;
        if( ! is_enable_options('cc-homepage-banner2-visibility') ) return;

        printf(
            '<Section class="CommonpaddingSection"><div class="container BannerSec"><div class="row"><div class="col-12 BannerDiv"><img src="%s" /></div></div></div></Section>',
            esc_url( $cc['cc-homepage-banner2']['url'] )
        );
    }
}

// get third banner
if( ! function_exists('cc_banner_third')){
    function cc_banner_third(){
        global $cc;
        if( ! is_enable_options('cc-homepage-banner3-visibility') ) return;

        printf(
            '<Section class="CommonpaddingSection"><div class="container BannerSec"><div class="row"><div class="col-12 BannerDiv"><img src="%s" /></div></div></div></Section>',
            esc_url( $cc['cc-homepage-banner3']['url'] )
        );

    }
}


/**
 * get feature brand
 * 
 * @return void
 */
if( ! function_exists('cc_feature_brand') ){
    function cc_feature_brand(){
        global $cc;

        if( ! is_enable_options('cc-homepage-feature-brand-visibility') ) return;

        $feature_brand = $cc['cc-homepage-feature-brand-image'];

        if( ! is_array( $feature_brand ) ) return;


        ?>
            <section class="CommonpaddingSection">
                <div class="container">
                    <div class="row Brandsection">
                        <div class="Titelh4">
                            <h4><?php echo $cc['cc-homepage-feature-brand-title']; ?></h4>
                        </div>

                        <div class="owl-carousel BrandCrosul owl-theme">
                            <?php
                                foreach( $feature_brand as $image_url ){
                                    printf(
                                        '<div class="item"><img src="%s" /></div>',
                                        esc_url( $image_url['url'] )
                                    );
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php
    }
}


/**
 * partners section
 * 
 * @return void
 */
if( ! function_exists('cc_partners') ){
    function cc_partners(){
        global $cc;

        if( ! is_enable_options('cc-homepage-partners-visibility') ) return;

        $partners = $cc['cc-homepage-partners-image'];

        if( ! is_array( $partners ) ) return;


        ?>
            <section class="CommonpaddingSection">
                <div class="container">
                    <div class="row Brandsection">
                        <div class="Titelh4">
                            <h4><?php echo $cc['cc-homepage-partners-title']; ?></h4>
                        </div>

                        <div class="owl-carousel BrandCrosul owl-theme">
                            <?php
                                foreach( $partners as $image_url ){
                                    printf(
                                        '<div class="item"><img src="%s" /></div>',
                                        esc_url( $image_url['url'] )
                                    );
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php
    }
}


/**
 * set popular categories
 * 
 * @return void
 */
if( ! function_exists('cc_popular_categories') ):
    function cc_popular_categories(){

        global $cc;

        if( ! is_enable_options('cc-homepage-popular-categories-visibility') ) return;

        $categories_images = $cc['cc-homepage-popular-categorie-image'];
        $categories_url   = $cc['cc-homepage-popular-categorie-url'];
        
        
        ?>
        <section class="CommonpaddingSection">
            <div class="container">
                <div class="row Brandsection">
                    <div class="Titelh4">
                        <h4>Popular Categories</h4>
                    </div>

                    <div class="owl-carousel CatagorisCrosul owl-theme">
                        <?php
                            foreach( $categories_images as $images ){

                                // merge array
                                $categories = array_merge( $categories_url, $images );

                                // remove duplicate values from array
                                $unique_array = array_unique( $categories );

                                // remove key from array which has empty value
                                $remove_emplty_value = array_filter( $unique_array );

                                // set new key inside array
                                $array_processed = [
                                    'link'  => $remove_emplty_value[0],
                                    'thumb' => $remove_emplty_value['url'],
                                ];

                                printf(
                                    '<div class="item"><div class="Catagoris2Div"><div><a href="%s"><img src="%s" /></a></div></div></div>',
                                    $array_processed['link'],
                                    $array_processed['thumb']
                                );

                            }

                        ?>

                    </div>
                </div>
            </div>
        </section>
        
        <?php
    }

endif;



/**
 * Retrive flash sale product
 *
 * @return void
 */
if( ! function_exists('cc_flash_sale_product') ):

    function cc_flash_sale_product(){

        global $cc;
        ?>



        <section class="CommonpaddingSection">
            <div class="container">
                <div class="row Brandsection">

                    <!-- title area -->
                    <div class="Titelh4 row RowPadingError">

                        <div class="col-lg-6 col-ms-6 col-sm-6 RowPadingError RowMarginError">
                            <h4>
                                <span><?php echo esc_html($cc['cc-homepage-flash-sale-title']); ?></span>
                                <i class="fa-solid fa-bolt FlashIcon"></i>
                            </h4>
                        </div>

                        <div class="col-lg-6 col-ms-6 col-sm-6 row TitleCntent RowPadingError RowMarginError">

                            <!-- count down -->
                            <div class="col-6 TimeCounting">
                                <span>02</span> :
                                <span>12</span> :
                                <span>35</span>
                            </div>

                            <!-- product page link -->
                            <div class="col-6 SeeAlSpan">
                                <?php
                                    if( class_exists('WooCommerce')){
                                        $flash_sale_page_url = get_permalink(wc_get_page_id('shop')) . '?flash_sale=true';
                                        printf('<a href="%s">%s</a>', esc_url( $flash_sale_page_url ), 'View All');
                                    }
                                    
                                ?>
                            </div>

                        </div>
                    </div>
                    <!-- title area end -->


                    <!-- content area -->
                    <div class="tab-content FlashPaddingTop">
                        <div class="row">
                            
                            <?php cc_get_flash_sale_product(); ?>

                        </div>
                    </div>
                    <!-- content area end -->

                </div>
            </div>
        </Section>
        <?php
    }
    
endif;



if( ! function_exists('cc_get_flash_sale_product')){
    function cc_get_flash_sale_product(){
        $meta_query = [
            'relation'    => 'AND',
            [
                'key'     => '_sale_price',
                'value'   => 0,
                'compare' => '>',
                'type'    => 'NUMERIC'
            ],
            [
                'key'     => '_sale_price_dates_from',
                'value'   => current_time('timestamp', true),
                'compare' => '<=',
                'type'    => 'NUMERIC'
            ],
            [
                'key'     => '_sale_price_dates_to',
                'value'   => current_time('timestamp', true),
                'compare' => '>=',
                'type'    => 'NUMERIC'
            ]
        ];
        
        $args = [
            'post_type'      => 'product',
            'posts_per_page' => -1,
            'meta_query'     => $meta_query
        ];
        
        $flash_sale = new WP_Query( $args );

        ?>

        <?php if( $flash_sale->have_posts() ) : ?>
            <?php while( $flash_sale->have_posts() ): $flash_sale->the_post(); ?>
                <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">

                    <div class="PerProductDiv">
                        <!-- product link -->
                        <a href="<?php the_permalink(); ?>">
                            <div class="ProductImgage">
                            <!-- product thumb -->
                                <?php 
                                    if( has_post_thumbnail( get_the_ID() )){
                                        printf(
                                        '<img src="%s" alt="%s">',
                                        esc_url( get_the_post_thumbnail_url() ),
                                        esc_html( get_the_title() )
                                        );
                                    }
                                    ?>
                                <!-- discount  -->
                                <div class="DiscountPersentese">
                                    <?php woocommerce_show_product_loop_sale_flash(); ?>
                                </div>

                                <!-- wishlist -->
                                <div class="cc-wishlist">
                                    <?php echo do_shortcode( '[yith_wcwl_add_to_wishlist]'); ?>
                                </div>
                            </div>

                            <div class="PrductText">
                                <!-- product title -->
                                <p class="ProductTitle"><?php echo get_cc_trim_post_title(25); ?></p>
                                <!-- product price -->
                                <p><span class="Price"> <?php woocommerce_template_loop_price(); ?> </span></p>

                                <!-- product review -->
                                <ul class="StartList">
                                    <?php woocommerce_template_loop_rating(); ?>
                                </ul>
                            </div>
                        </a>

                    </div>

                </div>
            <?php endwhile; ?>
        <?php else: ?>

            <h2>No Product Found.</h2>

        <?php endif; ?>
        <!-- reset post data -->
        <?php wp_reset_postdata(); ?>

        <?php
    }
}

/**
 * get social media icon with link
 * 
 * @return void
 */
if( ! function_exists('cc_get_social_share') ){
    function cc_get_social_share(){
        global $cc;
        // get social icon forawesome name
        $icon_name = $cc['social-share-class-name'];

        // get social link
        $icon_link = $cc['social-share-class-link'];


        // return if icon name is not exists/
        if( ! is_array( $icon_name ) ) return;

        // return if link is not icon
        if( ! is_array( $icon_link ) ) return;

        // if array count is not equal then return
        if( count( $icon_name ) !== count( $icon_link ) ) return;

        echo "<ul>\n";
        foreach ($icon_name as $key => $value) {
            printf(
                '<li><a href="%s" class="facbookNav"><i class="%s"></i></a></li>',
                esc_url( $icon_link[$key] ),
                esc_attr( $icon_name[$key] )
            );
        }
        echo "</ul>\n";
    }
}


/**
 * create header middle menu bar
 * 
 * @return void
 */
if( ! function_exists('cc_header_middle_area') ){
    function cc_header_middle_area(){

        if( ! is_enable_options('cc-header-enable') ) return; ?>

            <div class="MidNev">
                <div class="container">
                    <div class="row">

                        <div class="logo col-2">
                            <?php cc_logo(); ?>
                        </div>

                        <div class="Serchber col-7">
                            <?php cc_search_form(); ?>
                        </div>
                        <div class="SelectedIocn col-3">
                            <!-- <a href="./ShopingCart.html"> -->
                                <div class="IconDiv NavCart">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <div>
                                        <div class="cc-wc-update-count">
                                            <p class="Count" id="cc-wc-update-count">

                                                <?php
                                                    if( class_exists('WooCommerce') ){
                                                        echo WC()->cart->get_cart_contents_count();
                                                    }
                                                 ?>
                                            </p>
                                        </div>
                                        <a href="<?php cc_cart_page_url(); ?>">
                                        <p>My Cart</p></a>
                                    </div>

                                    <!-- Hover show chart summery start -->

                                    <div class="CartSummaryNav">
                                        
                                        <div class="widget_shopping_cart_content">
                                            <?php 
                                                if( class_exists('WooCommerce') ){
                                                    woocommerce_mini_cart();
                                                }
                                                
                                            ?>
                                        </div>
                                        
                                    </div>
                                    <!-- Hover show chart summery end -->
                                </div>
                            <!-- </a> -->

                            <a href="<?php echo get_wishlist_page_url(); ?>" class="LoveHideLaptop">
                                <div class="IconDiv">
                                    <i class="fa-regular fa-heart"></i>
                                    <div>
                                        <p class="Count"><?php echo get_wishlist_item_count(); ?></p>
                                        <p>Wishlist</p>
                                    </div>
                                </div>
                            </a>

                            <?php cc_wc_profile(); ?>

                        </div>
                        
                    </div>
                </div>
            </div>

        <?php

    }
}


/**
 * create search form for woocommerce and blog post
 * 
 * @return void
 */
if( ! function_exists('cc_search_form') ){

    function cc_search_form(){

        // if search is not enable the return here
        if( ! is_enable_options('cc-header-search') ) return;

        // get the search form 
        printf(
            '<form action="%s"><input type="text" name="s" placeholder="Search Your Product....."><label ><button type="submit" class="border-0 cc-search-bar-icon"><i class="fa-solid fa-magnifying-glass"></i></button></label></form>',
            esc_url( get_home_url('/'))
        );
    }
    
}

if( ! function_exists('cc_signout_url') ){
    function cc_signout_url(){
        if( ! is_user_logged_in() ) return;
        return wp_logout_url( home_url( '/' ) );
    }
}


/**
 * create woocommer profile.
 * 
 * @return void
 */
if( ! function_exists('cc_wc_profile') ){
    function cc_wc_profile(){

        if( ! class_exists('WooCommerce') ) return;?>

            <div class="IconDiv UserImg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/userImg1.png" alt="" id="switchAccount">

                <!-- switch acount start -->
                <div class="WtitchDiv">
                    
                    <?php
                        /**
                         * get dashboard page
                         * 
                         * @return void
                         */
                        if( is_user_logged_in() ){
                            printf(
                                '<div><a href="%s"><img src="%s" alt="">%s</a></div>',
                                esc_url(wc_get_page_permalink('myaccount')),
                                esc_url(get_template_directory_uri() . '/assets/img/switch-account/BuyAndSell.png'),
                                esc_html('Dashboard')

                            );
                        }
                        
                        /**
                         * get edit profile link
                         * 
                         * @return void
                         */
                        if( is_user_logged_in() ){
                            printf(
                                '<div><a href="%s"><img src="%s" />%s</a></div>',
                                esc_url(wc_get_endpoint_url('orders')),
                                esc_url( get_template_directory_uri() . '/assets/img/switch-account/RealstatMarkatinh.png'),
                                esc_html('Orders')
                            );
                        }

                        /**
                         * get edit profile link
                         * 
                         * @return void
                         */
                        if( is_user_logged_in() ){
                            printf(
                                '<div><a href="%s"><img src="%s" />%s</a></div>',
                                esc_url( wc_customer_edit_account_url() ),
                                esc_url( get_template_directory_uri() . '/assets/img/switch-account/document.png'),
                                esc_html('Edit Profile')
                            );
                        }

                        /**
                         * login and logout script
                         * 
                         * @return void
                         */
                        if( is_user_logged_in() ){
                            printf(
                                '<a href="%s" class="cc-login-logout-url">%s</a>',
                                esc_url( wp_logout_url( get_home_url('/') ) ),
                                esc_html('Signout')
                            );
                        }else{
                            printf(
                                '<a href="%s" class="cc-login-logout-url">%s</a>',
                                esc_url( wc_get_page_permalink('myaccount') ),
                                esc_html('Login')
                            );
                        }

                    ?>
                </div>
                <!-- switch acount end -->
            </div>

        <?php
    }
}



if( !function_exists('cc_get_product_query')){

    /**
     * get product category query
     *
     * @param [type] $term_id
     * @return $query | object
     */
    function cc_get_product_query( $term_id ){
        $args = [
            'post_type'      => 'product',
            'posts_per_page' => -1,
            'tax_query'      => [
                [
                    'taxonomy' => 'product_cat',
                    'field'    => 'id',
                    'terms'    => $term_id
                ]
            ]
        ];
        // initiate the query
        $query = new WP_Query( $args );

        return $query;
    }
}



if( ! function_exists('cc_custom_cat_product') ){
    function cc_custom_cat_product( array $categories ){?>

        <section class="CommonpaddingSection TitleBorderBottom">
            <div class="container">
                <div class="row Brandsection">
                    <div class="Titelh42 row RowPadingError RowMarginError">
                        <div class="col-3 RowPadingError RowMarginError">
                            <h4>
                                Furniture
                            </h4>
                        </div>

                        <!-- Dropdown title div start -->
                        <div class="col-6 ProductDropdown DisNoneinPhone">
                            <ul class="nav nav-tab">

                                <?php
                                    foreach ( $categories as $category_name ) {
                                        $category = get_term_by( 'name', $category_name, 'product_cat' );

                                        if( $category ){

                                            $cat = cc_get_product_query( $category->term_id );

                                            if( $cat->have_posts() ):

                                                printf( '<li><a class="nav-link text-capitalize" data-bs-toggle="tab" href="#%s">%s</a></li>', $category_name, $category_name );

                                            else:
                                                echo 'No Category Found';
                                            endif;

                                        }else{
                                            echo 'Category Not Found';
                                        }
                                    }

                                ?>
                            </ul>
                        </div>
                        <!-- Dropdown title div end -->

                        <div class="col-3 TitleCntent RowPadingError RowMarginError">
                            <div class="SeeAlSpan">
                                <a href="./AllProduct.html">
                                    See More
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Filter on phone  start-->
                    <div class="FilterSubcatagorisInPhone ProductDropdown showInphone">
                    
                        <ul class="nav nav-tab">
                            
                            <?php
                                foreach ( $categories as $category_name ) {
                                    $category = get_term_by( 'name', $category_name, 'product_cat' );

                                    if( $category ){

                                        $cat = cc_get_product_query( $category->term_id );

                                        if( $cat->have_posts() ):

                                            printf( '<li><a class="nav-link text-capitalize" data-bs-toggle="tab" href="#%s">%s</a></li>', $category_name, $category_name );

                                        else:
                                            echo 'No Category Found';
                                        endif;

                                    }else{
                                        echo 'Category Not Found';
                                    }
                                }

                            ?>


                        </ul>
                    </div>
                    <!-- Filter on phone  end-->

                    <!-- Tile Dropdown  expend start -->
                    <div class="tab-content">



                    <?php
                        foreach ( $categories as $category_name ) {
                            $category = get_term_by( 'name', $category_name, 'product_cat' );

                            if( $category ){

                                // query arguments
                                $cat = cc_get_product_query( $category->term_id );

                                if( $cat->have_posts() ): ?>
                                    <div class="tab-pane fade show active" id="<?php echo $category_name; ?>">
                                        <div class="row"> 
                                            <?php while( $cat->have_posts() ): $cat->the_post(); ?>

                                                <?php wc_get_template_part('content', 'product'); ?>

                                                <!-- <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                                                    <div class="PerProductDiv">
                                                        <a href="./Product-Page.html">
                                                            <div class="ProductImgage">
                                                                <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product1.jpg" alt="">
                                                                <div class="DiscountPersentese">
                                                                    -30%
                                                                </div>
                                                                <div class="ProductLove">
                                                                    <i class="fa-regular fa-heart"></i>
                                                                </div>
                                                            </div>

                                                            <div class="PrductText">
                                                                <p class="ProductTitle">Bathroom Cabinets</p>
                                                                <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                                                <ul class="StartList"> 
                                                                    <li>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </li> 
                                                                    <li>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </li> 
                                                                    <li>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </li> 
                                                                    <li>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </li> 
                                                                    <li>
                                                                        <i class="fa-solid fa-star"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div> -->


                                            <?php endwhile;

                                            // reset the post data
                                            wp_reset_postdata(); ?>

                                        </div>
                                    </div>

                                <?php else:
                                    echo 'No Category Found';
                                endif;

                            }else{
                                echo 'Category Not Found';
                            }
                        }
                    
                    
                    ?>
                    
                    
                    
                    
                    
                    


                        <div class="tab-pane fade" id="Bath">
                            <div class="row">
                                <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                                    <div class="PerProductDiv">
                                        <a href="./Product-Page.html">
                                            <div class="ProductImgage">
                                                <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product4.jpg" alt="">
                                                <div class="DiscountPersentese">
                                                    -30%
                                                </div>
                                                <div class="ProductLove">
                                                    <i class="fa-regular fa-heart"></i>
                                                </div>
                                            </div>

                                            <div class="PrductText">
                                                <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                                <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                                <ul class="StartList"> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="kitchen">
                            <div class="row">
                                <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                                    <div class="PerProductDiv">
                                        <a href="./Product-Page.html">
                                            <div class="ProductImgage">
                                                <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product1.jpg" alt="">
                                                <div class="DiscountPersentese">
                                                    -30%
                                                </div>
                                                <div class="ProductLove">
                                                    <i class="fa-regular fa-heart"></i>
                                                </div>
                                            </div>

                                            <div class="PrductText">
                                                <p class="ProductTitle">Bathroom Cabinets</p>
                                                <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                                <ul class="StartList"> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Dining">
                            <div class="row">
                                <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                                    <div class="PerProductDiv">
                                        <a href="./Product-Page.html">
                                            <div class="ProductImgage">
                                                <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product6.jpg" alt="">
                                                <div class="DiscountPersentese">
                                                    -30%
                                                </div>
                                                <div class="ProductLove">
                                                    <i class="fa-regular fa-heart"></i>
                                                </div>
                                            </div>

                                            <div class="PrductText">
                                                <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                                <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                                <ul class="StartList"> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li> 
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Tile Dropdown  expend start -->
                </div>
            </div>
        </section>

  
        
        <?php
    }
}