 
<?php include './include/header.php';?>	    
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">My Wish List</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class=" col-lg-12 ">
				<h2 class="title">My Wish List</h2>
				<div class="  ">
					<table class="table table-bordered table-hover wishlist">
						<thead>
							<tr>
								<td class="text-center">Image</td>
								<td class="text-left">Product Name</td>
								<td class="text-left">Model</td>
								<td class="text-right">Stock</td>
								<td class="text-right">Unit Price</td>
								<td class="text-right">Action</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">
									<a  href="product.php"><img width="70px" src="https://staticimg.titan.co.in/Traq/Catalog/75004PP01_1.jpg?pView=listing" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop">
									</a>
								</td>
								<td class="text-left"><a href="product.php">TRAQ CARDIO - TRAQ BY TITAN</a>
								</td>
								<td class="text-left">Pt 001</td>
								<td class="text-right">In Stock</td>
								<td class="text-right">
									<div class="price"> <span class="price-new">₹45</span>  </div>
								
								</td>
								<td class="text-right">
									<button class="btn btn-primary"
									title="" data-toggle="tooltip"
									onclick="cart.add('48');"
									type="button" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i>
									</button>
									<a class="btn btn-danger" title="" data-toggle="tooltip" href="" data-original-title="Remove"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							<tr>
								<td class="text-center">
									<a href="product.php"><img width="70px" src="https://staticimg.titan.co.in/Titan/Catalog/90116QM01_1.jpg?pView=listing" title="Xitefun Causal Wear Fancy Shoes"></a>
								</td>
								<td class="text-left"><a href="product.php">CONNECTED X </a>
								</td>
								<td class="text-left">Pt 002</td>
								<td class="text-right">Pre-Order</td>
								<td class="text-right">
									<div class="price"> <span class="price-new">₹85</span> </div>
								</td>
								<td class="text-right">
									<button class="btn btn-primary"
									title="" data-toggle="tooltip"
									onclick="" type="button"
									data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i>
									</button>
									<a class="btn btn-danger" title="" data-toggle="tooltip"
									href="" data-original-title="Remove"><i class="fa fa-times"></i>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

		 
		</div>
	</div>
	<!-- //Main Container -->
<?php include './include/footer.php';?>	
 