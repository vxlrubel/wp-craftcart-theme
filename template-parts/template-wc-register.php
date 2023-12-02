<?php
/**
 * Template Name: WC Register
 */


 get_header(); ?>


<section class="HerosSection CommonpaddingSection LoginSection">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 offset-lg-4">
            <div class="text-dark border shadow-lg p-3">

               <?php wc_get_template('myaccount/form-register.php'); ?>
               
            </div>
         </div>
      </div>
   </div>
</section>



<?php
 get_footer();