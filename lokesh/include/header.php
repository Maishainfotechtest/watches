<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic page needs
            ============================================ -->
    <title>Edukaan</title>
    <meta charset="utf-8">
    <meta name="keywords"
        content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description"
        content="BestShop is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
    <!-- Mobile specific metas
            ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon
            ============================================ -->
    <link rel="shortcut icon" type="image/jpg" href="image/icon/final.png" />
    <!-- Libs CSS
            ============================================ -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/themecss/lib.css" rel="stylesheet">
    <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="js/minicolors/miniColors.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/created/custom.js"></script>

    <!-- Theme CSS
            ============================================ -->
    <link rel="stylesheet" href="css/themecss/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/themecss/so_searchpro.css" rel="stylesheet">
    <link href="css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="css/themecss/so-categories.css" rel="stylesheet">
    <link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
    <link href="css/footer/footer4.css" rel="stylesheet">
    <link href="css/header/header4.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/theme.css">
    <link id="color_scheme" href="css/theme.css" rel="stylesheet">

    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Google web fonts
            ============================================ -->

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <style type="text/css">
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="common-home res layout-4">

    <div id="wrapper" class="wrapper-fluid banners-effect-11 ">
        <!-- Header Container  -->
        <header id="header" class="  typeheader-4">

            <!-- Header Top -->
            <div class="header-top   hidden-compact" style="background: #ecbc74c2;">
                <div class="container m-2">
                    <div class="row">
                        <div class="header-top-left col-lg-3 col-md-2 col-sm-6 col-xs-7">
                            <ul class="top-link list-inline lang-curr">
                                <li class="language">
                                    <div class="btn-group languages-block ">
                                        <!--logo-->
                                        <div class="navbar-logo col-lg-12 col-md-3 col-sm-12 col-xs-12">
                                            <div class="logo">
                                                <a href="index.php"><img src="./image/catalog/logo.png "
                                                        title="Your Store" alt="Your Store" style="height:55px;" id="logo" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="currency">
                                    <div class="btn-group currencies-block">
                                        <form action="index.php" method="post" enctype="multipart/form-data"
                                            id="currency" class="font-weight-bold">
                                            <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                                <span class="icon icon-credit "></span> USD <span
                                                    class="fa fa-angle-down"></span>
                                            </a>
                                            <ul class="dropdown-menu btn-xs">
                                                <li> <a href="#">(&#8377;)&nbsp;INR</a></li>
                                                <li> <a href="#">(€)&nbsp;Euro</a></li>
                                                <li> <a href="#">(£)&nbsp;Pounds </a></li>
                                                <li> <a href="#">($)&nbsp;USD </a></li>
                                            </ul>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Search -->
                        <div class="middle2 col-lg-7 col-md-8 col-sm-8 col-xs-12" style="margin:3px 0 ;">
                            <div class="search-header-w">
                                <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                    <form method="GET" action="index.php">
                                        <div id="search0" class="search input-group form-group">
                                            <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                                <select class="no-border" name="category_id">
                                                    <option value="0">Categories</option>
                                                    <option value="78">TITAN</option>
                                                    <option value="77">ROLEX</option>
                                                    <option value="82"> TISSOT </option>
                                                    <option value="80">FASTRACK</option>
                                                    <option value="81">APPLE</option>

                                                </select>
                                            </div>
                                            <input class="autosearch-input form-control" type="text" value="" size="50"
                                                autocomplete="off" placeholder="Search product..." name="search">
                                            <span class="input-group-btn">
                                                <button type="submit" class="button-search btn btn-primary"
                                                    name="submit_search"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                        <input type="hidden" name="route" value="product/search" />
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- //end Search -->
                        <div class="header-top-right collapsed-block col-lg-2 col-md-2 col-sm-2 col-xs-5">
                            <ul class="top-link list-inline ">
                                <li class="account" id="my_account">
                                    <a href="#" title="My Account " class="btn-xs dropdown-toggle"
                                        data-toggle="dropdown"> <span><i class="fa fa-user-circle"
                                                aria-hidden="true"></i> My Account </span> <span
                                            class="fa  fa-caret-down"></span>
                                    </a>
                                    <ul class="dropdown-menu " style="display: none;">
                                        <li class=" text-left"><a href="login.php"><i class="fa fa-sign-in"
                                                    aria-hidden="true"></i> Register/Login</a>
                                        </li>
                                        <li><a href="cart.php"><a href="orders.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i>  My Order History</a>
                                        </li>
                                        <li><a href="cart.php"><a href=" cart.php"><i class="fa fa-shopping-cart"
                                                        aria-hidden="true"></i> My Cart</a>
                                        </li>

                                        <li><a href="checkout.php"><i class="fa fa-credit-card-alt"
                                                    aria-hidden="true"></i> Checkout</a>
                                        </li>
                                        <li class="wishlist hidden-sm hidden-xs">
                                            <a href="wishlist.php" id="wishlist-total" class="top-link-wishlist"
                                                title="Wish List (0) ">
                                                <i class="fa fa-heart"></i> Wish List (0)
                                            </a>
                                        </li>
                                        <li><a href="account.php"><i class="fa fa-cog" aria-hidden="true"></i>
  Settings</a>
                                        </li>
                                    </ul>
                                </li>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Header Top -->

            <!-- Header Bottom -->
            <div class="header-bottom hidden-compact ">
                <div class="container">
                    <div class="row my-2">
                        <div class="bottom1 menu-vertical col-lg-3 col-md-3">
                            <!-- Secondary menu -->
                            <div class="responsive so-megamenu  megamenu-style-dev">
                                <div class="so-vertical-menu ">
                                    <nav class="navbar-default">
                                        <div class="container-megamenu vertical">
                                            <div id="menuHeading">
                                                <div class="megamenuToogle-wrapper">
                                                    <div class="megamenuToogle-pattern">
                                                        <div class="container">
                                                            <div>
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </div>
                                                            All Brands
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="navbar-header">
                                                <button type="button" id="show-verticalmenu" data-toggle="collapse"
                                                    class="navbar-toggle">
                                                    <i class="fa fa-bars"></i>
                                                    <span> All Categories </span>
                                                </button>
                                            </div>
                                            <div class="vertical-wrapper">
                                                <span id="remove-verticalmenu" class="fa fa-times"></span>
                                                <div class="megamenu-pattern">
                                                    <div class="container-mega">
                                                        <ul class="megamenu">
                                                            <li class="item-vertical  with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="./image/catalog/menu/icons/Titan.png"
                                                                        alt="icon" width="20px">
                                                                    <span>Titan</span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" data-subwidth="60">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Apparel</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#">Accessories
                                                                                                                for
                                                                                                                Tablet
                                                                                                                PC</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Accessories
                                                                                                                for i
                                                                                                                Pad</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Accessories
                                                                                                                for
                                                                                                                iPhone</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Bags,
                                                                                                                Holiday
                                                                                                                Supplies</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Car
                                                                                                                Alarms
                                                                                                                and
                                                                                                                Security</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Car
                                                                                                                Audio
                                                                                                                &amp;
                                                                                                                Speakers</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Cables
                                                                                                        &amp;
                                                                                                        Connectors</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#">Cameras
                                                                                                                &amp;
                                                                                                                Photo</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Electronics</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Outdoor
                                                                                                                &amp;
                                                                                                                Traveling</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Camping
                                                                                                        &amp; Hiking</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Earings</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Shaving
                                                                                                                &amp;
                                                                                                                Hair
                                                                                                                Removal</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Salon
                                                                                                                &amp;
                                                                                                                Spa
                                                                                                                Equipment</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Smartphone
                                                                                                        &amp;
                                                                                                        Tablets</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#">Sports
                                                                                                                &amp;
                                                                                                                Outdoors</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Bath
                                                                                                                &amp;
                                                                                                                Body</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Gadgets
                                                                                                                &amp;
                                                                                                                Auto
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Bags,
                                                                                                        Holiday
                                                                                                        Supplies</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#"
                                                                                                                onclick="window.location = '18_46';">Battereries
                                                                                                                &amp;
                                                                                                                Chargers</a>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                onclick="window.location = '24_64';">Bath
                                                                                                                &amp;
                                                                                                                Body</a>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                onclick="window.location = '18_45';">Headphones,
                                                                                                                Headsets</a>
                                                                                                        </li>
                                                                                                        <li><a href="#"
                                                                                                                onclick="window.location = '18_30';">Home
                                                                                                                Audio</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="./image/catalog/menu/icons/icon2.jpg"
                                                                        alt="icon" width="20px">
                                                                    <span>Jaeger-LeCoultre</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical  style1 with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <span class="label"></span>
                                                                    <img src="./image/catalog/menu/icons/icon4.jpg"
                                                                        alt="icon" width="20px">
                                                                    <span>Audemars Piguet</span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" data-subwidth="40">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Smartphone</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Esdipiscing</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Scanners</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Apple</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Dell</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Scanners</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Electronics</a>
                                                                                                    <ul>
                                                                                                        <li><a
                                                                                                                href="#">Asdipiscing</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Diam
                                                                                                                sit</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Labore
                                                                                                                et</a>
                                                                                                        </li>
                                                                                                        <li><a
                                                                                                                href="#">Monitors</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="row banner">
                                                                                    <a href="#">
                                                                                        <img src="image/catalog/menu/megabanner/vbanner1.jpg"
                                                                                            alt="banner1">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item-vertical with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="./image/catalog/menu/icons/logo3.png"
                                                                        alt="icon" width="20px">
                                                                    <span>Piaget</span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" data-subwidth="60">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Car
                                                                                                        Alarms and
                                                                                                        Security</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#">Car
                                                                                                                Audio
                                                                                                                &amp;
                                                                                                                Speakers</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Gadgets
                                                                                                                &amp;
                                                                                                                Auto
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Gadgets
                                                                                                                &amp;
                                                                                                                Auto
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Headphones,
                                                                                                                Headsets</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="24"
                                                                                                        onclick="window.location = '24';"
                                                                                                        class="main-menu">Health
                                                                                                        &amp; Beauty</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a href="#">Home
                                                                                                                Audio</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">Helicopters
                                                                                                                &amp;
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">Outdoor
                                                                                                                &amp;
                                                                                                                Traveling</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">Toys
                                                                                                                &amp;
                                                                                                                Hobbies</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Electronics</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Earings</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">Salon
                                                                                                                &amp;
                                                                                                                Spa
                                                                                                                Equipment</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">Shaving
                                                                                                                &amp;
                                                                                                                Hair
                                                                                                                Removal</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">Smartphone
                                                                                                                &amp;
                                                                                                                Tablets</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Sports
                                                                                                        &amp;
                                                                                                        Outdoors</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a href="#">Flashlights
                                                                                                                &amp;
                                                                                                                Lamps</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Fragrances</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="#">Fishing</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">FPV
                                                                                                                System
                                                                                                                &amp;
                                                                                                                Parts</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">More
                                                                                                        Car
                                                                                                        Accessories</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a href="#">Lighter
                                                                                                                &amp;
                                                                                                                Cigar
                                                                                                                Supplies</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">Mp3
                                                                                                                Players
                                                                                                                &amp;
                                                                                                                Accessories</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">Men
                                                                                                                Watches</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">Mobile
                                                                                                                Accessories</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Gadgets
                                                                                                        &amp; Auto
                                                                                                        Parts</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a href="#">Gift
                                                                                                                &amp;
                                                                                                                Lifestyle
                                                                                                                Gadgets</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">Gift
                                                                                                                for
                                                                                                                Man</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">Gift
                                                                                                                for
                                                                                                                Woman</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">Gift
                                                                                                                for
                                                                                                                Woman</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item-vertical css-menu with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <img src="./image/catalog/menu/icons/icon5.png"
                                                                        alt="icon" width="20px">
                                                                    <span>Harry Winston</span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" data-subwidth="20">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Headphones,
                                                                                                        Headsets</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Home
                                                                                                        Audio</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Health
                                                                                                        &amp; Beauty</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Helicopters
                                                                                                        &amp; Parts</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"
                                                                                                        class="main-menu">Helicopters
                                                                                                        &amp; Parts</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <!-- // end Secondary menu -->
                        </div>
                        <!-- Main menu -->
                        <div class="main-menu col-lg-9 col-md-9">
                            <div class="responsive so-megamenu megamenu-style-dev">
                                <nav class="navbar-default">
                                    <div class=" container-megamenu  horizontal open ">
                                        <div class="navbar-header">
                                            <button type="button" id="show-megamenu" data-toggle="collapse"
                                                class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <div class="megamenu-wrapper col-lg-12">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu" data-transition="slide"
                                                        data-animationtime="250">
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Watches</strong>

                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; right: auto;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">Men</a>
                                                                                <div>

                                                                                    <ul class="row-list">
                                                                                        <li><a href="category.html">AUTOMATIC
                                                                                            </a></li>
                                                                                        <li><a
                                                                                                href="category-v2.html">CLASSIC</a>
                                                                                        </li>
                                                                                        <li><a
                                                                                                href="category-v3.php">EDGE</a>
                                                                                        </li>
                                                                                        <li><a
                                                                                                href="category-v4.html">OCTANE</a>
                                                                                        </li>
                                                                                        <li><a
                                                                                                href="category-v2.html">WORKWEAR</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">Women</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href=" product.php">
                                                                                                RAGA</a></li>
                                                                                        <li><a
                                                                                                href="product-v2.html">WORKWEAR</a>
                                                                                        </li>
                                                                                        <li><a href="product-v2.html"
                                                                                                style="font-weight:bolder;">PAIR</a>
                                                                                        </li>
                                                                                        <li><a href="product-v2.html"
                                                                                                style="font-weight:bolder;">KIDS</a>
                                                                                        </li>
                                                                                        <!-- <li><a href="product-v3.html">Image size - small</a></li> -->
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">Special
                                                                                    Edition</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="login.php">KHADI
                                                                                                COLLECTION</a></li>
                                                                                        <li><a href="my-account.html">ETERNAL
                                                                                                MUMBAI</a></li>
                                                                                        <li><a
                                                                                                href="order-information.php">
                                                                                                FOREVER KOLKATA</a></li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Features</strong>
                                                                <img class="label-hot"
                                                                    src="image/catalog/menu/icon-sale.png"
                                                                    alt="icon items">
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; right: auto;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">Listing
                                                                                    pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="category.html">Category
                                                                                                Page 1 </a></li>
                                                                                        <li><a href="category-v2.html">Category
                                                                                                Page 2</a></li>
                                                                                        <li><a
                                                                                                href="category-v3.php">Titan</a>
                                                                                        </li>
                                                                                        <li><a href="category-v4.html">Category
                                                                                                Page 4</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">Product
                                                                                    pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href=" product.php">Product
                                                                                                page 1</a></li>
                                                                                        <li><a href="product-v2.html">Product
                                                                                                page 2</a></li>
                                                                                        <!-- <li><a href="product-v3.html">Image size - small</a></li> -->
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">Shopping
                                                                                    pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="cart.php">Shopping
                                                                                                Cart Page</a></li>
                                                                                        <li><a href="checkout.php">Checkout
                                                                                                Page</a></li>
                                                                                        <li><a href="compare.html">Compare
                                                                                                Page</a></li>
                                                                                        <li><a href="wishlist.php">Wishlist
                                                                                                Page</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#" class="title-submenu">My
                                                                                    Account pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="login.php">Login
                                                                                                /Register Page</a></li>

                                                                                        <li><a href="my-account.html">My
                                                                                                Account</a></li>

                                                                                        <li><a
                                                                                                href="order-information.php">Order
                                                                                                Information</a></li>
                                                                                        <li><a href="return.html">Product
                                                                                                Returns</a></li>
                                                                                        <li><a href="gift-voucher.html">Gift
                                                                                                Voucher</a></li>
                                                                                        <li><a href="faq.php">FAQ</a>
                                                                                        </li>
                                                                                        <li><a
                                                                                                href="termsCondition.php">Term
                                                                                                & Conditions</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Categories</strong>
                                                                <img class="label-hot"
                                                                    src="image/catalog/menu/hot-icon.png"
                                                                    alt="icon items">
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; display: none;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row categories">
                                                                                <div class="col-md-3 img img1">
                                                                                    <a href="#"><img
                                                                                            src="./image/catalog/menu/megabanner/analog.jpg"
                                                                                            alt="banner1"
                                                                                            height="170px"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img2">
                                                                                    <a href="#"><img
                                                                                            src="./image/catalog/menu/megabanner/digital.jpg"
                                                                                            alt="banner2"
                                                                                            height="170px"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img3">
                                                                                    <a href="#"><img
                                                                                            src="./image/catalog/menu/megabanner/dress.jpg"
                                                                                            alt="banner3"
                                                                                            height="170px"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img4">
                                                                                    <a href="#"><img
                                                                                            src="./image/catalog/menu/megabanner/quartz.jpg"
                                                                                            alt="banner4"
                                                                                            height="170px"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Analog
                                                                                Watch.</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Car
                                                                                                    Alarms and
                                                                                                    Security</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Car
                                                                                                    Audio &amp;
                                                                                                    Speakers</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Gadgets
                                                                                                    &amp; Auto Parts</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">More
                                                                                                    Car Accessories</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#"
                                                                                class="title-submenu">Digital_Watch.</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Bathroom</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Bedroom</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Decor</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Living
                                                                                                    room</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Dress
                                                                                Watch.</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Earings</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Wedding
                                                                                                    Rings</a></li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Men
                                                                                                    Watches</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Quartz
                                                                                Watch.</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Computer</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Smartphone</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Tablets</a>
                                                                                            </li>
                                                                                            <li><a href="#"
                                                                                                    class="main-menu">Monitors</a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="newarrival.php" class="clearfix">
                                                                <strong>New Arrivals</strong>
                                                                <img class="label-hot"
                                                                    src="image/catalog/menu/hot-icon.png"
                                                                    alt="icon items">
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; display: none;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-3 img img1">
                                                                                    <a href="newarrival.php"><img
                                                                                            src="https://staticimg.titan.co.in/Titan/Catalog/1833SM01_1.jpg?pView=listing"
                                                                                            alt="banner1"
                                                                                            height="170px"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img2">
                                                                                    <a href="newarrival.php"><img
                                                                                            src="https://staticimg.titan.co.in/Titan/Catalog/1833SL02_1.jpg?pView=listing"
                                                                                            alt="banner2"
                                                                                            height="170px"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img3">
                                                                                    <a href="newarrival.php"><img
                                                                                            src="https://staticimg.titan.co.in/Titan/Catalog/95061WD03_1.jpg?pView=listing"
                                                                                            alt="banner3"
                                                                                            height="170px"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img4">
                                                                                    <a href="newarrival.php"><img
                                                                                            src="https://staticimg.titan.co.in/Titan/Catalog/1843QL01_1.jpg?pView=listing"
                                                                                            alt="banner4"
                                                                                            height="170px"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu"> Chicken
                                                                                swinesha</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul class="text-center">
                                                                                            <li class="text-center"><a
                                                                                                    href="#"
                                                                                                    class="main-menu text-center ">
                                                                                                    <b> ₹55.00</b> </a>
                                                                                            </li>
                                                                                            <li> <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                                <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span><span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span><span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span><span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                            </li>


                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu"> Chicken
                                                                                swinesha</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul class="text-center">
                                                                                            <li><a href="#"
                                                                                                    class="main-menu ">
                                                                                                    <b>₹55.00</b> </a>
                                                                                            </li>
                                                                                            <li> <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                                <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x bg-warning"></i></span>
                                                                                                <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                                <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                                <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu"> Chicken
                                                                                swinesha</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul class="text-center">
                                                                                            <li><a href="#"
                                                                                                    class="main-menu ">
                                                                                                    <b>₹55.00</b> </a>
                                                                                            </li>
                                                                                            <li> <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                                <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x bg-warning"></i></span>
                                                                                                <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                                <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                                <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu"> Chicken
                                                                                swinesha</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul class="text-center">
                                                                                            <li><a href="#"
                                                                                                    class="main-menu ">
                                                                                                    <b>₹55.00</b> </a>
                                                                                            </li>
                                                                                            <li> <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                                <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x bg-warning"></i></span>
                                                                                                <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                                <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                                <span
                                                                                                    class="fa fa-stack"><i
                                                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                                            </li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Smart</strong>
                                                                <img class="label-hot"
                                                                    src="image/catalog/menu/icon-sale.png"
                                                                    alt="icon items">
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; right: auto;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="column">
                                                                                <a href="#" class="title-submenu">
                                                                                    TITAN</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="category.html">
                                                                                                CONNECTED X</a></li>
                                                                                        <li><a href="category-v2.html">
                                                                                                TITAN PAY </a>
                                                                                        <li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">FASTRACK</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href=" product.php">
                                                                                                WAV</a></li>
                                                                                        <li><a
                                                                                                href="product-v2.html">BEAT</a>
                                                                                        </li>
                                                                                        <!-- <li><a href="product-v3.html">Image size - small</a></li> -->
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5">
                                                                            <div class="column">
                                                                                <a href="#"
                                                                                    class="title-submenu">SONATA</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="cart.php">STRID</a>
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <!-- //end Main menu -->


                    </div>
                </div>
            </div>
        </header>
        <!-- //Header Container  -->