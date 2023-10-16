<?php get_header(); ?>
        <!-- About Us section start -->
<Section class="HerosSection CommonpaddingSection BlogSection">
    <div class="container">
        <div class="row">
            <?php if( have_posts() ):?>
            <div class="col-lg-9 col-md-8 col-sm-6 AboutUsLeft"> 
                <div class="row">
                    <div class="col-lg-6 PerBlogDIvCol">
                        <div class="PerBlogDIv">
                            <h2>Freelancing Training Course In Bangladesh</h2>

                            <div>
                                <ul>
                                    <li> 
                                        <i class="fa-solid fa-user"></i>
                                        <span>Nasir</span>
                                    </li>
                                    <li> 
                                        <i class="fa-solid fa-clock"></i>
                                        <span>January 19, 2022</span>
                                    </li>
                                    <li> 
                                        <i class="fa-solid fa-briefcase"></i>
                                        <span> App Development</span>
                                    </li>
                                    <li> 
                                        <i class="fa fa-comment"></i>
                                        <span>  No Comments</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="text-center">
                                <img src="./Images/Blog/blog.png" alt="">
                            </div>

                            <p>
                                Freelancing is a good way to earn extra money if you are looking for part-time income.
                                If you have the skills and are willing to work hard, this opportunity might be right 
                                for you.
                            </p>

                            <a href="./Blog-Daitles.html" class="BlogDatilsL">Read More > </a>
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