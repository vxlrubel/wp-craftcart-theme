<?php
/**
 * Template Name: Frontpage
 */
 get_header();
 ?>

<!-- Heros start -->
<section class="HerosSection HerosSection2">
    <div class="container">
        <div class="HerosDiv row">
            <div class="col-2 hideOnPhone ComputerCatagoris NavSubBranceLI MidCataIcon">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="d-flex">
                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Furniture</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="d-flex">
                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Holiday</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="d-flex">
                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Lighting</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="d-flex">
                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Bath</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="d-flex">
                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Improvemetn</a>
                        </div>
                    </li>

                    <li class="nav-item NavSubBranceHover">
                        <div class="d-flex NavSubBrance">
                            <div>
                                <a class="nav-link" aria-current="page" href="./AllProduct.html">Tabletop</a>
                            </div>
                            
                            <div>
                                <i class="fa-solid fa-chevron-right navLinkI"></i>
                            </div>
                        </div>

                        <!-- for deorop down li dtart -->
                        <div class="category-sub-menu bg-1 TabletopSubMenu">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <h4>
                                        Living Room 
                                    </h4>
                                    <ul>
                                        <li><a href="./AllProduct.html">Dresses</a></li>
                                        <li><a href="./AllProduct.html">Jeggings</a></li>
                                        <li><a href="./AllProduct.html">Kurtis</a></li>
                                        <li><a href="./AllProduct.html">Palazzo Pants & Culottes</a></li>
                                        <li><a href="./AllProduct.html">Pants</a></li>
                                        <li><a href="./AllProduct.html">Shapewear</a></li>
                                        <li><a href="./AllProduct.html">Skirts</a></li>
                                        <li><a href="./AllProduct.html">Tops</a></li>
                                        <li><a href="./AllProduct.html">T-Shirts</a></li>
                                        <li><a href="./AllProduct.html">Tunics</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <h4>
                                        Bed Room Furniture
                                    </h4>
                                    <ul>
                                        <li><a href="./AllProduct.html">Ballet Flats</a></li>
                                        <li><a href="./AllProduct.html">Pumps</a></li>
                                        <li><a href="./AllProduct.html">Closed-Toe Wedges</a></li>
                                        <li><a href="./AllProduct.html">Fashion Boots</a></li>
                                        <li><a href="./AllProduct.html">Flat Sandals</a></li>
                                        <li><a href="./AllProduct.html">Flip Flops</a></li>
                                        <li><a href="./AllProduct.html">Heeled Sandals</a></li>
                                        <li><a href="./AllProduct.html">House Slippers</a></li>
                                        <li><a href="./AllProduct.html">Slip-Ons</a></li>
                                        <li><a href="./AllProduct.html">Sneakers</a></li>
                                        <li><a href="./AllProduct.html">Wedge Sandals</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <h4>
                                        kitchen & Dining
                                    </h4>
                                    <ul>
                                        <li><a href="./AllProduct.html">Fashion</a></li>
                                        <li><a href="./AllProduct.html">Casual</a></li>
                                        <li><a href="./AllProduct.html">Business</a></li>
                                        <li><a href="./AllProduct.html">Sports</a></li>
                                        <li><a href="./AllProduct.html">Accessories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="d-flex">
                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Kitchern</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="d-flex">
                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Bedding</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="d-flex">
                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Baby and Kids</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="d-flex">
                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Celling</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="d-flex">
                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Home Ber</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <div class="d-flex">
                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Pet Supplies</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-7 fullwidtTebe HerosCarosul">
                <?php cc_home_slider(); ?>
            </div>

            <div class="col-3 hideOnPhone HerosRightSide">
                <?php cc_home_top_side_banner(); ?>
            </div>
        </div>
    </div>
</section>
<!-- Heros end -->

<!-- services-list start -->
<?php cc_service_list_items(); ?>   
<!-- services-list end -->

<!-- Banner1 after Service icon start -->

<?php 

/**
 * first banner section
 * 
 * @return void
 */
cc_banner_image(1); 
?>
<?php cc_feature_brand(); ?>
<!-- FEATURED BRAND start -->

<!-- Catagoris start -->
<?php cc_popular_categories(); ?>
<!-- Catagoris end -->

<!-- Flash Sale start -->

<?php cc_flash_sale_product(); ?>

<!-- Furniture section start -->
<Section class="CommonpaddingSection TitleBorderBottom">
    <div class="container">
        <div class="row Brandsection">
            <div class="Titelh42 row RowPadingError RowMarginError">
                <div class="col-3 RowPadingError RowMarginError">
                    <h4>
                        Furniture
                    </h4>
                </div>

                <!-- Dropdown title div start -->
                <div class="col-6 ProductDropdown DisNoneinPhone">
                    <ul class="nav nav-tab">
                        <li>
                            <a class="nav-link active" data-bs-toggle="tab" href="#Dining">
                                Bed
                            </a>
                        </li>
                        <li >
                            <a class="nav-link" data-bs-toggle="tab" href="#Bath">
                                Bath
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="tab" href="#kitchen">
                                kitchen
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="tab" href="#Dining">
                                Dining
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Dropdown title div end -->

                <div class="col-3 TitleCntent RowPadingError RowMarginError">
                    <div class="SeeAlSpan">
                        <a href="./AllProduct.html">
                            See More
                        </a>
                    </div>
                </div>
            </div>

            <!-- Filter on phone  start-->
            <div class="FilterSubcatagorisInPhone ProductDropdown showInphone">
               
                <ul class="nav nav-tab">
                    <li class="active">
                        <a class="nav-link active" data-bs-toggle="tab" href="#Dining">
                            Bed
                        </a>
                    </li>
                    <li >
                        <a class="nav-link" data-bs-toggle="tab" href="#Bath">
                            Bath
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="tab" href="#kitchen">
                            kitchen
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="tab" href="#Dining">
                            Dining
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Filter on phone  end-->

            <!-- Tile Dropdown  expend start -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Dining">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product1.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product6.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product7.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product8.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="#">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product8.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Bath">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product6.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product7.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product8.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="#">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product8.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product1.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kitchen">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product1.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product6.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product7.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product8.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="#">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product8.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="tab-pane fade" id="Dining">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product6.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product7.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product8.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="#">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product8.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product1.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tile Dropdown  expend start -->
        </div>
    </div>
</Section>
<!-- Furniture section  end -->

<!-- Banner2 after Service icon start -->
<?php
/**
 * first banner section
 * 
 * @return void
 */
cc_banner_image(2); 
?>

<!-- Banner2 after Service icon end -->

<!-- Light section start -->
<Section class="CommonpaddingSection TitleBorderBottom">
    <div class="container">
        <div class="row Brandsection ">
            <div class="Titelh42 row RowPadingError RowMarginError">
                <div class="col-3 RowPadingError RowMarginError">
                    <h4>
                        Light
                    </h4>
                </div>

                <!-- Dropdown title div start -->
                <div class="col-6 ProductDropdown DisNoneinPhone">
                    <ul class="nav nav-tab">
                        <li >
                            <a class="nav-link active" data-bs-toggle="tab" href="#White">
                                White
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="tab" href="#Black">
                                Black
                            </a>
                        </li>
                        <li>
                            <a class="|nav-link" data-bs-toggle="tab" href="#Yellow">
                                Yellow
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="tab" href="#Red">
                                Red
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Dropdown title div end -->

                <div class="col-3 TitleCntent RowPadingError RowMarginError">
                    <div class="SeeAlSpan">
                        <a href="./AllProduct.html">
                            See More
                        </a>
                    </div>
                </div>
            </div>

            <!-- Filter on phone  start-->
            <div class="FilterSubcatagorisInPhone ProductDropdown showInphone">
                <ul class="nav nav-tab">
                    <li class="active">
                        <a class="nav-link active" data-bs-toggle="tab" href="#White">
                            White
                        </a>
                    </li>
                    <li >
                        <a class="nav-link" data-bs-toggle="tab" href="#Black">
                            Black
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="tab" href="#Yellow">
                            Yellow
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="tab" href="#Red">
                            Red
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Filter on phone  end-->

            <!-- Title Dropdown  expend start -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="White">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight1.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Black">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight1.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Yellow">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight1.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Red">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title Dropdown  expend start -->
        </div>
    </div>
</Section>
<!-- Light section  end -->

<!-- New1 Catagori section start -->
<Section class="CommonpaddingSection TitleBorderBottom">
    <div class="container">
        <div class="row Brandsection">
            <div class="Titelh42 row RowPadingError RowMarginError">
                <div class="col-3 RowPadingError RowMarginError">
                    <h4>
                        Pet Supplies
                    </h4>
                </div>

                <!-- Dropdown title div start -->
                <div class="col-6 ProductDropdown DisNoneinPhone">
                    <ul class="nav nav-tab">
                        <li>
                            <a class="nav-link active" data-bs-toggle="tab" href="#Bangladeshi">
                                Bangladeshi
                            </a>
                        </li>
                        <li >
                            <a class="nav-link" data-bs-toggle="tab" href="#Indian">
                                Indian
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="tab" href="#Japanis">
                                Japanis
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="tab" href="#Chinese">
                                Chinese
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Dropdown title div end -->

                <div class="col-3 TitleCntent RowPadingError RowMarginError">
                    <div class="SeeAlSpan">
                        <a href="./AllProduct.html">
                            See More
                        </a>
                    </div>
                </div>
            </div>

            <!-- Filter on phone  start-->
            <div class="FilterSubcatagorisInPhone ProductDropdown showInphone">
                <ul class="nav nav-tab">
                    <li class="active">
                        <a class="nav-link active" data-bs-toggle="tab" href="#Bangladeshi">
                            Bangladeshi
                        </a>
                    </li>
                    <li >
                        <a class="nav-link" data-bs-toggle="tab" href="#Indian">
                            Indian
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="tab" href="#Japanis">
                            Japanis
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="tab" href="#Chinese">
                            Chinese
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Filter on phone  end-->

            <!-- Tile Dropdown  expend start -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Bangladeshi">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Pet/pet5.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Pet/pet3.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Pet/pet4.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Pet/pet2.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Pet/pet46.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Pet/pet48.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Pet/pet46.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Pet/pet47.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Pet/pet49.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Pet/pet491.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Indian">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight1.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Japanis">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight1.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Chinese">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tile Dropdown  expend start -->
        </div>
    </div>
</Section>
<!-- New1 Catagori section  end -->

<!-- Banner3 after Service icon start -->
<?php
/**
 * third banner section
 * 
 * @return void
 */
cc_banner_image(3); 
?>
<!-- Banner3 after Service icon end --> 

<!-- New2 Catagori section start -->
<Section class="CommonpaddingSection TitleBorderBottom">
    <div class="container">
        <div class="row Brandsection ">
            <div class="Titelh42 row RowPadingError RowMarginError">
                <div class="col-3 RowPadingError RowMarginError">
                    <h4>
                        Kitchern
                    </h4>
                </div>

                <!-- Dropdown title div start -->
                <div class="col-6 ProductDropdown DisNoneinPhone">
                    <ul class="nav nav-tab">
                        <li >
                            <a class="nav-link active" data-bs-toggle="tab" href="#CuttingBoard">
                                Cutting Board
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="tab" href="#Colander">
                                Colander
                            </a>
                        </li>
                        <li>
                            <a class="|nav-link" data-bs-toggle="tab" href="#Whisk">
                                Whisk
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="tab" href="#Grater">
                                Grater
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Dropdown title div end -->

                <div class="col-3 TitleCntent RowPadingError RowMarginError">
                    <div class="SeeAlSpan">
                        <a href="./AllProduct.html">
                            See More
                        </a>
                    </div>
                </div>
            </div>

            <!-- Filter on phone  start-->
            <div class="FilterSubcatagorisInPhone ProductDropdown showInphone">
                <ul class="nav nav-tab">
                    <li class="active">
                        <a class="nav-link active data-bs-toggle="tab" href="#CuttingBoard">
                            Cutting Board
                        </a>
                    </li>
                    <li >
                        <a class="nav-link" data-bs-toggle="tab" href="#Colander">
                            Colander
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="tab" href="#Whisk">
                            Whisk
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="tab" href="#Grater">
                            Grater
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Filter on phone  end-->

            <!-- Title Dropdown  expend start -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="CuttingBoard">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Kitchern/Kitchern.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Kitchern/Kitchern1.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Kitchern/Kitchern2.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Kitchern/Kitchern3.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Kitchern/Kitchern4.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Kitchern/Kitchern5.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Kitchern/Kitchern6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Kitchern/Kitchern7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Kitchern/Kitchern8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Kitchern/Kitchern9.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Colander">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight1.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Whisk">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight1.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Grater">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title Dropdown  expend start -->
        </div>
    </div>
</Section>
<!-- New2 Catagori section  end -->

<!-- New 3Catagori section start -->
<section class="CommonpaddingSection TitleBorderBottom">
    <div class="container">
        <div class="row Brandsection ">
            <div class="Titelh42 row RowPadingError RowMarginError">
                <div class="col-3 RowPadingError RowMarginError">
                    <h4>
                        Bedding
                    </h4>
                </div>

                <!-- Dropdown title div start -->
                <div class="col-6 ProductDropdown DisNoneinPhone">
                    <ul class="nav nav-tab">
                        <li >
                            <a class="nav-link active" data-bs-toggle="tab" href="#Bedding1">
                                Bedding1
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="tab" href="#Bedding2">
                                Bedding2
                            </a>
                        </li>
                        <li>
                            <a class="|nav-link" data-bs-toggle="tab" href="#Bedding3">
                                Bedding3
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="tab" href="#Bedding4">
                                Bedding4
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Dropdown title div end -->

                <div class="col-3 TitleCntent RowPadingError RowMarginError">
                    <div class="SeeAlSpan">
                        <a href="./AllProduct.html">
                            See More
                        </a>
                    </div>
                </div>
            </div>

            <!-- Filter on phone  start-->
            <div class="FilterSubcatagorisInPhone ProductDropdown showInphone">
                <ul class="nav nav-tab">
                    <li class="active">
                        <a class="nav-link" data-bs-toggle="tab" href="#Bedding1">
                            Bedding1
                        </a>
                    </li>
                    <li >
                        <a class="nav-link" data-bs-toggle="tab" href="#Bedding2">
                            Bedding2
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="tab" href="#Bedding3">
                            Bedding3
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="tab" href="#Bedding4">
                            Bedding4
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Filter on phone  end-->

            <!-- Title Dropdown  expend start -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Bedding1">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Bedding/Bedding.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Bedding/Bedding1.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Bedding/Bedding2.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Bedding/Bedding3.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Bedding/Bedding4.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Bedding/Bedding5.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Bedding/Bedding6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Bedding/Bedding7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Bedding/Bedding8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Bedding/Bedding9.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Bedding2">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight1.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Bedding3">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="#">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="#">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight1.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="#">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="#">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="#">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="#">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="#">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="#">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="#">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="#">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="Bedding4">
                    <div class="row">
                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight8.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight2.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight3.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight4.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight5.jpg" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight6.webp" alt="">6
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="DuleProduct laptopWideth20 col-md-4 col-sm-4 Mobile50">
                            <div class="PerProductDiv">
                                <a href="./Product-Page.html">
                                    <div class="ProductImgage">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight7.webp" alt="">
                                        <div class="DiscountPersentese">
                                            -30%
                                        </div>
                                        <div class="ProductLove">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>

                                    <div class="PrductText">
                                        <p class="ProductTitle">Bathroom Cabinets Bathroom Cabinets</p>
                                        <p><span class="Price"> 500৳ </span> </span><span class="Discount">৳600</span></p>

                                        <ul class="StartList"> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li> 
                                            <li>
                                                <i class="fa-solid fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title Dropdown  expend start -->
        </div>
    </div>
</Section>
<!-- New Catagori3 section  end -->

<?php
/**
 * include partners section
 * 
 * @return void
 */
cc_partners();

/**
 * include footer section
 * 
 * @return void
 */
get_footer();