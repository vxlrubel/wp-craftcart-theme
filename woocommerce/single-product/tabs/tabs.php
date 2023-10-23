<?php

/**
 * Modify woocommerce tab section
 * 
 * @package Craft_Cart
 * @version 1.0
 * @since 1.0
 * @author Rubel Mahmud (Sujan)
 * @link https://github.com/vxlrubel
 */

// directly access denied
defined('ABSPATH') || exit; 

$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );



if( ! empty( $product_tabs ) ): ?>

<section class="CommonpaddingSection">
   <div class="container">
         <div class="details-area">
            <div class="row pl-1">
               <div class="nav" id="nav-tab" role="tablist">

                     <?php 
                        foreach ($product_tabs as $key => $product_tab) {
                           if( $key == 'description' ){
                              $show = 'active';
                           }else{
                              $show = '';
                           }
                           printf(
                              '<button class="nav-link %s" id="nav-%s-tab" data-bs-toggle="tab" data-bs-target="#nav-dscr-%s" type="button" role="tab" aria-controls="nav-dscr-%s" aria-selected="true">%s</button>',
                              $show,
                              $key,
                              $key,
                              $key,
                              $product_tab['title']
                           ); 
                        }
                      ?>
               </div>
            </div>

            <div class="tab-content b-3" id="nav-tabContent">

               <?php 
                  foreach ( $product_tabs as $key => $product_tab ) { 
                        if( $key == 'description' ){
                           $show = 'show active';
                        }else{
                           $show = '';
                        }
                     ?>
                     <div class="tab-pane fade <?php echo $show; ?>" id="nav-dscr-<?php echo $key ?>" role="tabpanel" aria-labelledby="nav-dscr-tab" tabindex="0">
                           <div class="product-dscr">
                              <?php
                                 if( isset( $product_tab['callback'] ) ){
                                    call_user_func( $product_tab['callback'], $key, $product_tab );
                                 }
                               ?>
                           </div>
                     </div>
                  <?php }

                ?>
            
               <!-- <div class="tab-pane fade show active" id="nav-dscr" role="tabpanel" aria-labelledby="nav-dscr-tab" tabindex="0">
                     <div class="product-dscr">
                        <?php the_content(); ?>
                     </div>
               </div>

               <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab" tabindex="0">
                     <div class="product-information">
                        <ul>
                           <li><span>Brand Name:</span>KLGH</li>
                        </ul>
                     </div>
               </div>
                  
               <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
                     <div class="product-review">
                        <div class="review-overview">
                           <div class="left">
                                 <h2>4.2 <span>/5</span></h2>
                                 <p>251 Ratings</p>
                           </div>
                           <div class="right">
                                 <ul>
                                    <li>
                                       <div class="stars">
                                             <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp rated"></i>
                                             <i class="fa-solid fa-star-sharp rated"></i>
                                       </div>
                                       <div class="review-line">
                                             <div class="progress"><div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div></div>
                                       </div>
                                       <div class="percentage"><span>103</span></div>
                                    </li>
                                 </ul>
                           </div>
                        </div>

                        <div class="review-title"><h3>Reviews</h3></div>
                        <div class="review-wrap">

                           <div class="single-review">
                                 <div class="user">
                                    <div class="part-img"><img src="./Images/users.jpg" alt="User" /></div>
                                    <div class="txt">
                                       <span class="name">Shaikh Dardah</span> <span class="date">17/08/2022</span>
                                       <span class="star">
                                             <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp rated"></i>
                                             <i class="fa-solid fa-star-sharp"></i>
                                       </span>
                                    </div>
                                 </div>

                                 <div class="comment-area">
                                    <p>
                                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur eos veniam aperiam autem sint beatae eveniet minima impedit, deserunt magni harum aut ducimus explicabo, consectetur natus
                                       nulla repellendus quos provident deserunt magni harum aut ducimus explicabo, consectetur natus nulla repellendus quos provident deserunt magni harum aut ducimus explicabo, consectetur natus
                                       nulla repellendus quos provident.
                                    </p>
                                    <div class="bottom-wrap">
                                       <div class="gallery-wrap">
                                             <div class="img-gallery">
                                                <button class="client-img"><img src="./Images/Product/Product3.jpg" alt="image" /></button>
                                                <button class="client-img"><img src="./Images/Product/Product3.jpg" alt="image" /></button>
                                                <button class="client-img"><img src="./Images/Product/Product3.jpg" alt="image" /></button>
                                                <button class="client-img"><img src="./Images/Product/Product3.jpg" alt="image" /></button>
                                             </div>
                                             <div class="view-panel">
                                                <img class="client-product" src="assets/images/index.html" alt="image" /> <button class="clt-view-panel-close"><i class="fa-light fa-circle-xmark"></i></button>
                                             </div>
                                       </div>
                                       <div class="reaction">
                                             <div class="like">
                                                <button><i class="fa-solid fa-thumbs-up"></i></button> <span>(2)</span>
                                             </div>
                                             <div class="dislike">
                                                <button><i class="fa-solid fa-thumbs-down"></i></button> <span>(0)</span>
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
               </div> -->
            </div>
         </div>
   </div>
</section>
<?php endif ?>
