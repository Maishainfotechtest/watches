<?php include './include/header.php' ?>
<!-- Main Container  -->
<div class="main-container container">
  <ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Shopping Cart</a></li>
  </ul>

  <div class="row">
    <!--Middle Part Start-->
    <div id="content" class="col-sm-12">
      <h2 class="title">Shopping Cart</h2>
      <div class="table-responsive form-group">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="text-left">Image</td>
              <td class="text-left">Product Name</td>
              <td class="text-left">Model</td>
              <td class="text-left">Quantity</td>
              <td class="text-left">Unit Price</td>
              <td class="text-left">Total</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-left"><a href="product.php"><img width="70px"
                    src="https://staticimg.titan.co.in/Titan/Catalog/1833SL01_1.jpg?pView=listing"
                    alt="Aspire Ultrabook Laptop" title="titan watch 1" class="img-thumbnail" /></a></td>
              <td class="text-left"><a href="product.php"> BLUE DIAL TAN LEATHER STRAP WATCH</a><br />
              </td>
              <td class="text-left">Pt 001</td>
              <td class="text-left" width="200px">
                <div class="input-group btn-block quantity">
                  <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                    <span class="input-group-addon product_quantity_down " onclick="subqty()">−</span>
                    <input class="form-control" type="text" id="qty"  name="quantity" value="1">
                    <input type="hidden" name="product_id" value="50">
                    <span class="input-group-addon product_quantity_up" onclick="subqty()">+</span>
                  </div>
                  <span class="input-group-btn">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                      <i class="fa fa-times-circle"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle">Warning <i class="fa fa-exclamation-triangle text-warning" aria-hidden="true"></i></h3>
                            <button type="button" class="close bg-danger" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h2> <b> Are you sure ? do you want to remove this item from cart ?</b></h2>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn  btn-danger" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Yes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </span>
                </div>
              </td>
            <td class="text-left">&#8377;<span id="unit">120.00</span> </td>
            <td class="text-left">&#8377; <span id="total">120.00</span>  </td>
            </tr>
            <tr>
              <td class="text-left"><a href="product.php"><img width="70px"
                    src="https://staticimg.titan.co.in/Titan/Catalog/1833SL02_1.jpg?pView=listing"
                    alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes"
                    class="img-thumbnail" /></a></td>
              <td class="text-left"><a href="product.php">WHITE DIAL BROWN LEATHER STRAP WATCH</a></td>
              <td class="text-left">Pt 002</td>
              <td class="text-left" width="200px">
                <div class="input-group btn-block quantity">
                  <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                    <span class="input-group-addon product_quantity_down" onclick="subqtytwo()">−</span>
                    <input class="form-control" type="text" id="qtytwo" name="quantity" value="1">
                    <input type="hidden" name="product_id" value="50">

                    <span class="input-group-addon product_quantity_up" onclick="subqtytwo()">+</span>
                  </div>
                  <span class="input-group-btn">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                      <i class="fa fa-times-circle"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title font-weight-bold" id="exampleModalLongTitle">Warning !!</h3>
                            <button type="button" class="close bg-danger" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h2>Are you sure ? do you want to remove this item from cart ?</h2>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn  btn-danger" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Yes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </span>
                </div>
              </td>
              <td class="text-left">&#8377; <span id="unittwo">150.00</span> </td>
              <td class="text-left">&#8377;<span id="totaltwo">150.00</span> </td>
            </tr>
          </tbody>
        </table>




        <h3 class="subtitle no-margin">What would you like to do next?</h3>
        <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery
          cost.</p>
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                  aria-expanded="true">Use Coupon Code

                  <i class="fa fa-caret-down"></i>
                </a>
              </h4>
            </div>
            <div id="collapse-coupon" class="panel-collapse collapse in" aria-expanded="true">
              <div class="panel-body">
                <label class="col-sm-2 control-label" for="input-coupon">Enter your coupon here</label>
                <div class="input-group">
                  <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon"
                    class="form-control">
                  <span class="input-group-btn"><input type="button" value="Apply Coupon" id="button-coupon"
                      data-loading-text="Loading..." class="btn btn-primary"></span>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- final bill section-->
        <div class="row">
          <div class="col-lg-6 ">
            <div class="my-3">
              <figure>
                <img
                  src="https://www.titan.co.in/wps/wcm/connect/titan/44abece3-d4c0-4547-a9e2-16ad124ac2e0/desktop/TI_NoCostEMI_1000x200.jpg?MOD=AJPERES&CACHEID=ROOTWORKSPACE.Z18_90IA1H80OO8010QKMQAAEP2004-44abece3-d4c0-4547-a9e2-16ad124ac2e0-desktop-nn0cm2O"
                  alt="" class="img-fluid " height="231px">
              </figure>
            </div>

          </div>
          <div class="col-lg-6 col-sm-4  mx-2">
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td class="text-left">
                    <strong>Sub-Total:</strong>
                  </td>
                  <td class="text-left"> ₹168.71</td>
                </tr>
                <tr>
                  <td class="text-left">
                    <strong>Flat Shipping Rate:</strong>
                  </td>
                  <td class="text-left"> ₹4.69</td>
                </tr>
                <tr>
                  <td class="text-left">
                    <strong>Eco Tax (-2.00):</strong>
                  </td>
                  <td class="text-left"> ₹5.62</td>
                </tr>
                <tr>
                  <td class="text-left">
                    <strong>VAT (20%):</strong>
                  </td>
                  <td class="text-left"> ₹34.68</td>
                </tr>
                <tr>
                  <td class="text-left">
                    <strong>Total:</strong>
                  </td>
                  <td class="text-left"> ₹213.70</td>
                </tr>

              </tbody>

            </table>
            <!-- checkout and shop Buttons -->
            <div class="buttons">
              <div class="pull-left"><a href="index.php" class="btn btn-primary">Continue Shopping</a></div>
              <div class="pull-right"><a href=" checkout.php" class="btn btn-primary">Checkout</a></div>
            </div>

          </div>

        </div>
        <!-- /final bill section-->

      </div>
      <!--Middle Part End -->
    </div>
  </div>

  <!-- //Main Container -->
  <?php include './include/footer.php'; ?>