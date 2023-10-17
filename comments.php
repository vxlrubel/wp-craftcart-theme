
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
<!-- 
        <div class="ShowComment">
            <span class="NmaeCommenter">Syed Nauman Sajid</span><br>
            <span class="CommentDate">Jun 6, 2022 at 2:54 pm</span> 
            <div class="SubmitedCommet">
                    <span>Brilliant and perfectly worked for me.</span> <br>
                    <a href="#CommentDivd" class="CommentReply">
                        <i class="fa-solid fa-reply"></i>
                        Reply
                    </a>
            </div>
        </div> -->
    </div>
<?php endif ?>

<?php
    comment_form();
 ?>
<!-- <div class="ReolyForm" id="CommentDivd">
    <span class="ReplyTitle fw-bold">Leave A Reply</span>
    <form>
        <div>
            <input type="text" placeholder="You Full Name">
        </div>

        <div>
            <input type="text" placeholder="Email Address">
        </div>

        <div>
            <textarea name="text" id=""placeholder="What have on your mind"></textarea>
        </div>

        <button>Sumbit Comment <i class="fa-solid fa-arrow-right"></i></button>
    </form>
</div> -->
<!-- comment reply div end -->