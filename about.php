<?php
require_once('requires/contact_require.php');

 $sql = "SELECT * from `about_us`";
    $res= mysqli_query($connection, $sql);
    $r = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Title-->
    <title>Hello Arab Tourism</title>
    <!--Favicon-->
    <link rel="icon" href="img/favicon.ico">
    <!--Google Font Family-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <!--animate CSS-->
    <link rel="stylesheet" href="css/animate/animate.css">
    <!--magnific popup-->
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css">
    <!--owl carousel-->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".navbar-fixed-top" data-offset="65">
 
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-fixed-top">

            <div class="container-fluid">

                <div class="vesco-nav-wrapper">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#vesco-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                       </button>

                        <a class="navbar-brand" href="#home">
                            <img src="img/logo.png" alt="logo">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="vesco-menu">
                        <ul class="nav navbar-nav">
                            <li><a  href="index.php">Home</a></li>
                            <li><a  href="about.php">About Us</a></li>
                            <li><a  href="packages.php">Packages</a></li>
                            <li><a  href="abudhabi.php">Hello Abu Dhabi</a></li>
                            <li><a  href="bosnia.php">Hello Bosnia</a></li>
                            <li><a  href="index.php">Our Services</a></li>

                            <li><a class="smooth-scroll" href="#contact">Contact Us</a></li>


                        </ul>
                    </div>

                </div>

            </div>
        </nav>



    </header>
       
       
        <!--Home Section-->
    <section id="home-about">
        <!--set hero image-->
        <div id="home-cover-about" class="bg-parallax" "wow fadeIn">
                    <!--align vertical content in middle heading and button-->
            <div id="home-content-box-about">
                <div id="home-content-box-inner-about" class="text-center">
                    <div id="home-heading" class="animated zoomIn">
                        <h3>Hello Arab Tourism <br> About Us</h3>
                        
                    </div>
                    <a href="#services" id="top-to-back" class="btn btn-sm btn-blue btn-top-to-back smooth-scroll hidden-sm hidden-xs" title="home" role="button">
            <i class="fa fa-angle-down"></i>
        </a>
                </div>
            </div>
        </div>

    </section>
      <!--About Us-->
      <!--Services Section-->
    <section id="services">
        <div class="content-box">

            <div class="container">
                <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-md-12">
                        <p class="lead"><?php echo $r['about_us'];?></p>
                    </div>
     
                </div>

            </div>
        </div>

    </section>

       <!--Our Misson-->
      <!--Services Section-->
    <section id="services">
        <div class="content-box">
            <div class="content-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3> Our Mission </h3>
                <div class="content-title-underline">
                </div>
            </div>
            <div class="container">
                <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-md-12">
                        <p class="lead"><?php echo $r['our_mission'];?></p>
                    </div>
     
                </div>

            </div>
        </div>

    </section>
       <!--Why Us-->
      <!--Services Section-->
    <section id="services">
        <div class="content-box">
            <div class="content-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3> Why Us</h3>
                <div class="content-title-underline">
                </div>
            </div>
            <div class="container">
                <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-md-12">
                        <p class="lead"><?php echo $r['why_us'];?></p>
                    </div>
     
                </div>

            </div>
        </div>

    </section>
        <!--Team Section-->
    <section id="team">

        <div class="content-box">
            <div class="content-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3> Our Team </h3>
                <div class="content-title-underline">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="col-md-12">
                    <div id="team-members" class="owl-carousel owl-theme">

                        <div class="team-member">
                            <!--Single Team Member-->
                            <img src="img/team/1.PNG" class="img-responsive" alt="team-member">
                            <div class="team-member-info text-center">
                                <h4 class="team-member-name">Mohamed Al Hashmi</h4>
                                <h4 class="team-member-designation">CEO</h4>
                                <ul class="social-list">
                                    <li><a href="#" class="social-icon icon-gray"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon icon-gray"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon icon-gray"><i class="fab fa-twitter"></i></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="team-member">
                            <!--Single Team Member-->
                            <img src="img/team/1.PNG" class="img-responsive" alt="team-member">
                            <div class="team-member-info text-center">
                                <h4 class="team-member-name">Majed Al Hashmi</h4>
                                <h4 class="team-member-designation">General Manager</h4>
                                <ul class="social-list">
                                    <li><a href="#" class="social-icon icon-gray"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon icon-gray"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon icon-gray"><i class="fab fa-twitter"></i></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="team-member">
                            <!--Single Team Member-->
                            <img src="img/team/1.PNG" class="img-responsive" alt="team-member">
                            <div class="team-member-info text-center">
                                <h4 class="team-member-name">Ghassan Al Attas</h4>
                                <h4 class="team-member-designation">Regional Manager</h4>
                                <ul class="social-list">
                                    <li><a href="#" class="social-icon icon-gray"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon icon-gray"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon icon-gray"><i class="fab fa-twitter"></i></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="team-member">
                            <!--Single Team Member-->
                            <img src="img/team/1.PNG" class="img-responsive" alt="team-member">
                            <div class="team-member-info text-center">
                                <h4 class="team-member-name">Salman Shabbir</h4>
                                <h4 class="team-member-designation">Marketing & IT Manager</h4>
                                <ul class="social-list">
                                    <li><a href="#" class="social-icon icon-gray"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="social-icon icon-gray"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon icon-gray"><i class="fab fa-twitter"></i></a></li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </section>
 <section id="contact">
        <!-- Start contact Area -->
        <div class="contact-area">
            <div class="contact-inner area-padding">
                <div class="contact-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                <h3> Contact Us </h3>
                                <div class="content-title-underline"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fas fa-mobile"></i>
                                    <p>
                                        Call: <?php echo $phone;?><br>
                                        <span>Saturday-Thursday</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fas fa-envelope-open"></i>
                                    <p>
                                        Email: <?php echo $email;?><br>
                                        <span>Web: <?php echo $web;?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>
                                        Location: <?php echo $location;?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Start Google Map -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="map-container-2" class="z-depth-1" style="height: 500px"></div>
                            <!-- Start Map -->
                            <!--
              <div id="google-map" data-latitude="24.470070" data-longitude="54.342266"></div>
-->
                            <!-- End Map -->
                        </div>
                        <!-- End Google Map -->

                        <!-- Start  contact -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form contact-form">
                                <div id="sendmessage">Your message has been sent. Thank you!</div>
                                <div id="errormessage"></div>
                                <form action="contactform.php" method="post" role="form" class="contactForm">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                                        <div class="validation"></div>
                                    </div>
                                                                        <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
                                        <div class="validation"></div>
                                    </div>
                                                                        <div class="form-group">
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Contact Number" data-rule="phone" data-msg="Please enter your contact number" required/>
                                        <div class="validation"></div>
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                        <div class="validation"></div>
                                    </div>
                                    <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
                                </form>
                            </div>
                        </div>
                        <!-- End Left contact -->
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- End Contact Area -->

        <!-- Start Footer bottom Area -->
        <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                        <h2>Hello Arab Tourism</h2>
                                    </div>

                                    <p>Hello Arab Tourism is travel an tourism agency. We make travel remarkable . We provide our services in beautiful capital of United Arab Emirates Abu Dhabi city Arabic culture and modern skyscrapers and also in Bosnia &amp; Herzegovina.</p>
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="<?php echo $fbURL;?>" target="_blank"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $twURL;?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $snpURL;?>" target="_blank"><i class="fab fa-snapchat-ghost"></i></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $instaURL;?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $linkURL;?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $waURL;?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>information</h4>
                                    <p>
                                        Follow us on social media or contact us because we are here to make your travel remarkable.
                                    </p>
                                    <div class="footer-contacts">
                                        <p><span>Tel:</span> <?php echo $phone;?></p>
                                        <p><span>Email:</span> <?php echo $email;?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <!-- end single footer -->
                    </div>
                </div>
            </div>
        </footer>
            <a href="#home" id="back-to-top" class="btn btn-sm btn-blue btn-back-to-top smooth-scroll hidden-sm hidden-xs" title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>
   <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true">&times;</span><span class="sr-only">Close</span> </button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope-o"></i> Subscribe to our Mailing List</h4>
                </div>
                <!--Modal Header-->
                <div class="modal-body">
                    <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://helloarabtourism.us19.list-manage.com/subscribe/post?u=34aa1a5e20bbfaf9ecaf9671b&amp;id=9ea4588866" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe to our mailing list</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_34aa1a5e20bbfaf9ecaf9671b_9ea4588866" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
                </div>
                <!--Modal Body-->
            </div>
            <!--modal content-->
        </div>
        <!--modal-dialog-->
    </div>
    <!--End Model-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-white text-center">Copyright &copy; Hello Arab Tourism 2018</p>

        </div>
        <!-- /.container -->
    </footer>
<a href="#home-about" id="back-to-top" class="btn btn-sm btn-blue btn-back-to-top smooth-scroll hidden-sm hidden-xs" title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>
    <!--JQuery file-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--bootstrap JS-->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!--WoW js-->
    <script src="js/wow/wow.min.js"></script>
    <!--magnific popup js-->
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!--Owl Carousel JS-->
    <script src="js/owl-carousel/owl.carousel.min.js"></script>
    <!--Google Map-->
    <script src="<?php echo $mapURL;?>"></script>
    <script src="js/map/map.js"></script>
    <!--Add Custom Js and JQuery-->
    <script src="js/custom.js"></script>
    <!--easing Jquery-->
    <script src="js/easing/jquery.easing.1.3.js"></script>
</body>

</html>