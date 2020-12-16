<!--- headers -->
 <?php include './include/header.php';?>	
    
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Order Infomation</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-lg-12">
				<h2 class="title">Order Information</h2>

				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td colspan="2" class="text-left">Order Details</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%;" class="text-left"> <b>Order ID:</b> #214521
								<br>
								<b>Date Added:</b> 20/06/2016</td>
							<td style="width: 50%;" class="text-left"> <b>Payment Method:</b> Cash On Delivery
								<br>
								<b>Shipping Method:</b> Flat Shipping Rate </td>
						</tr>
					</tbody>
				</table>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td style="width: 50%; vertical-align: top;" class="text-left">Payment Address</td>
							<td style="width: 50%; vertical-align: top;" class="text-left">Shipping Address</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">Jhone Cary
								<br>Central Square
								<br>22 Hoi Wing Road
								<br>New Delhi
								<br>India</td>
							<td class="text-left">Jhone Cary
								<br>Central Square
								<br>22 Hoi Wing Road
								<br>New Delhi
								<br>India</td>
						</tr>
					</tbody>
				</table>
				<div class=" ">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-left">Product Name</td>
								 
								<td class="text-right">Quantity</td>
								<td class="text-right">Price</td>
								<td class="text-right">Total</td>
								<td style="width: 20px;"></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">Titan Blue Strap </td>
								 
								<td class="text-right">1</td>
								<td class="text-right"> ₹123.20</td>
								<td class="text-right"> ₹123.20</td>
								<td style="white-space: nowrap;" class="text-right"> <a class="btn btn-primary" title="" data-toggle="tooltip" href="#" data-original-title="Reorder"><i class="fa fa-shopping-cart"></i></a>
									<a class="btn btn-danger" title="" data-toggle="tooltip" href="return.html" data-original-title="Return"><i class="fa fa-reply"></i></a>
								</td>
							</tr>

						</tbody>
						<tfoot>
							<tr>
								 <td class="text-left"><b>Sub-Total</b></td>
								<td class="text-right" colspan="3"> ₹301.00</td>
						   </tr>
						   <tr>
								 <td class="text-left"><b>Flat Shipping Rate	</b></td>
								<td class="text-right" colspan="3"> ₹201.00</td>
						   </tr>
						   <tr>
								 <td class="text-left"><b> VAT (20%)		</b></td>
								<td class="text-right" colspan="3"> ₹31.00</td>
                           </tr>
						   <tr>
								 <td class="text-left"><b>  TOTAL		</b></td>
								<td class="text-right " colspan="3"> ₹3331.00</td>
                           </tr>	 
						</tfoot>
					</table>
				</div>
				<h3>Order History</h3>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td class="text-left">Date Added</td>
							<td class="text-left">Status</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">20/06/2016</td>
							<td class="text-left">Processing</td>
						</tr>
						<tr>
							<td class="text-left">21/06/2016</td>
							<td class="text-left">Shipped</td>
						</tr>
						<tr>
							<td class="text-left">24/06/2016</td>
							<td class="text-left">Complete</td>
						</tr>
					</tbody>
				</table>
				<div class="buttons clearfix">
					<div class="pull-right"><a class="btn btn-primary" href="#">Continue</a>
					</div>
				</div>



			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->

<!-- footer-->
<?php include './include/footer.php';?>	