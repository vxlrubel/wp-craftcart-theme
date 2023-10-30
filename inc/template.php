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
        echo get_permalink(wc_get_page_id('cart'));
    }
}

/**
 * get profile page url
 */
if( ! function_exists('cc_profile_page_url') ){
    function cc_profile_page_url(){
        echo get_permalink(wc_get_page_id('myaccount'));
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

            <div class="carousel-inners home-carousel-slider owl-carousel">

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