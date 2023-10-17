<div class="pb-5 text-center">
    <?php 
        printf(
            '<h2 class="text-dark py-5">%s</h2>',
            __( 'No Post Abailable', CC_DOMAIN )
        );
        if( cc_editor() ){
            printf(
                '<a href="%s" class="btn btn-success px-3 cc-btn" target="_self">%s</a>',
                esc_url( admin_url('post-new.php') ),
                __( 'Create New Post', CC_DOMAIN )
            );
        }else{
            printf(
                '<a href="%s" class="btn btn-success px-3 cc-btn" target="_self">%s</a>',
                esc_url( home_url('/') ),
                __( 'Visit Home', CC_DOMAIN )
            );
        }
     ?>
</div>