<?php
/**
 * Template Name: WC Login
 */


 get_header(); ?>


<section class="HerosSection CommonpaddingSection LoginSection">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 offset-lg-4">
            <div class="text-dark border shadow-lg">

            <?php wc_get_template('myaccount/form-login.php'); ?>

               
            </div>
         </div>
      </div>
   </div>
</section>



<?php
 get_footer();