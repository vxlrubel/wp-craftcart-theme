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
        <nav>
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
                                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?> /assets/img/Jamidar.png" alt=""></a>
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
                                            <a href="./ShopingCart.html">
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
                                                <a href="./ShopingCart.html">
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
                                        <!-- <i class="fa-regular fa-user"></i>
                                        <div>
                                            <p>login</p>
                                            <p>Register</p>
                                        </div> -->

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
                                <ul>
                                    <li ><a class="active" href="./index.html">Home</a></li>
                                    <li><a href="./OderTrakingFrom.html">Order Track</a></li>
                                    <li><a href="./Blog.html">Blog</a></li>
                                    <li><a href="./AllProduct.html">Products</a></li>
                                </ul>
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
                                <a href="./index.html"><img src="<?php echo get_template_directory_uri(); ?> /assets/img/Jamidar.png" alt=""></a>
                            </div>
                            
                            <div class="col-4 CartTabe">
                                <a href="./ShopingCart.html"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- mobile Bottom NavBer -->
                <div class="MovboBottom">
                    <div class="container">
                        <a class="active" href="./index.html"><i class="fa-solid fa-house"></i></a>
                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                        <a href="./Wish.html"><i class="fa-regular fa-heart"></i></a>
                        <a href="./Login.html"><i class="fa-regular fa-user"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navber End -->

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
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>

                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Heros/heros-carosul-1.webp" class="d-block w-100" alt="...">
                                </div>

                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Heros/heros-carosul-2.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Heros/heros-carosul-1.webp" class="d-block w-100" alt="...">
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Heros/heros-carosul-1.webp" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Heros/heros-carosul-2.webp" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Heros/heros-carosul-1.webp" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div> -->
                    </div>
    
                    <div class="col-3 hideOnPhone HerosRightSide">
                        <div>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Heros/heros-right-1.webp" alt="">
                            </a>
                        </div>
                        
                        <div>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Heros/heros-right-2.webp" alt="">
                            </a>
                        </div>
                        
                        <div>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Heros/heros-right-3.webp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Heros end -->

        <!-- services-list start -->
        <section class="CommonpaddingSection">
            <div class="container">
                <div class="row ServicesIconMainDIV">
                    <div class="W20 col-md-4 col-sm-4 d-flex PerServocesDiv">
                        <div class="ServicesImg Freeshoping">
                            <a href="#">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Serivices/Sevices-icon-1.png" alt=""> -->
                                <i class="fa-solid fa-truck-fast"></i>
                            </a>
                        </div>
                        
                        <div class="ServicesText">
                            <div class="servicesTitel">
                                <a href="#">
                                    Free Shipping!
                                </a>
                            </div>

                            <div class="servicesP">
                                <a href="#">
                                    On Orders Over 2000 Taka.
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="W20 col-md-4 col-sm-4 d-flex PerServocesDiv">
                        <div class="ServicesImg Policy">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Serivices/Services-icon-2.png" alt="">
                            </a>
                        </div>
                        
                        <div class="ServicesText">
                            <div class="servicesTitel">
                                <a href="#">
                                    Exchange Policy
                                </a>
                            </div>

                            <div class="servicesP">
                                <a href="#">
                                    Fast & Hassle Free
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="W20 col-md-4 col-sm-4 d-flex PerServocesDiv">
                        <div class="ServicesImg Support">
                            <a href="#">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Serivices/Services-icon-3.png" alt=""> -->
                                <i class="fa-solid fa-headset"></i>
                            </a>
                        </div>
                        
                        <div class="ServicesText">
                            <div class="servicesTitel">
                                <a href="#">
                                    Online Support
                                </a>
                            </div>

                            <div class="servicesP">
                                <a href="#">
                                    24/7 Everyday
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="W20 col-md-4 col-sm-4 d-flex PerServocesDiv">
                        <div class="ServicesImg Points">
                            <a href="#">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Serivices/Services-icon-4.png" alt=""> -->
                                <i class="fa fa-trophy"></i>
                            </a>
                        </div>
                        
                        <div class="ServicesText">
                            <div class="servicesTitel">
                                <a href="#">
                                    Reward Points
                                </a>
                            </div>

                            <div class="servicesP">
                                <a href="#">
                                    Earn 1% Cashback
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="W20 col-md-4 col-sm-4 d-flex PerServocesDiv">
                        <div class="ServicesImg payment">
                            <a href="#">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Serivices/Services-icon-5.png" alt=""> -->
                                <i class="fa-sharp fa-solid fa-sack-dollar"></i>
                            </a>
                        </div>
                        
                        <div class="ServicesText">
                            <div class="servicesTitel">
                                <a href="#">
                                    Payment Method
                                </a>
                            </div>

                            <div class="servicesP">
                                <a href="#">
                                    Credit Card, bKash & PayPal.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-list end -->

        <!-- Banner1 after Service icon start -->
        <Section class="CommonpaddingSection">
            <div class="container BannerSec">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 BannerDiv">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Banner/Banner-2.png" alt="">
                        </a>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 BannerDiv">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Banner/Banner-3.png" alt="">
                        </a>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 BannerDiv">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Banner/Banner.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </Section>
        <!-- Banner1 after Service icon end -->

        <!-- FEATURED BRAND start -->
        <Section class="CommonpaddingSection">
            <div class="container">
                <div class="row Brandsection">
                    <div class="Titelh4">
                        <h4>Featured Brand</h4>
                    </div>

                    <div class="owl-carousel BrandCrosul owl-theme">
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandLogo/LafargeHolcim_logo.png" alt="">
                        </div>

                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandLogo/Basundhara logo.png" alt="">
                        </div>

                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandLogo/premier-logo.png" alt="">
                        </div>

                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandLogo/CrownCement-logo.png" alt="">
                        </div>

                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandLogo/cement-logo.png" alt="">
                        </div>

                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandLogo/akij-loog.png" alt="">
                        </div>

                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandLogo/Shah cemetn.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </Section>
        <!-- FEATURED end -->

        <!-- Catagoris start -->
        <Section class="CommonpaddingSection">
            <div class="container">
                <div class="row Brandsection">
                    <div class="Titelh4">
                        <h4>Popular Categories</h4>
                    </div>

                    <div class="owl-carousel CatagorisCrosul owl-theme">
                        <div class="item">
                            <div class="Catagoris2Div">
                                <div >
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/furniture.png" alt="">
                                        <span>Furniture</span>
                                    </a>
                                </div>

                                <div>
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/furniture.png" alt="">
                                        <span>Furniture</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="Catagoris2Div">
                                <div >
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/LightIcon.png" alt="">
                                        <span>Light</span>
                                    </a>
                                </div>
                                
                                <div>
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/LightIcon.png" alt="">
                                        <span>Light</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="Catagoris2Div">
                                <div >
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/kitchen.png" alt="">
                                        <span>kitchen</span>
                                    </a>
                                </div>

                                <div>
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/kitchen.png" alt="">
                                        <span>kitchen</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="Catagoris2Div">
                                <div >
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/tabletop.png" alt="">
                                        <span>Tabletop</span>
                                    </a>
                                </div>

                                <div>
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/tabletop.png" alt="">
                                        <span>Tabletop</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="Catagoris2Div">
                                <div >
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/Bath-icon.jpg" alt="">
                                        <span>Bath</span>
                                    </a>
                                </div>
                                
                                <div>
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/Bath-icon.jpg" alt="">
                                        <span>Bath</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="Catagoris2Div">
                                <div >
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/double-bed.png" alt="">
                                        <span>BedRoom</span>
                                    </a>
                                </div>

                                <div>
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/double-bed.png" alt="">
                                        <span>BedRoom</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="Catagoris2Div">
                                <div >
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/pet-food.png" alt="">
                                        <span>Pet Supplies</span>
                                    </a>
                                </div>

                                <div>
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/pet-food.png" alt="">
                                        <span>Pet Supplies</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="Catagoris2Div">
                                <div>
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/playtime.png" alt="">
                                        <span>Kids</span>
                                    </a>
                                </div>

                                <div>
                                    <a href="./AllProduct.html">
                                        <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Catagoris/playtime.png" alt="">
                                        <span>Kids</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Section>
        <!-- Catagoris end -->

        <!-- Flash Sale start -->
        <Section class="CommonpaddingSection">
            <div class="container">
                <div class="row Brandsection">
                    <div class="Titelh4 row RowPadingError">
                        <div class="col-lg-6 col-ms-6 col-sm-6 RowPadingError RowMarginError">
                            <h4>
                                Real State Flash Sale 
                                <span>
                                    <i class="fa-solid fa-bolt FlashIcon"></i>
                                </span>
                            </h4>
                        </div>

                        <div class="col-lg-6 col-ms-6 col-sm-6 row TitleCntent RowPadingError RowMarginError">
                            <div class="col-6 TimeCounting ">
                                <span>02</span> : 
                                <span>12</span> : 
                                <span>35</span>
                            </div>

                            <div class="col-6 SeeAlSpan">
                                <a href="./AllProduct.html">
                                    See More
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content FlashPaddingTop">
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
                                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Light/llight5.jpg" alt="">
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
                        </div>
                    </div>
                    <!-- <div class="owl-carousel FlashCarosul owl-theme">
                        <div class="item">
                            <div class="DuleProduct">
                                <div class="PerProductDiv">
                                    <a href="#">
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
                                
                                <div class="PerProductDiv">
                                    <a href="#">
                                        <div class="ProductImgage">
                                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product11.jpg" alt="">
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

                        <div class="item">
                            <div class="DuleProduct">
                                <div class="PerProductDiv">
                                    <a href="#">
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

                                <div class="PerProductDiv">
                                    <a href="#">
                                        <div class="ProductImgage">
                                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product.jpg" alt="">
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

                        <div class="item">
                            <div class="DuleProduct">
                                <div class="PerProductDiv">
                                    <a href="#">
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

                                <div class="PerProductDiv">
                                    <a href="#">
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
                        </div>

                        <div class="item">
                            <div class="DuleProduct">
                                <div class="PerProductDiv">
                                    <a href="#">
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

                                <div class="PerProductDiv">
                                    <a href="#">
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

                        <div class="item"> 
                            <div class="DuleProduct">
                                <div class="PerProductDiv">
                                    <a href="#">
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

                        <div class="item">
                            <div class="DuleProduct">
                                <div class="PerProductDiv">
                                    <a href="#">
                                        <div class="ProductImgage">
                                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product9.jpg" alt="">
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

                                <div class="PerProductDiv">
                                    <a href="#">
                                        <div class="ProductImgage">
                                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product10.jpg" alt="">
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

                        <div class="item">
                            <div class="DuleProduct">
                                <div class="PerProductDiv">
                                    <a href="#">
                                        <div class="ProductImgage">
                                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/product12.webp" alt="">
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
                                
                                <div class="PerProductDiv">
                                    <a href="#">
                                        <div class="ProductImgage">
                                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/product13.webp" alt="">
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

                        <div class="item">
                            <div class="DuleProduct">
                                <div class="PerProductDiv">
                                    <a href="#">
                                        <div class="ProductImgage">
                                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/Product11.jpg" alt="">
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
                                
                                <div class="PerProductDiv">
                                    <a href="#">
                                        <div class="ProductImgage">
                                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Product/product14.webp" alt="">
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
                    </div> -->
                </div>
            </div>
        </Section>
        <!-- Flash Sale end -->

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
                        <!-- <select class="nav nav-tab">
                            <option value="1" class="nav nav-tab">
                                <li class="active">
                                    <a class="nav-link" data-bs-toggle="tab" href="#Dining">
                                        Bed
                                    </a>
                                </li>
                            </option>

                            <option value="2" class="nav nav-tab">
                                <li >
                                    <a class="nav-link" data-bs-toggle="tab" href="#Bath">
                                        Bath
                                    </a>
                                </li>
                            </option>

                            <option value="3" class="nav nav-tab">
                                <li>
                                    <a class="nav-link" data-bs-toggle="tab" href="#kitchen">
                                        kitchen
                                    </a>
                                </li>
                            </option>

                            <option value="4" class="nav nav-tab">
                                <li>
                                    <a class="nav-link" data-bs-toggle="tab" href="#Dining">
                                        Dining
                                    </a>
                                </li>
                            </option>
                        </select> -->
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
        <Section class="CommonpaddingSection">
            <div class="container BannerSec">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 BannerDiv">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Banner/Banner-2.png" alt="">
                        </a>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 BannerDiv">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Banner/Banner-3.png" alt="">
                        </a>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 BannerDiv">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Banner/Banner.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </Section>
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
        <Section class="CommonpaddingSection">
            <div class="container BannerSec">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 BannerDiv">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Banner/Banner-2.png" alt="">
                        </a>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 BannerDiv">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Banner/Banner-3.png" alt="">
                        </a>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 BannerDiv">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/Banner/Banner.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </Section>
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
        <Section class="CommonpaddingSection TitleBorderBottom">      
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

        <!-- oure partners start -->
        <Section class="CommonpaddingSection">
            <div class="container">
                <div class="row Brandsection">
                    <div class="Titelh4">
                        <h4>Oure Partners</h4>
                    </div>

                    <div class="owl-carousel BrandCrosul owl-theme">
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandLogo/LafargeHolcim_logo.png" alt="">
                        </div>

                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandLogo/Basundhara logo.png" alt="">
                        </div>

                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandLogo/premier-logo.png" alt="">
                        </div>

                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandLogo/CrownCement-logo.png" alt="">
                        </div>

                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandLogo/cement-logo.png" alt="">
                        </div>

                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandLogo/akij-loog.png" alt="">
                        </div>

                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/BrandLogo/Shah cemetn.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </Section>
        <!-- oure partners end -->

        <!--Footer Start -->
            <footer>
                <!-- Frist Footer start -->
                <div class=" FristFooter">
                    <div class="container CommonpaddingSection">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <h4>Buy And Sell</h4>

                                <ul>
                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span> Industrial Property Selling
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Personal property selling
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Plot buy&sell
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Flat buy&sell
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Property material buy&sell
                                        </a>
                                    </li>

                                    <!-- <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Indigenous land buy&sell
                                        </a>
                                    </li> -->
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <h4>Document Processing</h4>

                                <ul>
                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span> <span class="liforpadding">SA, CS, RS, City Survey</span> 
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Name Transfer
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Old document processing
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>New document creation
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Inherited property clearance
                                        </a>
                                    </li>

                                    <!-- <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Land map processing
                                        </a>
                                    </li> -->

                                    <!-- <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>The false land paper collection
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Land register, Pre-booking, Vendor support
                                        </a>
                                    </li> -->
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <h4>Real Estate Productss</h4>

                                <ul>
                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Complete Law support
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Find investors for the property
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Residential property advisor
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Commercial property advisor
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Govt. and Private project
                                        </a>
                                    </li>

                                    <!-- <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Advising on property management
                                        </a>
                                    </li> -->
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <h4>Property Marketing</h4>

                                <ul>
                                    <!-- <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Property AdvertisementBuying selling client
                                        </a>
                                    </li> -->

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Rent advertisement
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Tenant management
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Real estate company promotion
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Vendor promotion
                                        </a>
                                    </li>

                                    <li class="footerLi">
                                        <a class="footera" href="#">
                                            <span>-</span>Property advertisement setup
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Frist Footer start -->

                <!-- last footer start-->
                <div class="lastFooter py-2">
                    <div class="container CommonpaddingSection">
                        <div>
                            <ul>
                                <li>
                                    <a href="./AboutUs.html">About Us</a>
                                </li>

                                <li>
                                    <a href="./Blog.html">Blog</a>
                                </li>

                                <li>
                                    <a href="./OrderTracking.html">Order Track</a>
                                </li>

                                <li>
                                    <a href="./Terms&Comdition.html">Terms And Comdition</a>
                                </li>

                                <li>
                                    <a href="#">
                                        Privacy And Cokies
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        Refund Policy
                                    </a>
                                </li>

                                <li>
                                    <a href="#">Disclaimer</a>
                                </li>
                                <li>
                                    <a href="./Support.html">Support</a>
                                </li>

                                <li>
                                    <a href="./ContactUs.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
            
                        <div class="dmca">
                            <span>© 2022-2023 DMS Bangladesh. All Rights Reserved. | Design & Development By:- 
                                <a href="#"> Digital Marketing Solution (Pvt.) Ltd.</a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- last footer start-->
            </footer>
        <!-- Footer End -->

        <!-- Fahim Js -->
        <script src="./js/Common.js"></script>

        <!-- bootstap script -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

        <script src="js/jquery-3.6.1.min.js"></script>
        <script src="js/owl.carousel.min.js"></script> -->

        <script>
            // Brand carosul
             $('.BrandCrosul').owlCarousel({
                loop:true,
                margin:10,
                dots: false,
                nav:false,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive:{
                    0:{
                        items:3,
                    },
                    600:{
                        items:4,
                    },
                    1000:{
                        items:7,
                        loop:true
                    }
                }
            })

            // Catagoris carosul
            $('.CatagorisCrosul').owlCarousel({
                loop:true,
                margin:10,
                dots: false,
                nav:false,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive:{
                    0:{
                        items:3,
                    },
                    600:{
                        items:6,
                    },
                    1000:{
                        items:10,
                        loop:true
                    }
                }
            });
        
        </script>
        <?php wp_footer() ?>
    </body>
</html>
