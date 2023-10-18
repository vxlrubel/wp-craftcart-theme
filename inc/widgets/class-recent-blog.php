<?php

namespace CC\Widgets;
use WP_Widget;
use WP_Query;

// directly access denied
defined('ABSPATH') || exit;

class Recent_Blog extends WP_Widget{

    /**
     * execute the default method
     */
    public function __construct(){
        parent::__construct(
            'cc-widget-blog-post',
            __( 'CC: Recent Post', CC_DOMAIN ),
            [
                'description' => __( 'This widget showing the recent blog post', CC_DOMAIN )
            ]
        );
    }

    /**
     * this method showing result in front-end
     *
     * @param [type] $args
     * @param [type] $instance
     * @return void
     */
    public function widget( $args, $instance ){

        $get_title = $instance['title'];
        $count = $instance['recent-post-count'];
        ?>

        <?php echo $args['before_widget']; ?>
            <?php
                printf(
                    '%s %s %s',
                    $args['before_title'],
                    $get_title,
                    $args['after_title']
                );
            ?>

            <ul>
                <?php 
                    $arr = [
                        'post_type'      => 'post',
                        'posts_per_page' => $count
                    ];

                    $qry = new WP_Query( $arr );

                    if( $qry->have_posts() ):
                        while( $qry->have_posts() ): $qry->the_post(); ?>
                            <li class="AboutUSLi">
                                <div class="LinkDiv LinkFrist">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo get_cc_trim_post_title() .'...'; ?>
                                    </a>
                                </div>
                            </li>
                        <?php
                        endwhile;
                    else:
                        printf(
                            '<li class="AboutUSLi"><a href="#">%s</a></li>',
                            __( 'Post isn\'t available.', CC_DOMAIN )
                        );
                    endif;
                 ?>
                

            </ul>
        <?php echo $args['after_widget']; ?>

        <?php
    }


    /**
     * This method showing the form inside the widgets from dashboard
     *
     * @param [type] $instance
     * @return void
     */
    public function form( $instance ){

        $id    = $this->get_field_id('title');
        $name  = $this->get_field_name('title');
        $count = $this->get_field_name('recent-post-count');

        $get_title = isset( $instance['title'] ) ? $instance['title'] : 'Recent Post';
        $get_count = isset( $instance['recent-post-count']) ? $instance['recent-post-count'] : '1';

        ?>
            <p class="d-flex flex-wrap">
                <label for="<?php echo $id; ?>">Title: </label>
                <input type="text" value="<?php echo $get_title; ?>" class="widefat" id="<?php echo $id; ?>" name="<?php echo $name; ?>">
            </p>
            <div class="d-flex align-items-center justify-content-between mb-3">
                <span>Post Count: </span>
                <div class="cc-counter">
                    <!-- <span class="minus">-</span> -->
                    <a href="#" class="minus">-</a>
                    <input type="number" min="1" max="20" step="1" value="<?php echo $get_count; ?>" name="<?php echo $count; ?>">
                    <!-- <span class="plus">+</span> -->
                    <a href="#" class="plus">+</a>
                </div>
            </div>
        
        <?php
    }

    /**
     * update all the old instance inside the new instance
     *
     * @param [type] $new_instance
     * @param [type] $old_instance
     * @return void
     */
    public function update( $new_instance, $old_instance ){
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['recent-post-count'] = $new_instance['recent-post-count'];
        return $instance;
    }

}