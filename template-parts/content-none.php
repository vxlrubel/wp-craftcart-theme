<div class="pb-5
text-center">
    <h2 class="text-dark py-5">No Post Abailable</h2>
    <a href="">create post</a>
    <div class="text-dark">
    <?php 
        if( cc_editor() ){
            echo "editor";
        }else{
            echo 'home';
        }
     ?>
     </div>
</div>