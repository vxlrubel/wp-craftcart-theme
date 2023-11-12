<?php while( have_posts() ): the_post(); ?>

<div class="col-lg-9 col-md-8 col-sm-6 AboutUsLeft"> 

    <div class="DaitlesPerDIv">
        <h2 class="MainTilte mb-3"><?php the_title(); ?></h2>

        <div class="imageDivBlog text-center">
            <?php the_post_thumbnail('full', ['class'=> 'w-100']); ?>
        </div>

        <?php the_content(); ?>
    </div>

    <!-- comment template -->
    <?php comments_template(); ?>
    
</div>
<?php endwhile ?>