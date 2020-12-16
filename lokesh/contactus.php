<?php include './include/header.php';?>
<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Page</a></li>
        <li><a href="#">Contact us</a></li>
    </ul>
<div class="content w-100"> 
    <h3 class="text-center text-uppercase"> Contact Us</h3>
<P class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex consequuntur ut eligendi excepturi odio cum et, maiores fuga doloribus labore, optio molestiae harum quisquam qui,<br> maxime ipsum corporis ab! Pariatur vel blanditiis ipsam ipsa?</P>
</div>
    
    <div class="row">

        <div id="content" class="col-sm-12">


            <div class="info-contact clearfix">
                <div class="col-lg-6 col-sm-6 col-xs-12 contact-form">
                    <div class="submit-comment module">
                        <h3 class="modtitle2">
                            <span>Leave us a Message</span>
                        </h3>
                        <form action="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="name">Enter Your Name*</label>
                                    <input type="text" class="form-control" placeholder="Your name">
                                </div>
                                <div class="col-lg-6">
                                <label for="name">Enter Your Email*</label>
                                    <input type="text" class="form-control " placeholder="Your mail">
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-lg-6">
                                     <label for="name">Enter Your Phone*</label>
                                    <input type="text" class="form-control" placeholder="Your phone">
                                </div>
                                <div class="col-lg-6">
                                <label for="name">Enter Your Subject*</label>
                                    <input type="text" class="form-control" placeholder="Your subject">
                                </div>

                                <div class=" col-md-12 textarea">
                                <label for="name">Enter Your Message</label>
                                <textarea class="form-control" rows="15" id="comment"
                                    placeholder="Your Messager..."></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-group">Send Messager*</button>
                            </div>
                            </div>

                           

                        </form>

                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12 info-store">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=maisha%20infotech%20nsp&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                href="https://fmovies2.org">fmovies</a></div>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 600px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 500px;
                                width: 600px;
                            }
                        </style>
                    </div>


                    <div class="">
                        <div class="name-store module">
                            <h3 class="modtitle2">
                                <span>welcome to Delhi </span>
                            </h3>
                        </div>
                        <address>
                            <div class="comment">
                                Maecenas euismod felis et purus consectetur, quis fermentum velition. Aenean egestas
                                quis turpis vehicula.Maecenas euismod felis et purus consectetur, quis fermentum
                                velition.

                            </div>
                            <div class="address clearfix form-group">
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="text">My Company, 42 avenue des Champs Elysées 75000 Paris France</div>
                            </div>
                            <div class="mail clearfix form-group">
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="text">Email : support@domaincom</div>
                            </div>
                            <div class="phone form-group">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="text">Phone : 0123456789</div>
                            </div>

                        </address>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- //Main Container -->
<?php include './include/footer.php';?>