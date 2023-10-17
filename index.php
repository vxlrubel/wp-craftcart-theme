<?php get_header(); ?>
        <!-- About Us section start -->
<Section class="HerosSection CommonpaddingSection BlogSection">
    <div class="container">
        <div class="row">
            <?php if( have_posts() ):?>
            <div class="col-lg-9 col-md-8 col-sm-6 AboutUsLeft"> 
                <div class="row">
                    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                    <div class="col-12 text-dark">
                        <div class="cc-posts-pagination my-3">
                            <?php 
                                the_posts_pagination([
                                    'mid_size'           => 1,
                                    'prev_text'          => '&lt;',
                                    'next_text'          => '&gt;',
                                    'screen_reader_text' => ' ',
                                    'class'              => 'cc_pagination',
                                ]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            
            <?php get_sidebar(); ?>
            
            <?php else: ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>            
            <?php endif ?>
        </div>
    </div>
</Section>
        <!-- About Us section end -->
<?php get_footer(); ?>