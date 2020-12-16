<?php include './include/header.php'; ?>
<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Titan</a></li>
    </ul>
    <div class="row">
        <!--Left Part Start -->
        <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
            <div class="module category-style">
                <h3 class="modtitle">Filter By</h3>
                <div class="modcontent">
                    <div class="box-category">
                        <ul id="cat_accordion" class="list-group">
                            <li class="hadchild">
                                <a href="category.html" class="cutom-parent">Price</a> <span
                                    class="button-view  fa fa-caret-right"></span>
                                <ul style="display: block;">
                                    <li><a href="category.html">Less then &#8377;1000</a></li>
                                    <li><a href="category.html"> Less then &#8377;3000</a></li>
                                    <li><a href="category.html"> Less then &#8377;4000</a></li>
                                    <li><a href="category.html"> Less then &#8377;5000</a></li>
                                </ul>
                            </li>
                            <li class="hadchild">
                                <a class="cutom-parent" href="category.html">Availability</a> <span
                                    class="button-view  fa fa-caret-right"></span>
                                <ul style="display: none;">
                                    <li><a href="category.html">Include Out of stock</a></li>

                                </ul>
                            </li>
                            <li class="hadchild">
                                <a href="category.html" class="cutom-parent">Discount</a> <span
                                    class="button-view  fa fa-caret-right"></span>
                                <ul style="display: none;">
                                    <li><a href="category.html"> 10% off</a></li>
                                    <li><a href="category.html"> 20% off</a></li>
                                    <li><a href="category.html"> 30% off</a></li>
                                    <li><a href="category.html"> 40% off</a></li>
                                    <li><a href="category.html"> 50% off</a></li>
                                </ul>
                            </li>
                            <li class="hadchild">
                                <a href="category.html" class="cutom-parent">Gender</a> <span
                                    class="button-view  fa fa-caret-right"></span>
                                <ul style="display: none;">
                                    <li><a href="category.html">Men's Watches</a></li>
                                    <li><a href="category.html">Women's Watches</a></li>
                                    <li><a href="category.html">Kids' Watches</a></li>
                                    <li><a href="category.html"> Pair</a></li>
                                </ul>
                            </li>
                            <li class="hadchild">
                                <a href="category.html" class="cutom-parent">Collection</a> <span
                                    class="button-view  fa fa-caret-right"></span>
                                <ul style="display: none;">
                                    <li><a href="category.html">All Nighters(36)</a></li>
                                    <li><a href="category.html">Arcade</a></li>
                                    <li><a href="category.html">Althleisure</a></li>
                                    <li><a href="category.html">Atomic</a></li>
                                    <li><a href="category.html">Automatics</a></li>
                                </ul>
                            </li>
                            <li class="hadchild">
                                <a href="category.html" class="cutom-parent">Brand</a> <span
                                    class="button-view  fa fa-caret-right"></span>
                                <ul style="display: none;">
                                    <li><a href="category.html"> Anne Klein (113)</a></li>
                                    <li><a href="category.html">Coach (18)</a></li>
                                    <li><a href="category.html">Fastrack (805)</a></li>
                                    <li><a href="category.html">Kenneth Cole (238)</a></li>
                                    <li><a href="category.html">Lee Cooper (100)</a></li>
                                </ul>
                            </li>
                            <li class="hadchild">
                                <a href="category.html" class="cutom-parent">Function</a> <span
                                    class="button-view  fa fa-caret-right"></span>
                                <ul style="display: none;">
                                    <li><a href="category.html"> Ana Digi (70)</a></li>
                                    <li><a href="category.html">Analog with Date (403)</a></li>
                                    <li><a href="category.html">Analog with Day & Date (275)</a></li>
                                    <li><a href="category.html">Analog with Day and Date (4)</a></li>
                                    <li><a href="category.html">Automatic (55)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="">
                    <div class="modcontent ">
                        <form class="type_2">
                            <div class="table_layout filter-shopby">
                                <div class="table_row">
                                    <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->
                                    <div class="table_cell">
                                        <fieldset>
                                            <legend>Price</legend>
                                            <div id="slider"
                                                class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                                <span class="ui-slider-handle ui-state-default ui-corner-all"></span>
                                                <span class="ui-slider-handle ui-state-default ui-corner-all"></span>
                                            </div>
                                            <div class="bock-range range">
                                                <input type="text" name="min_val" id="min_val" value=""
                                                    class="min_val input input-group">
                                                <input type="text" name="max_val" id="max_val" value=""
                                                    class="max_val input input-group">
                                            </div>
                                            <div class="range">
                                                Range :
                                                <span class="min_val"> ₹188.73</span> -
                                                <span class="max_val"> ₹335.15</span>
                                                <input type="hidden" name="" class="min_value" value="188.73">
                                                <input type="hidden" name="" class="max_value" value="335.15">
                                            </div>
                                            <button class="btn btn-group filter">Filter</button>
                                        </fieldset>
                                    </div>
                                    <!--/ .table_cell -->
                                    <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - SIZE - - - - - - - - - - - - - - - - -->
                                    <div class="table_cell">
                                        <fieldset>
                                            <legend>Size</legend>
                                            <ul class=" size">
                                                <li>
                                                    <a href="#">XS</a>
                                                </li>
                                                <li>
                                                    <a href="#">S</a>
                                                </li>
                                                <li>
                                                    <a href="#">L</a>
                                                </li>
                                                <li>
                                                    <a href="#">M</a>
                                                </li>
                                                <li>
                                                    <a href="#">XL</a>
                                                </li>
                                                <li>
                                                    <a href="#">1X</a>
                                                </li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                    <!--/ .table_cell -->
                                    <!-- - - - - - - - - - - - - - End Size - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - Color - - - - - - - - - - - - - - - - -->
                                    <div class="table_cell">
                                        <fieldset>
                                            <legend>Color</legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <ul class="color">
                                                        <li>
                                                            <a href="#"><img
                                                                    src="https://demo.smartaddons.com/templates/html/bestshop/image/demo/colors/blue.jpg"
                                                                    alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    src="https://demo.smartaddons.com/templates/html/bestshop/image/demo/colors/brown.jpg"
                                                                    alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    src="https://demo.smartaddons.com/templates/html/bestshop/image/demo/colors/green.jpg"
                                                                    alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    src="https://demo.smartaddons.com/templates/html/bestshop/image/demo/colors/red.jpg"
                                                                    alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    src="https://demo.smartaddons.com/templates/html/bestshop/image/demo/colors/yellow.jpg"
                                                                    alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    src="https://demo.smartaddons.com/templates/html/bestshop/image/demo/colors/violet.jpg"
                                                                    alt=""></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <!--/ .table_cell -->
                                    <!-- - - - - - - - - - - - - - End color - - - - - - - - - - - - - - - - -->
                                    <!-- - - - - - - - - - - - - - SUB CATEGORY - - - - - - - - - - - - - - - - -->
                                    <div class="table_cell">
                                        <fieldset>
                                            <legend>Brand</legend>
                                            <ul class="checkboxes_list">
                                                <li>
                                                    <input type="checkbox" checked="" name="category" id="category_1">
                                                    <label for="category_1">Samsung</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="category" id="category_2">
                                                    <label for="category_2">Elextrolux</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="category" id="category_3">
                                                    <label for="category_3">Panasonic</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="category" id="category_4">
                                                    <label for="category_4">Hitachi</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="category" id="category_5">
                                                    <label for="category_5">Daikin</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="category" id="category_6">
                                                    <label for="category_6">Dewoo</label>
                                                </li>
                                            </ul>
                                        </fieldset>
                                    </div>
                                    <!--/ .table_cell -->
                                    <!-- - - - - - - - - - - - - - End SUB CATEGORY - - - - - - - - - - - - - - - - -->
                                </div>
                                <!--/ .table_row -->
                            </div>
                            <!--/ .table_layout -->
                        </form>
                    </div>
                </div>
            </div>
            
        </aside>
        <!--Left Part End -->
        <!--Middle Part Start-->
        <div id="content" class="col-md-9 col-sm-8">
            <div class="products-category">
                
                <div class="module">
                    <h3 class="modtitle2">New Arrivals</h3>
                </div>
                <!-- Filters -->
                <div class="product-filter product-filter-top filters-panel">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 view-mode">
                            <div class="list-view">
                                <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"
                                    data-original-title="Grid"><i class="fa fa-th"></i></button>
                                <button class="btn btn-default list" data-view="list" data-toggle="tooltip"
                                    data-original-title="List"><i class="fa fa-th-list"></i></button>
                            </div>
                        </div>
                        <div class="short-by-show form-inline text-right col-lg-6 col-md-9 col-sm-12 col-xs-12">
                            <div class="form-group short-by">
                                <select id="input-sort" class="form-control" onchange="location = this.value;">
                                    <option value="" selected="selected">Sort By Default</option>
                                    <option value="">Sort By Name (A - Z)</option>
                                    <option value="">Sort By Name (Z - A)</option>
                                    <option value="">Sort By Price (Low &gt; High)</option>
                                    <option value="">Sort By Price (High &gt; Low)</option>
                                    <option value="">Sort By Rating (Highest)</option>
                                    <option value="">Sort By Rating (Lowest)</option>
                                    <option value="">Sort By Model (A - Z)</option>
                                    <option value="">Sort By Model (Z - A)</option>
                                </select>
                                <button class="btn btn-group"><i class="fa fa-long-arrow-down"></i></button>
                            </div>
                            <div class="form-group">
                                <span class="control-label" for="input-limit">Show:</span>
                                <select id="input-limit" class="form-control" onchange="location = this.value;">
                                    <option value="" selected="selected">15</option>
                                    <option value="">25</option>
                                    <option value="">50</option>
                                    <option value="">75</option>
                                    <option value="">100</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-pagination col-lg-3 col-md-12 col-sm-12 col-xs-12 text-right">
                            <div class="content-pagination-2">
                                <span>Page: </span>
                                <ul class="pagination1">
                                    <li class="active"><span>1</span></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">4</a></li>
                                    <li><a href=""><i class="fa fa-caret-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //end Filters -->
                <!--changed listings-->
                <div class="products-list row nopadding-xs so-filter-gird">
                    <div class="first_animate">
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Chicken swinesha">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1833SM01_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1833SM01_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="box-label"> <span class="label-product label-sale"> -16% </span></div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Chicken
                                                swinesha</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Cupim should ">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1833SL02_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1833SL02_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Cupim
                                                should</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-new"> ₹70.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Doenpuis consuat ">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/95061WD03_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/95061WD03_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="box-label"> <span class="label-product label-sale"> -13% </span><span
                                            class="label-product label-new"> New </span></div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Doenpuis
                                                consuat</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-old"> ₹66.00</span>
                                            <span class="price-new"> ₹76.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Drutick lanaeger">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1843QL01_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1843QL01_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Drutick
                                                lanaeger</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-new"> ₹80.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Ercitation incididunt">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1828QL02_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1828QL02_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Ercitation
                                                incididunt</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-new"> ₹75.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="second_animate">
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Chicken swinesha">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1833SM01_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1833SM01_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="box-label"> <span class="label-product label-sale"> -16% </span></div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Chicken
                                                swinesha</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Cupim should ">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1833SL02_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1833SL02_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Cupim
                                                should</a>
                                        </h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-new"> ₹70.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Doenpuis consuat ">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/95061WD03_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/95061WD03_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="box-label"> <span class="label-product label-sale"> -13% </span><span
                                            class="label-product label-new"> New </span></div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Doenpuis
                                                consuat</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-old"> ₹66.00</span>
                                            <span class="price-new"> ₹76.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Drutick lanaeger">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1843QL01_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1843QL01_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Drutick
                                                lanaeger</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-new"> ₹80.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Ercitation incididunt">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1828QL02_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1828QL02_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Ercitation
                                                incididunt</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-new"> ₹75.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="third_animate">
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Chicken swinesha">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1833SM01_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1833SM01_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="box-label"> <span class="label-product label-sale"> -16% </span></div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Chicken
                                                swinesha</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Cupim should ">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1833SL02_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1833SL02_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Cupim
                                                should</a>
                                        </h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-new"> ₹70.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Doenpuis consuat ">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/95061WD03_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/95061WD03_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="box-label"> <span class="label-product label-sale"> -13% </span><span
                                            class="label-product label-new"> New </span></div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Doenpuis
                                                consuat</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-old"> ₹66.00</span>
                                            <span class="price-new"> ₹76.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Drutick lanaeger">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1843QL01_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1843QL01_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Drutick
                                                lanaeger</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-new"> ₹80.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img">
                                        <a href="product.php" target="_self" title="Ercitation incididunt">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1828QL02_1.jpg?pView=listing"
                                                class="img-1 img-responsive" alt="image">
                                            <img src="https://staticimg.titan.co.in/Titan/Catalog/1828QL02_1.jpg?pView=listing"
                                                class="img-2 img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <div class="button-group so-quickview cartinfo--left">
                                        <button type="button" class="addToCart btn-button" title="Add to cart"
                                            onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="Add to Wish List"
                                            onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish
                                                List</span>
                                        </button>
                                        <button type="button" class="compare btn-button" title="Compare this Product "
                                            onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this
                                                Product</span>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                            href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i
                                                class="fa fa-eye"></i><span>Quick view</span></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.php" title="Chicken swinesha" target="_self">Ercitation
                                                incididunt</a></h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                        <div class="price">
                                            <span class="price-new"> ₹75.00</span>
                                        </div>
                                        <div class="description item-desc">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                                clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>
                                    <div class="list-block">
                                        <div class="item-available">
                                            <div class="row">
                                                <p class="col-xs-6 a1">Available: <b>58</b>
                                                </p>
                                                <p class="col-xs-6 a2">Sold: <b>36</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="price"> <span class="price-old"> ₹55.00</span>
                                            <span class="price-new"> ₹46.00</span>
                                        </div>
                                        <button class="addToCart btn-button  btn-block" type="button"
                                            title="Add to Cart" onclick="cart.add('101', '1');">
                                            <i class="fa fa-shopping-basket"></i>
                                            <span> Add to cart</span>
                                        </button>
                                        <button class="wishlist btn-button btn-block" type="button"
                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                class="fa fa-heart"></i>
                                            Add to Wishist
                                        </button>
                                        <button class="compare btn-button  btn-block" type="button"
                                            title="Compare this Product" onclick="compare.add('101');">
                                            <i class="fa fa-refresh"></i>
                                            <span>Add to compare</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
</div>
</div>
            <!--// End Changed listings-->
            <!-- Filters -->
            <div class="product-filter product-filter-top filters-panel">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 view-mode">
                        <div class="list-view">
                            <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"
                                data-original-title="Grid"><i class="fa fa-th"></i></button>
                            <button class="btn btn-default list" data-view="list" data-toggle="tooltip"
                                data-original-title="List"><i class="fa fa-th-list"></i></button>
                        </div>
                    </div>
                    <div class="short-by-show form-inline text-right col-lg-6 col-md-9 col-sm-12 col-xs-12">
                        <div class="form-group short-by">
                            <select id="input-sort" class="form-control" onchange="location = this.value;">
                                <option value="" selected="selected">Sort By Default</option>
                                <option value="">Sort By Name (A - Z)</option>
                                <option value="">Sort By Name (Z - A)</option>
                                <option value="">Sort By Price (Low &gt; High)</option>
                                <option value="">Sort By Price (High &gt; Low)</option>
                                <option value="">Sort By Rating (Highest)</option>
                                <option value="">Sort By Rating (Lowest)</option>
                                <option value="">Sort By Model (A - Z)</option>
                                <option value="">Sort By Model (Z - A)</option>
                            </select>
                            <button class="btn btn-group"><i class="fa fa-long-arrow-down"></i></button>
                        </div>
                        <div class="form-group">
                            <span class="control-label" for="input-limit">Show:</span>
                            <select id="input-limit" class="form-control" onchange="location = this.value;">
                                <option value="" selected="selected">15</option>
                                <option value="">25</option>
                                <option value="">50</option>
                                <option value="">75</option>
                                <option value="">100</option>
                            </select>
                        </div>
                    </div>
                    <div class="box-pagination col-lg-3 col-md-12 col-sm-12 col-xs-12 text-right">
                        <div class="content-pagination-2">
                            <span>Page: </span>
                            <ul class="pagination1">
                                <li class="active"><span>1</span></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href=""><i class="fa fa-caret-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //end Filters -->
        </div>
    </div>
    <!--Middle Part End-->
  </div>
</div>
<!-- //Main Container -->
<?php include './include/footer.php'; ?>