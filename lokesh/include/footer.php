  <!-- Footer Container -->
  <footer class="footer-container typefooter-4 " >
            <!-- Footer Top Container -->
            <section class="footer-top ">
                <div class="container">
                    <div class="row">
                        <div class="contnet-footer-top">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 socials-footer">
                                <h3 class="title-footer-top">Follow Socials</h3>
                                <ul class="socials">
                                    <li class="facebook"><a class="_blank" href="https://www.facebook.com/MagenTech" target="_blank"><i class="fa fa-facebook fs-2x"></i></a>
                                    </li>
                                    <li class="twitter"><a class="_blank" href="https://twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="google_plus"><a class="_blank" href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                    <li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    
                                </ul>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Footer Top Container -->
            <section class="footer-middle " >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-style">
                            <div class="infos-footer box-footer">
                                <div class="module">
                                    <h3 class="modtitle">Contact Info</h3>
                                    <ul>
                                        <li class="adres"> Delhi , India</li>
                                        <li class="mail">
                                            <a href="mailto:contact@opencartworks.com">edukan@gmail.com</a>
                                        </li>
                                        <li class="phone">XXX-XX-XXXX</li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 col-style">
                            <div class="box-information box-footer">
                                <div class="module clearfix">
                                    <h3 class="modtitle">Information</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="aboutus.php"><i class="fa fa-users" aria-hidden="true"></i> About Us</a></li>
                                            <li><a href="PrivacyPolicy.php"><i class="fa fa-list-alt" aria-hidden="true"></i> PrivacyPolicy </a></li>
                                          
                                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Product </a></li>
                                         
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 col-style">
                            <div class="box-service box-footer">
                                <div class="module clearfix">
                                    <h3 class="modtitle">Services</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="contactus.php"><i class="fa fa-commenting" aria-hidden="true"></i>  Contact Us</a></li>
                                         
                                            <li><a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i> Support</a></li>
                                            <li><a href="contactus.php"><i class="fa fa-map-marker" aria-hidden="true"></i> Site Map</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-style">
                            <div class="module  so-popular-tag box-footer">
                                <h3 class=" modtitle"><span>Edukaan</span></h3>
                                <div class="modcontent">
                                    <div class="box-content">   
                                   <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat exerNeque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat exer</p><a href="" class="">ReadMore</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Footer Bottom Container -->
            <section class="footer-bottom ">
                <div class="container">
                    <div class="row">
                        <div class="content-footer-bottom">
                            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 payment-w hidden-sm">
                                <img src="./image/demo/payment/payment.png" alt="imgpayment">
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 copyright-w pull-right">
                                <div class="copyright">Copyright © Edukaan 2020 . All Rights Reserved.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Footer Bottom Container -->
            <!--Back To Top-->
            <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
        </footer>
        <!-- //end Footer Container --> 
         <!-- Include Libs & Plugins
            ============================================ -->
        <!-- Placed at the end of the document so the pages load faster -->
       
       <script>
   function subqty(){
       var inpqty = document.getElementById('qty').value;
       var unitqty = document.getElementById('unit').innerText;
       var totalqty = document.getElementById('total').innerText;
       var final = document.getElementById('final').innerText;
      
        
        
       inpqty = parseInt(inpqty);
       inpqty++;  
       totalqty = unitqty*inpqty;
        
       var totalqty = document.getElementById('total').innerText = totalqty + ".00";
       var final = document.getElementById('final').innerText = totalqty + ".00";
     
}
function subqtytwo() {
       
       var inpqtytwo = document.getElementById('qtytwo').value;
       var unitqtytwo = document.getElementById('unittwo').innerText;
       var totalqtytwo = document.getElementById('totaltwo').innerText;
       var final = document.getElementById('final').innerText;
       
        
        
       inpqtytwo = parseInt(inpqtytwo);
       inpqtytwo++;  
       totalqtytwo = unitqtytwo*inpqtytwo;
      console.log(totalqtytwo)
       var totalqtytwo = document.getElementById('totaltwo').innerText = totalqtytwo + ".00";
       var final = document.getElementById('final').innerText = totalqtytwo +  ".00";
}
   
   
   </script>
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
        <script type="text/javascript" src="js/themejs/libs.js"></script>
        <script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
        <script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
        <script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
        <script type="text/javascript" src="js/datetimepicker/moment.js"></script>
        <script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
     
        <!-- Theme files
            ============================================ -->
        <script type="text/javascript" src="js/themejs/application.js"></script>
        <script type="text/javascript" src="js/themejs/homepage.js"></script>
        <script type="text/javascript" src="js/themejs/toppanel.js"></script>  
        <script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
        <script type="text/javascript" src="js/themejs/addtocart.js"></script>  
        <script type="text/javascript" src="js/themejs/cpanel.js"></script>
        <script src="../js/main.js"></script>
        <script type="text/javascript" >
        
        if($.cookie('display')){
           view = $.cookie('display');
       }else{
           view = 'list';
       }
       if(view) display(view);  
       </script>
    </body>
</html>