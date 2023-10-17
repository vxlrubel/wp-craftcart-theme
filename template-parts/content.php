<?php while( have_posts() ): the_post(); ?>
    <div class="col-lg-6 PerBlogDIvCol">
        <div class="PerBlogDIv">
            <h2><?php echo get_cc_trim_post_title() . '...'; ?></h2>

            <div>
                <ul class="d-flex flex-wrap">
                    <li class="d-inline-flex align-items-center"> 
                        <i class="fa-solid fa-user"></i>
                        <span><?php echo get_the_author(); ?></span>
                    </li>
                    <li class="d-inline-flex align-items-center"> 
                        <i class="fa-solid fa-clock"></i>
                        <span><?php the_time( 'F d, Y' ); ?></span>
                    </li>
                    <li class="d-inline-flex align-items-center"> 
                        <i class="fa-solid fa-briefcase"></i>
                        <span><?php the_category( ', ' );?></span>
                    </li>
                    <li class="d-inline-flex align-items-center"> 
                        <i class="fa fa-comment"></i>
                        <span>
                            <?php
                                comments_number();
                             ?>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="text-center">
                <?php the_post_thumbnail(); ?>
            </div>

            <p>
                <?php echo get_cc_trim_post_content(75) . '...'; ?>
            </p>

            <?php 
                printf( 
                    '<a href="%s" class="BlogDatilsL">%s ></a>',
                    esc_url( get_permalink( get_the_ID() ) ),
                    __( 'Read More', CC_DOMAIN )
                );
             ?>
        </div>
    </div>
    <?php endwhile; ?>