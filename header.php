<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- font-awesome -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

        <!-- google fronts -->  
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,900&display=swap" rel="stylesheet">

        <!-- bootstrap file link -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">

        <!-- OWL carosule link -->

        <?php wp_head(); ?>
        
    </head>

    <body <?php body_class(); ?>>
        <!-- Navber Start -->
        <nav class="header-nav">
            <!--Navber For Laptop And Computer -->
            <div class="ToppNev hideOnPhone">
                <!-- Top Nevber -->
                <div class="TopNev">
                    <div class="container">
                        <div class="row">
                            <div class="col-7">
                                <ul>
                                    <li><i class="fa-regular fa-envelope icon"></i> Email: gossaryshop@gmail.com</li>
                                    <li><i class="fa-solid fa-phone icon"></i> Phone: 01824655443</li>
                                </ul>
                            </div>
        
                            <div class="ContactDiv col-5">
                                <div class="SocialIocn float-right">
                                    <ul>
                                        <li> 
                                            <a href="#" class="facbookNav"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li> 
                                        <li>
                                            <a href="#" class="tuitterNav"><i class="fa-brands fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="Youtube"><i class="fa-brands fa-youtube"></i></a>
                                        </li> 
                                        <li>
                                            <a href="#" class="Youtube"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="facbookNav"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- mid Nevber -->
                <div class="MidNev">
                    <div class="container">
                        <div class="row">
                            <div class="logo col-2">
                               <?php cc_logo(); ?>
                            </div>

                            <div class="Serchber col-7">
                                <form action="">
                                    <input type="text" placeholder="Search Your Product.....">
                                    <label ><i class="fa-solid fa-magnifying-glass"></i></label>
                                </form>
                            </div>

                            <div class="SelectedIocn col-3">
                                <!-- <a href="./ShopingCart.html"> -->
                                    <div class="IconDiv NavCart">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                        <div>
                                            <p class="Count">0</p>
                                            <a href="<?php cc_cart_page_url(); ?>">
                                            <p>My Cart</p></a>
                                        </div>

                                        <!-- Hover show chart summery start -->
                                        <div class="CartSummaryNav">
                                            <div class="row CartUpperSummary">
                                                <div class="upperLeft col-6">
                                                    <span>1 </span>Item in Cart
                                                </div>

                                                <div class="upperRight col-6">
                                                    <span>Cart Subtotal:</span>
                                                    <p class="Price">Tk<span>100</span></p>
                                                </div>
                                            </div>

                                            <div class="CartNabBtn">
                                                <a href="./ShopingCart.html">
                                                    Proceed To heckout
                                                </a>
                                            </div>

                                            <div class="CartSummaryProduct row">
                                                <div class="col-3">
                                                    <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight1.jpg" alt="">
                                                </div>
                                                
                                                <div class="col-9">
                                                    <span class="CartProductTitle"> Mi343 Model Chines Light Chines Light Chines Light</span>
                                                    <form class="CartNavForm">
                                                        <div class="CartProductQuantity">
                                                            <label >Qty: </label>
                                                            <input type="text" value="5">
                                                        </div>

                                                        <div class="CartProductQuantity">
                                                            <button>
                                                                <i class="fa-solid fa-delete-left"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="CartNabBtn CartNabBtn1">
                                                <a href="<?php cc_cart_page_url(); ?>">
                                                    View and Edit Cart 
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Hover show chart summery end -->
                                    </div>
                                <!-- </a> -->

                                <a href="./Wish.html" class="LoveHideLaptop">
                                    <div class="IconDiv">
                                        <i class="fa-regular fa-heart"></i>
                                        <div>
                                            <p class="Count">0</p>
                                            <p>Wishlist</p>
                                        </div>
                                    </div>
                                </a>
                                
                                <!-- <a href="./Login.html"> -->
                                    <div class="IconDiv UserImg">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/userImg1.png" alt="" id="switchAccount">

                                        <!-- switch acount start -->
                                        <div class="WtitchDiv">
                                            <div>
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri(); ?> /assets/img/switch-account/BuyAndSell.png" alt="">
                                                    Buy & Sell
                                                </a>
                                            </div>

                                            <div>
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri(); ?> /assets/img/switch-account/document.png" alt="">
                                                    Document Processing
                                                </a>
                                            </div>

                                            <div>
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri(); ?> /assets/img/switch-account/RealstatMarkatinh.png" alt="">
                                                    Real Estate Marketing
                                                </a>
                                            </div>

                                            <button>Sing Out</button>
                                        </div>
                                        <!-- switch acount end -->
                                    </div>
                                <!-- </a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Nevber -->
                <div class="BottomNev">
                    <div class="container">
                        <div class="row">
                            <div class="DestopNavCtagoris col-2">
                                <span>All Categories</span>
                                <i class="fa-solid fa-bars CatagorisIcinHide" id="CatagorisIcinHide"> </i>
                                <i class="fa fa-xmark CatagorisIcinHideCros" id="CatagorisIcinHideCros"></i>

                                <!-- scorle click action -->
                                <div class="NavClickAction" id="NavClickAction">
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
                            </div>
        
                            <div class="horizontal-menu col-10">
                                <!-- primary menu -->
                                <?php cc_primary_menu(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navber Fop Mobile -->
            <div class="ShowInTabe">
                <!-- Mobile Top NavBer -->
                <div class="MoboTop">
                    <div class="container">
                        <div class="row">
                            <div class="col-4 CatagorisTabe">
                                <nav class="navbar navbar-expand-lg">
                                    <div class="">
                                        <button class="navbar-toggler" onclick="ShowMiniNev()" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                            <i class="fa-solid fa-bars"></i>
                                        </button>
                                    </div>
                                </nav>
                            </div>

                            <!-- navber menu -->    
                            <div class="collapse navbar-collapse NavCaragoris" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="MobileMwnuTitle">
                                        <span>All Categories</span> 
                                        <i class="fa-solid fa-xmark hidemobomenu" onclick="HideMiniNev()"></i>
                                    </i>
                                    </li>

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
                                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Rugs & Decor</a>
                                        </div>

                                    </li>
                                    
                                    <li class="nav-item" onclick="showDropdown()">

                                        <div class="d-flex">
                                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Tabletop</a>
                                        </div>

                                        <i class="fa-solid fa-chevron-right navLinkI"></i>
                                        
                                        <!-- mobile Deopdowon Menu -->
                                        <div class="w-100 DeopDownMenuMobiel">
                                            <div class="DeopDownDiv">
                                                <h6>
                                                    Living Room 
                                                </h6>
                                                <ul>
                                                    <li><a href="./AllProduct.html">Dresses</a></li>
                                                    <li><a href="./AllProduct.html">Jeggings</a></li>
                                                    <li><a href="./AllProduct.html">Kurtis</a></li>
                                                    <li><a href="./AllProduct.html">Palazzo Pants & Culottes</a></li>
                                                    <li><a href="./AllProduct.html">Pants</a></li>
                                                </ul>
                                            </div>

                                            <div>
                                                <h6>
                                                    Bed Room Furniture
                                                </h6>
                                                <ul>
                                                    <li><a href="./AllProduct.html">Flip Flops</a></li>
                                                    <li><a href="./AllProduct.html">Heeled Sandals</a></li>
                                                    <li><a href="./AllProduct.html">House Slippers</a></li>
                                                    <li><a href="./AllProduct.html">Slip-Ons</a></li>
                                                    <li><a href="./AllProduct.html">Wedge Sandals</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="d-flex">
                                            <!-- <img src="<?php echo get_template_directory_uri(); ?> /assets/img/vegetable.webp" alt=""> -->
                                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Bath</a>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="d-flex">
                                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Home Improvemetn</a>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="d-flex">
                                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Kitchern & Tabletop</a>
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
                                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Outdoor</a>
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

                                    <li class="nav-item">
                                        <div class="d-flex">
                                            <a class="nav-link" aria-current="page" href="./AllProduct.html">Improvemetn</a>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="d-flex">
                                            <a class="nav-link" aria-current="page" href="#">Rugs & Decor</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- navber menu -->   

                            <div class="col-4 LogoTabe">
                                <?php cc_logo(); ?>
                            </div>
                            
                            <div class="col-4 CartTabe">
                                <a href="<?php cc_cart_page_url(); ?>"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- mobile Bottom NavBer -->
                <?php cc_app_menu(); ?>
            </div>
        </nav>
        <!-- Navber End -->