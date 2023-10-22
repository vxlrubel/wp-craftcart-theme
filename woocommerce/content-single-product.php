<?php

// derectly access denied
defined('ABSPATH') || exit;

// include header functionality
get_header(); ?>



<!-- Forduct view area start -->
<section class="CommonpaddingSection ProductViewArea">
   <div class="container">

         <?php woocommerce_output_all_notices(); ?>

         <!-- show file direction  -->
         <div class="ShowCatagoritStapes">
               <?php woocommerce_breadcrumb(); ?>
         </div>

         <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5">
               <div class="BigImg">
                     <a href="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="MagicZoom" id="jeans">
                        <?php the_post_thumbnail(); ?>
                     </a>
               </div>

               <div class="SmallImg d-flex">
                     <div>
                        <a href="https://st.hzcdn.com/simgs/d591866d01d3c164_9-8400/home-design.jpg"  
                           data-zoom-id="jeans" 
                           data-image="https://st.hzcdn.com/simgs/d591866d01d3c164_9-8400/home-design.jpg" 
                           data-options="cssClass: mz-show-arrows;"
                        >
                           <img src="https://st.hzcdn.com/simgs/d591866d01d3c164_9-8400/home-design.jpg" alt="">
                        </a>
                     </div>
                     
                     <div>
                        <a href="https://st.hzcdn.com/simgs/b951a46001d3c166_9-8400/home-design.jpg"  
                           data-zoom-id="jeans" 
                           data-image="https://st.hzcdn.com/simgs/b951a46001d3c166_9-8400/home-design.jpg" 
                           data-options="cssClass: mz-show-arrows;"
                        >
                           <img src="https://st.hzcdn.com/simgs/b951a46001d3c166_9-8400/home-design.jpg" alt="">
                        </a>
                     </div>
                     
                     <div>
                        <a href="https://st.hzcdn.com/simgs/87b1c6c601d3c167_9-8400/home-design.jpg"  
                           data-zoom-id="jeans" 
                           data-image="https://st.hzcdn.com/simgs/87b1c6c601d3c167_9-8400/home-design.jpg" 
                           data-options="cssClass: mz-show-arrows;"
                        >
                           <img src="https://st.hzcdn.com/simgs/87b1c6c601d3c167_9-8400/home-design.jpg" alt="">
                        </a>
                     </div>

                     <div>
                        <a href="./Images/Product/Product.jpg"  
                           data-zoom-id="jeans" 
                           data-image="./Images/Product/Product.jpg" 
                           data-options="cssClass: mz-show-arrows;"
                        >
                           <img src="./Images/Product/Product.jpg" alt="">
                        </a>
                     </div>
               </div>

                     <!-- Buy Both Start -->
                     <div class="BuyBoth">
                        <h6 class="Bothtitle">You can also buy</h6>

                        <div class="ProductInfo">
                           <div class="ProductAndTitle">
                                 <div class="PRoductImg">
                                    <img src="./Images/Product/Light/llight1.jpg" alt="">
                                 </div>

                                 <div class="ProductTitle">
                                    <h6>
                                       BadRoom Light 
                                    </h6>

                                    <span>
                                       Tk 0.00
                                    </span> 
                                 </div>
                           </div>

                           <div class="BothPriceAndBtn">
                                 <div class="BothPrice">
                                    <span>Total Price:</span>
                                    <h6>Tk 54252</h6>
                                 </div>

                                 <div class="BothBtn">
                                    <button>Buy Both</button>
                                 </div>
                           </div>
                        </div>
                     </div>
                     <!-- Buy Both End -->
            </div>

            <div class="col-lg-4 col-md-7 col-sm-6 product-view-area">
               <div class="part-txt">
                     <h2 class="main-product-title"><?php the_title(); ?></h2>
                     <div class="review">
                        <span class="star">
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                        </span>
                        <span class="rating-amount">3 Reviews</span>
                     </div>

                     <p class="price"><span>Tk 96.00</span> Tk 75.00</p>

                     <ul class="short-details">
                        <li>Availability: <span>In stock</span></li>
                        <li>Product Code: <span>#4657</span></li>
                        <li>Tags: <span>Fashion, Hood, Classic</span></li>
                     </ul>
                     <!-- <p class="dscr">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae rerum eveniet esse modi nemo mollitia. Vitae adipisci ab nulla sequi fuga saepe harum placeat voluptatibus ea quam, assumenda illum natus.
                     </p> -->

                     <div class="VariantColor">
                        <div class="ProductColor">
                           <span>Color:</span>
                           <div class="BtnsDiv">
                                 <button class="ColorBtn1"></button>
                                 <button class="ColorBtn2"></button>
                                 <button class="ColorBtn3"></button>
                           </div>
                        </div>

                        <div class="Variant">
                           <span>Variant:</span>
                           <div class="VariantImgs">
                                 <div class="VarImg">
                                    <img src="./Images/Product/Product1.jpg" alt="">
                                 </div>
                                 <div class="VarImg">
                                    <img src="./Images/Product/Product2.jpg" alt="">
                                 </div>
                                 <div class="VarImg">
                                    <img src="./Images/Product/Product3.jpg" alt="">
                                 </div>
                              <!--  <div class="VarImg">
                                    <img src="./assets/images/Dairy-Bakery/Chips2.jpg" alt="">
                                 </div> -->
                                 <!-- <div class="VarImg">
                                    <img src="./assets/images/Dairy-Bakery/Chips2.jpg" alt="">
                                 </div>
                                 <div class="VarImg">
                                    <img src="./assets/images/Dairy-Bakery/Chips2.jpg" alt="">
                                 </div> -->
                           </div>

                           <div class="VariantImgs">
                                 <div class="TextVariant">
                                    <span>Variant1</span>
                                 </div>
                                 <div class="TextVariant">
                                    <span>Variant2</span>
                                 </div>
                                 <div class="TextVariant">
                                    <span>Variant3</span>
                                 </div>
                                 <div class="TextVariant">
                                    <span>Variant1</span>
                                 </div>
                                 <div class="TextVariant">
                                    <span>Variant2</span>
                                 </div>
                                 <div class="TextVariant">
                                    <span>Variant3</span>
                                 </div>
                           </div>
                        </div>
                     </div>

                     <form>
                        <div class="row g-xl-4 g-3">
                           <div class="col-lg-8 col-md-12 col-sm-4">
                                 <div class="quantity-wrap">
                                    <label>QTY</label>
                                    <div class="product-count">
                                       <div class="quantity rapper-quantity">
                                             <input type="number" min="1" max="100" step="1" value="1" readonly />
                                             <div class="quantity-nav">
                                                <div class="quantity-button quantity-down"><i class="fa-solid fa-minus"></i></div>
                                                <div class="quantity-button quantity-up"><i class="fa-solid fa-plus"></i></div>
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </form>

                     <div class="btn-box">
                        <button id="addToCart">
                           <span><i class="fa fa-cart-shopping"></i></span> add to cart
                        </button>
                        <button id="addToWishList">
                           <span><i class="fa fa-heart"></i></span> add to wishlist
                        </button>
                     </div>

                     <div class="product-share">
                        <span>Share Link:</span>
                        <div class="social">
                           <a href="#"><i class="fa-brands fa-facebook-f"></i></a> <a href="#"><i class="fa-brands fa-twitter"></i></a> <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                           <a href="#"><i class="fa-solid fa-rss"></i></a>
                        </div>
                     </div>
               </div>
            </div>

            <div class="col-lg-3 col-md-0 col-sm-0">
               <div class="delivary">
                     <div>
                        <h5><i class="fa-solid fa-truck"></i> Delivery Charge: </h5>
                        <ul>
                           <li>
                                 <i class="fa fa-location-dot"></i> 
                                 Inside Dhaka : Taka 60 (1-5 Days)
                           </li>
                           <li>
                                 <i class="fa-solid fa-location-arrow"></i>
                                 Outside Dhaka : Taka 150 (1-7 Days)
                           </li>
                           <li>
                                 <i class="fa fa-hand-holding"></i>
                                 Cash on Delivery available
                           </li>
                        </ul>
                     </div>

                     <div>
                        <h5><i class="fa-solid fa-person-walking-arrow-loop-left"></i> Return & Warranty: </h5>
                        <ul>
                           <li>
                                 <!-- <i class="fa-solid fa-hand"></i> -->
                                 <i class="fa fa-lock"></i>
                                 7 Days Returns Change of mind is not applicable
                           </li>
                           <li>
                                 <i class="fa-solid fa-shield-halved"></i>
                                 Warranty not available
                           </li>
                           <li>
                                 <i class="fa fa-hand-holding"></i>
                                 Cash on Delivery available
                           </li>
                        </ul>
                     </div>
               </div>
               
               <div class="delivary delivary2">
                     <div>
                        <span>Sold by</span>
                        <h5>FRESHED Fashion</h5>
                     </div>
                     
                     <div class="PdpSellerInfoPc">
                        <div>
                           <span>Positive Seller Ratings</span>
                           <h5>92%</h5>
                        </div>
                        <div>
                           <span>Ship on Time</span>
                           <h5>100%</h5>
                        </div>
                        <div>
                           <span>Chat Response Rate</span>
                           <h5>80%</h5>
                        </div>
                     </div>
               </div>

               <div class="ChargeDiv mt-3">
                     <h5 class="title">Payment Method</h5>

                        <div class="panel-body">
                           <img src="./Images/Amex.jpg" alt="">
                           <img src="./Images/Visa.jpg" alt="">
                           <img src="./Images/Master-card.jpg" alt="">
                           <img src="./Images/paypal.png" alt="">
                        </div>
               </div>
            </div>
         </div>
   </div>
</section>
<!-- Forduct view area end -->

<!-- PRODUCT REVIEW AND COMMENT START -->
<section class="CommonpaddingSection">
   <div class="container">
         <div class="details-area">
            <div class="row pl-1">
               <div class="nav" id="nav-tab" role="tablist">
                     <button class="nav-link active" id="nav-dscr-tab" data-bs-toggle="tab" data-bs-target="#nav-dscr" type="button" role="tab" aria-controls="nav-dscr" aria-selected="true">Description</button>
                     <button class="nav-link" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-info" aria-selected="false">Information</button>
                     <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews</button>
               </div>
            </div>

            <div class="tab-content b-3" id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-dscr" role="tabpanel" aria-labelledby="nav-dscr-tab" tabindex="0">
                     <div class="product-dscr">
                        <p>
                           Shank porchetta anim ham in esse. Duis swine mollit incididunt, quis pork belly rump ut ball tip venison strip steak pancetta proident. Ground roun duis beef, eu sunt non dolor esse capicola shoulder
                           strip steak. Ut fatback chuck minim exercitation kielbasa. Cupidatat nostrud prosciutto corned beefdgf meatball sausage lorem.Ground round jowl pig, short ribs turducken cillum labore aliqua bacon ea
                           doner anim esse. Jerky laboris id, fatback ut gfjb Filet mignon corned beef laboris ipsum porchetta beef irure dolor fatback. Pariatur cupim occaecat short ribs
                        </p>
                        <p>
                           consectetur, venison ipsum flank hamburger bacon tri-tip. Eu duis est cupidatat prosciutto alcatra, consectetur aute velit shoulder shankle ham ho Cillum deserunt velit dolor, beef ribs excepteur
                           hamburger flank occaecat. Qui dolor flank picanha t-bone lorem
                        </p>
                        <div class="row">
                           <div class="col-lg-8 col-md-6">
                                 <p class="mt-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodt tempor incididunt ut labore et dolore magna aliqua. Quis ipsum vcdisse ultrices gravida. Risus commodo viverra maecenas
                                    accumsan lacus Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                 </p>
                                 <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                           </div>
                        </div>
                        <p>
                           Shank porchetta anim ham in esse. Duis swine mollit incididunt, quis pork belly rump ut ball tip venison strip steak pancetta proident. Ground roun duis beef, eu sunt non dolor esse capicola shoulder
                           strip steak. Ut fatback chuck minim exercitation kielbasa. Cupidatat nostrud prosciutto corned beefdgf meatball sausage lorem.Ground round jowl pig, short ribs turducken cillum labore aliqua bacon ea
                           doner anim esse. Jerky laboris id, fatback ut gfjb Filet mignon corned beef laboris ipsum porchetta beef irure dolor fatback. Pariatur cupim occaecat short ribs
                        </p>
                     </div>
               </div>

               <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab" tabindex="0">
                     <div class="product-information">
                        <ul>
                           <li><span>Brand Name:</span>KLGH</li>
                           <li><span>Vocalism Principle:</span>Dynamic</li>
                           <li><span>Style:</span>Over the Ear</li>
                           <li><span>Origin:</span>Mainland China</li>
                           <li><span>Control Button:</span>Yes</li>
                           <li><span>Volume Control:</span>Yes</li>
                           <li><span>Certification:</span>CE</li>
                           <li><span>Number Of Drivers:</span>2</li>
                           <li><span>Plug Type:</span>Line Type</li>
                           <li><span>Range:</span>up to 32 Ω</li>
                           <li><span>Material:</span>Fabric</li>
                           <li><span>Memory Card:</span>Yes</li>
                           <li><span>Waterproof:</span>No</li>
                           <li><span>Magnet Type:</span>Other</li>
                           <li><span>Wireless Type:</span>Bluetooth</li>
                           <li><span>Codecs:</span>AAC</li>
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
                                    <li>
                                       <div class="stars">
                                             <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp rated"></i>
                                             <i class="fa-solid fa-star-sharp"></i>
                                       </div>
                                       <div class="review-line">
                                             <div class="progress"><div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 29%;" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div></div>
                                       </div>
                                       <div class="percentage"><span>73</span></div>
                                    </li>
                                    <li>
                                       <div class="stars">
                                             <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp"></i>
                                             <i class="fa-solid fa-star-sharp"></i>
                                       </div>
                                       <div class="review-line">
                                             <div class="progress"><div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 16%;" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div></div>
                                       </div>
                                       <div class="percentage"><span>39</span></div>
                                    </li>
                                    <li>
                                       <div class="stars">
                                             <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp"></i> <i class="fa-solid fa-star-sharp"></i>
                                             <i class="fa-solid fa-star-sharp"></i>
                                       </div>
                                       <div class="review-line">
                                             <div class="progress"><div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 11%;" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div></div>
                                       </div>
                                       <div class="percentage"><span>27</span></div>
                                    </li>
                                    <li>
                                       <div class="stars">
                                             <i class="fa-solid fa-star-sharp rated"></i> <i class="fa-solid fa-star-sharp"></i> <i class="fa-solid fa-star-sharp"></i> <i class="fa-solid fa-star-sharp"></i>
                                             <i class="fa-solid fa-star-sharp"></i>
                                       </div>
                                       <div class="review-line">
                                             <div class="progress"><div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 3%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div></div>
                                       </div>
                                       <div class="percentage"><span>09</span></div>
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
                                                <button class="client-img"><img src="./Images/Product/Product5.jpg" alt="image" /></button>
                                                <button class="client-img"><img src="./Images/Product/Product5.jpg" alt="image" /></button>
                                                <button class="client-img"><img src="./Images/Product/Product5.jpg" alt="image" /></button>
                                                <button class="client-img"><img src="./Images/Product/Product5.jpg" alt="image" /></button>
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
                                                <button class="client-img"><img src="./Images/Product/Product2.jpg" alt="image" /></button>
                                                <button class="client-img"><img src="./Images/Product/Product2.jpg" alt="image" /></button>
                                                <button class="client-img"><img src="./Images/Product/Product2.jpg" alt="image" /></button>
                                                <button class="client-img"><img src="./Images/Product/Product2.jpg" alt="image" /></button>
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
               </div>
            </div>
         </div>
   </div>
</section>
<!-- PRODUCT REVIEW AND COMMENT START -->

<!-- Banner2 after Service icon start -->
<Section class="CommonpaddingSection productPhonemargin">
   <div class="container BannerSec">
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 BannerDiv">
               <a href="#">
                     <img src="./Images/Banner/Banner-2.png" alt="">
               </a>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 BannerDiv">
               <a href="#">
                     <img src="./Images/Banner/Banner-3.png" alt="">
               </a>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 BannerDiv">
               <a href="#">
                     <img src="./Images/Banner/Banner.png" alt="">
               </a>
            </div>
         </div>
   </div>
</Section>
<!-- Banner2 after Service icon end -->

<!-- Related Product start -->
<?php woocommerce_output_related_products(); ?>
<!-- Related Product end -->



<?php get_footer(); ?>