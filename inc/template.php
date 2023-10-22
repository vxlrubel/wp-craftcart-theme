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
                    <a href="./Login.html"><i class="fa-regular fa-user"></i></a>
                </div>
            </div>
        <?php
    }
}
