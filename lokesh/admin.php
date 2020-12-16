<?php include './include/header.php'; ?>

<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="home.php">Home</a></li>
			<li><a href="#">Admin Panel</a></li>
			 
		</ul>
		
		<div class="row">
			<div id="content" class="col-lg-3">
              <div class="container">
              <ul>
                   <li class="adminlist active "><a href=""><i class="fa fa-tachometer" aria-hidden="true"></i> DashBoard</a></li>
                   <li class="adminlist "><a href=""><i class="fa fa-user" aria-hidden="true"></i> My Account</a>  </li>
                   <li class="adminlist "><a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i> My Orders </a>  </li>
                   <li class="adminlist "><a href=""> <i class="fa fa-list-alt" aria-hidden="true"></i> My Wishlist </a>  </li>
                   <li class="adminlist "><a href=""><i class="fa fa-address-book" aria-hidden="true"></i> My Adress Book</a> </li>
                   <li class="adminlist "><a href=""><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>  </li>
               </ul>
              </div> 
            
            </div> 
            <div id="container" class="col-lg-9 ">
                <h2 class="">Welcome To DashBoard</h2>
                <div class="row">
                    <div class="col-lg-3 " >
                        <div id="settings">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    <p>Account  Setting</p>
                        </div>
                  
                    </div>
                    <div class="col-lg-3">
                        <div id="Myorders">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <p>My Orders</p>
                        </div>
                    
                    </div>
                    <div class="col-lg-3">
                        <div id="wishlist">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                    <p>Wishlist</p>
                        </div>
                    
                    </div>
                    <div class="col-lg-3">
                        <div class="" id="password">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    <p>Change Password</p>
                        </div>
                 
                    </div>
                </div>
                <div class=" edit_container ">
                    <h4>Account Details</h4>
                    <input type="button" class="btn btn-success " value="Edit Account">
                </div>
                <div class="userdetails">
                    <h3><b>user's Name</b> </h3>
                    <h4>user's Email id</h4>
                    <h4>user's Contact Number</h4>
                </div>
            </div> 
        </div> 
</div>                
<?php include './include/footer.php'; ?>
  