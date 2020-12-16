<!-- header -->
<?php include './include/header.php' ?>

<!-- Main Container  -->
<div class="main-container container">
	<ul class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li><a href="#">Checkout</a></li>

	</ul>

	<div class="row">
		<!--Middle Part Start-->


		<!--customer login -->
		<div id="content" class=" col-lg-3 col-sm-12">
			<h2 class="title">Checkout</h2>
			<div class="so-onepagecheckout row">
				<div class="col-left col-lg-12 col-sm-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><i class="fa fa-sign-in"></i> Create an Account or Login
							</h4>
						</div>
						<div class="panel-body">
							<div class="radio">
								<label>
									<input type="radio" value="register" name="account">
									Register Account</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" checked="checked" value="guest" name="account">
									Guest Checkout</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" value="returning" name="account">
									Returning Customer</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--customer login -->
		<div class="col-right col-lg-9 col-lg-9 my-5">
			<div class="row">
				<!-- delivery method -->
				<div class="col-lg-6 col-sm-12">
					<div class="panel panel-default no-padding">
						<!--personal details -->
						<div class="panel panel-default">
							<div class="panel-heading">
								<a href="#account" class="accordion-toggle" data-toggle="collapse"
									data-parent="#accordion" aria-expanded="true">
									<h4 class="panel-title"><i class="fa fa-user"></i> Billing Details <i
											class="fa fa-caret-down"></i></h4>
								</a>
							</div>
							<div class="panel-body panel-collapse collapse in" aria-expanded="true">
								<p> Enter Billing details Here.</p>
								<fieldset>
									<div id="account">
										<div class="form-group required">
											<label for="input-payment-firstname" class="control-label">First
												Name</label>
											<input type="text" class="form-control" id="input-payment-firstname"
												placeholder="First Name" value="" name="firstname">
										</div>
										<div class="form-group required">
											<label for="input-payment-lastname" class="control-label">Last
												Name</label>
											<input type="text" class="form-control" id="input-payment-lastname"
												placeholder="Last Name" value="" name="lastname">
										</div>
										<div class="form-group required">
											<label for="input-payment-email" class="control-label">E-Mail</label>
											<input type="text" class="form-control" id="input-payment-email"
												placeholder="E-Mail" value="" name="email">
										</div>
										<div class="form-group required">
											<label for="input-payment-telephone" class="control-label">Telephone</label>
											<input type="text" class="form-control" id="input-payment-telephone"
												placeholder="Telephone" value="" name="telephone">
										</div>

									</div>

								</fieldset>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<a href="#address" class="accordian-toogle" data-toggle="collapse"
									data-parent="#accordian" aria-expanded="true">
									<h4 class="panel-title"><i class="fa fa-book"></i> Your Address <i
											class="fa fa-caret-down"></i></h4>
								</a>
							</div>
							<div class="panel-body">
								<p> Enter Address details Here.</p>
								<fieldset id="address" class="required">
									<div class="form-group">
										<label for="input-payment-company" class="control-label">Company</label>
										<input type="text" class="form-control" id="input-payment-company"
											placeholder="Company" value="" name="company">
									</div>
									<div class="form-group required">
										<label for="input-payment-address-1" class="control-label">Address
											1</label>
										<input type="text" class="form-control" id="input-payment-address-1"
											placeholder="Address 1" value="" name="address_1">
									</div>
									<div class="form-group">
										<label for="input-payment-address-2" class="control-label">Address
											2</label>
										<input type="text" class="form-control" id="input-payment-address-2"
											placeholder="Address 2" value="" name="address_2">
									</div>
									<div class="form-group required">
										<label for="input-payment-city" class="control-label">City</label>
										<input type="text" class="form-control" id="input-payment-city"
											placeholder="City" value="" name="city">
									</div>
									<div class="form-group required">
										<label for="input-payment-postcode" class="control-label">Post
											Code</label>
										<input type="text" class="form-control" id="input-payment-postcode"
											placeholder="Post Code" value="" name="postcode">
									</div>
									<div class="form-group required">
										<label for="input-payment-postcode" class="control-label">
											Date</label>
										<input type="datetime-local" class="form-control" id="input-payment-postcode"
											placeholder="" value="" name="postcode" required>
									</div>
									<div class="form-group required">
										<label for="input-payment-country" class="control-label">Country</label>
										<select class="form-control" id="input-payment-country" name="country_id">
											<option value=""> --- Please Select --- </option>
											<option value="244">Aaland Islands</option>
											<option value="1">Afghanistan</option>
											<option value="2">Albania</option>
											<option value="3">Algeria</option>
											<option value="4">American Samoa</option>
											<option value="5">Andorra</option>
											<option value="6">Angola</option>
											<option value="7">Anguilla</option>
											<option value="8">Antarctica</option>
											<option value="9">Antigua and Barbuda</option>
											<option value="10">Argentina</option>
											<option value="11">Armenia</option>
											<option value="12">Aruba</option>
											<option value="252">Ascension Island (British)</option>
											<option value="13">Australia</option>
											<option value="14">Austria</option>
											<option value="15">Azerbaijan</option>
											<option value="16">Bahamas</option>
											<option value="17">Bahrain</option>

										</select>
									</div>
									<div class="form-group required">
										<label for="input-payment-zone" class="control-label">Region /
											State</label>
										<select class="form-control" id="input-payment-zone" name="zone_id">
											<option value=""> --- Please Select --- </option>
											<option value="3513">Aberdeen</option>
											<option value="3514">Aberdeenshire</option>
											<option value="3515">Anglesey</option>
											<option value="3516">Angus</option>
											<option value="3517">Argyll and Bute</option>
											<option value="3518">Bedfordshire</option>
											<option value="3519">Berkshire</option>
											<option value="3520">Blaenau Gwent</option>
											<option value="3521">Bridgend</option>
											<option value="3522">Bristol</option>

										</select>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" checked="checked" value="1" name="shipping_address">
											My delivery and billing addresses are the same.</label>
									</div>
								</fieldset>
							</div>
						</div>
						<!--/personal details -->

					</div>

				</div>
				<!-- /delivery method -->



				<div class="col-lg-6 col-sm-12">


					<!--shopping cart details -->
					<div class="col-sm-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Your Orders</h4>
							</div>
							<div class="panel-body">
								<div class=" ">
									<table class="table table-bordered">
										<thead>
											<tr>
												<td class="text-center">Image</td>
												<td class="text-left">Product Name</td>
												<td class="text-right">Total</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center"><a href="product.php"><img width="60px"
															src="https://staticimg.titan.co.in/Titan/Catalog/1833SL01_1.jpg?pView=pdp"
															alt="Xitefun Causal Wear Fancy Shoes"
															title="Xitefun Causal Wear Fancy Shoes"
															class="img-thumbnail"></a></td>
												<td class="text-left"><a href="product.php">Emasa rumas
														gacem</a>
												</td>

												<td class="text-right">₹114.35</td>

											</tr>
											<tr>
												<td class="text-center"><a href="product.php"><img width="60px"
															src="http://localhost/frontend/FrontEndTemplate/lokesh/image/catalog/menu/megabanner/digital.jpg"
															alt="Xitefun Causal Wear Fancy Shoes"
															title="Xitefun Causal Wear Fancy Shoes"
															class="img-thumbnail"></a></td>
												<td class="text-left"><a href="product.php">Emasa rumas
														gacem</a>
												</td>

												<td class="text-right">₹114.35</td>

											</tr>
										</tbody>
										<tfoot>
											<tr>
												<td class="text-left" colspan="2"><strong>Shipping:</strong></td>
												<td class="text-right">₹121.85</td>
											</tr>
											<tr>
												<td class="text-left" colspan="2"><strong>Total:</strong></td>
												<td class="text-right">₹121.85</td>
											</tr>
										</tfoot>

									</table>

								</div>

							</div>

						</div>
					</div>
					<!--coupn details -->
					<div class="panel-heading">
						<a href="#new" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
							aria-expanded="true">
							<h4 class="panel-title"><i class="fa fa-ticket"></i> Do you Have a
								Coupon ?
								<i class="fa fa-caret-down"></i>
							</h4>
						</a>
						<div class="panel-body row" id="new" class="panel-collapse collapse in">
							<div class="col-lg-12 col-sm-6 ">
								<div class="input-group coupon">
									<input type="text" class="form-control " id="input-coupon"
										placeholder="Enter your coupon here" value="" name="coupon">
									<span class="input-group-btn">
										<input type="button" class="btn btn-primary" data-loading-text="Loading..."
											id="button-coupon" value="Apply Coupon">
									</span>
								</div>
							</div>
						</div>
					</div>
					<!--/coupn detalis -->
					<!--/shopping cart -->

					<!--payment method -->
					 
					 
						 
								<div class="panel-heading">
									<a href="#payment" class="accordion-toggle" data-toggle="collapse"
										data-parent="#accordion" aria-expanded="true">
										<h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method
											<i class="fa fa-caret-down"></i>
										</h4>
									</a>
									<p>Please select the preferred payment method to use on this order.</p>
								</div>
							
								<div class="panel-body" id="payment" class="panel-collapse collapse in"
									aria-expanded="true">
								
									<div class="radio">
										<label>
											<input type="radio" checked="checked" name="Paypal">Cash On
											Delivery</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="Paypal">Pay Online </label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="Paypal">Paypal</label>
									</div>
								</div>
							 
						 
				 
					<!--/paymanet method-->

					<div class=" col-lg-12  col-sm-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your
									Order
								</h4>
							</div>
							<div class="panel-body">
								<textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea>
								<br>
								<label class="control-label" for="confirm_agree">
									<input type="checkbox" checked="checked" value="1" required=""
										class="validate required" id="confirm_agree" name="confirm agree">
									<span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp;
												Conditions</b></a></span> </label>
								<div class="buttons">
									<div class="pull-right">
										<input type="button" class="btn btn-primary" id="button-confirm"
											value="Confirm Order">
									</div>
								</div>
							</div>
						</div>
					</div>



				</div>
			</div>
			<!--Middle Part End -->

		</div>
	</div>

</div>
<!-- //Main Container -->

<!-- footer -->
<?php include './include/footer.php' ?>