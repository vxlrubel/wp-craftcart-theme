
<!-- Comments and Reply start -->

<?php if( have_comments() ): ?>
    <div class="CommentReply">
        <div class="d-flex justify-content-between align-items-center ">
            <div class="CommentCount">
                <span><i class="fa fa-comment"></i></span>
                <span class="fw-bold"><?php comments_number(); ?></span>
            </div>

            <div class="BlogBtn">
                <a href="#CommentDivd" class="button">Leave a Reply</a>
            </div>
        </div>

        <ol class="cc-comment-list">
            <?php
                wp_list_comments( [
                    'avatar_size' => 60,
					'style'       => 'ol',
					'short_ping'  => true,
                ] );
             ?>
        </ol>
    </div>
    
<?php endif ?>

<?php comment_form(); ?>