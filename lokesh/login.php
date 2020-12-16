<!-- header -->
<?php include './include/header.php';?>

<!-- Main Container  -->
<div class="main-container container">
	<ul class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li><a href="#">Account</a></li>
		<li><a href="#">Register/Login</a></li>
	</ul>

	<div class="row">
		<div id="content" class="col-sm-12">
			<div class="page-login">

				<div class="main-container container">

					<div class="row">
						<div id="content" class="col-lg-6">
							<h2 class="title">Register Account</h2>
							<p>If you already have an account with us, please login at the <a href="#">login page</a>.
							</p>
							<form action="" method="post" enctype="multipart/form-data"
								class="form-horizontal account-register clearfix">
								<fieldset id="account">
									<div class="row">
										<div class="col-lg-6 col-12 ">
											<div class="form-group required ">
												<div class="col-lg-12">
												<label class=" control-label mx-2" for="input-firstname">First
													Name</label>

												<input type="text" name="firstname" value="" placeholder="First Name"
													id="input-firstname" class="form-control">
												</div>
												
											</div>

										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group required">
												<div class="col-lg-12">
												<label class="  control-label" for="input-lastname">Last
													Name</label>
												<input type="text" name="lastname" value="" placeholder="Last Name"
													id="input-lastname" class="form-control">
												</div>
											
											</div>
										</div>
									</div>




								</fieldset>

								<fieldset id="mobile_email">
									<div class="row">
										<div class="col-lg-6 col-12 ">
											<div class="form-group required ">
												<div class="col-lg-12">
												<label class=" control-label mx-2" for="input-firstname">Mobile</label>

												<input type="text" name="firstname" value=""
													placeholder="Enter Phone NUmber" id="input-firstname"
													class="form-control">
												</div>

											</div>

										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group required">
												<div class="col-lg-12">
												<label class="  control-label" for="input-lastname">Email</label>
												<input type="email" name="lastname" value="" placeholder="Enter Email"
													id="input-lastname" class="form-control">
												</div>
											
											</div>
										</div>
									</div>
								</fieldset>
								<fieldset id="Password">
									<div class="row">
										<div class="col-lg-6 col-12 ">
											<div class="form-group required ">
											<div class="col-lg-12">
											<label class=" control-label mx-2"
													for="input-firstname">Password</label>

												<input type="password" name="firstname" value=""
													placeholder="Enter Password" id="input-password"
													class="form-control">
											</div>	
											
											</div>

										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group required">
											<div class="col-lg-12">
											<label class="  control-label" for="input-lastname">Confirm
													Password</label>
												<input type="Password" name="password" value=""
													placeholder="Confirm Password" id="input-confirmPassword"
													class="form-control">
											</div>	
											</div>
										</div>
									</div>
								</fieldset>

								<fieldset id="address">
									<legend>Your Address</legend>
									<fieldset id="address">
										<div class="row">
											<div class="col-lg-6 col-12 ">
												<div class="form-group required ">
													
													<div class="col-lg-12">
													<label class=" control-label mx-2"
														for="input-country">Country</label>
														<select name="country_id" id="input-country"
															class="form-control">
															<option value=""> --- Please Select --- </option>
															<option value="244">Aaland Islands</option>
															<option value="1">Afghanistan</option>
															<option value="2">Albania</option>
															<option value="3">Algeria</option>
															<option value="4">American Samoa</option>
															<option value="5">Andorra</option>
															<option value="6">Angola</option>
														</select>
													</div>
												</div>

											</div>
											<div class="col-lg-6 col-12">
												<div class="form-group required">
													
													<div class="col-lg-12">
													<label class="  control-label" for="input-zone">State</label>
														<select name="zone_id" id="input-zone" class="form-control">
															<option value=""> --- Please Select --- </option>
															<option value="3513">Aberdeen</option>
															<option value="3514">Aberdeenshire</option>
															<option value="3515">Anglesey</option>
															<option value="3516">Angus</option>

														</select>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
								 
									<div class="form-group required">
										
                             <div class="col-lg-12">
										 <label class="  control-label" for="input-zone">City</label>
											<select name="zone_id" id="input-zone" class="form-control">
												<option value=""> --- Please Select --- </option>
												<option value="3513">Aberdeen</option>
												<option value="3514">Aberdeenshire</option>
												<option value="3515">Anglesey</option>
												<option value="3516">Angus</option>
                                               </select>
										</div>
									</div>
								</fieldset>
								<div class="buttons">
									<div class="pull-right">I have read and agree to the <a href="#"
											class="agree"><b>Pricing Tables</b></a>
										<input class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp;
										<input type="submit" value="Continue" class="btn btn-primary">
									</div>
								</div>
							</form>
						</div>


						<form action="#" method="post" enctype="multipart/form-data">
							<div class="col-lg-6 customer-login">
								<div class="well">
									<h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Customer</h2>
									<p><strong>I am a returning customer</strong></p>
									<div class="form-group">
										<label class="control-label " for="input-email">E-Mail Address</label>
										<input type="text" name="email" value="" id="input-email"
											class="form-control" />
									</div>
									<div class="form-group">
										<label class="control-label " for="input-password">Password</label>
										<input type="password" name="password" value="" id="input-password"
											class="form-control" />
									</div>
								</div>
								<div class="bottom-form">
									<a href="#" class="" id="forgotpassword">Forgot Password</a>
									<input type="submit" value="Login" class="btn btn-default pull-right" />
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>
</div>
</div>
<!-- //Main Container -->
<!-- footer -->
<?php include './include/footer.php';?>