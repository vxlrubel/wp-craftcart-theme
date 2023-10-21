<?php global $cc; ?>
        <!--Footer Start -->
            <footer>
                <!-- Frist Footer start -->

                <?php get_sidebar( 'footer' ); ?>
                
                <!-- Frist Footer start -->

                <!-- last footer start-->
                <div class="lastFooter py-2">
                    <div class="container CommonpaddingSection">

                        <?php cc_footer_menu(); ?>

                        <div class="dmca" style="text-align: <?php echo $cc['cc_copyright_text_align']; ?>">
                            <?php echo $cc['cc_copyright_text']; ?>
                        </div>
                    </div>
                </div>
                <!-- last footer start-->
            </footer>
        <!-- Footer End -->
        <?php wp_footer(); ?>
    </body>
</html>