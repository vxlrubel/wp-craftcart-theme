<?php get_header(); ?>
<!-- About Us section start -->
<Section class="HerosSection CommonpaddingSection BlogSection">
    <div class="container">
        <div class="row">

            <?php get_template_part( 'template-parts/content', 'single' ); ?>

            <?php get_sidebar(); ?>
        </div>
    </div>
</Section>
<!-- About Us section end -->

<?php get_footer(); ?>
