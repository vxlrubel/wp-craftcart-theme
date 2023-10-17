
<!-- Comments and Reply start -->
<div class="CommentReply">
    <div class="d-flex justify-content-between align-items-center ">
        <div class="CommentCount">
            <!-- <i class="fa fa-messages"></i>s -->
            <span><i class="fa fa-comment"></i></span>
            <span class="fw-bold"><?php comments_number(); ?></span>
        </div>

        <div class="BlogBtn">
            <a href="#CommentDivd" class="button">Leave a Reply</a>
        </div>
    </div>

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
    </div>

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
    </div>
</div>

<!-- comment reply div start -->
<div class="ReolyForm" id="CommentDivd">
    <span class="ReplyTitle fw-bold">Leave A Reply</span>
    <form>
        <div>
            <!-- <label for="name">Name</label> -->
            <input type="text" placeholder="You Full Name">
        </div>

        <div>
            <!-- <label for="email">Email</label> -->
            <input type="text" placeholder="Email Address">
        </div>

        <div>
            <!-- <label for="text">Massage</label> -->
            <textarea name="text" id=""placeholder="What have on your mind"></textarea>
            <!-- <input type="text" > -->
        </div>

        <button>Sumbit Comment <i class="fa-solid fa-arrow-right"></i></button>
    </form>
</div>
<!-- comment reply div end -->