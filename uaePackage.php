<?php
include('requires/requireWeb.php');

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
    <!-- Top Starts-->
    <div id="top">
        <!-- Container Start-->
        <div class="container">

            <!-- col-md-6 offer Starts-->
            <div class="col-md-4">
                <a href="index.php">
                            <img src="img/logo.png" alt="logo">
                        </a>
            </div>
            <!-- col-md-6 offer Ends-->

            <!--col-md-6 Starts-->
            <div class="col-md-8">
                <!--Menu-->
                <ul class="menu">
                    <li><a href="customer_register.php">Register</a></li>
                    <li><a href="checkout.php">Login</a></li>
                </ul>
                <ul class="menu">
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
                <!--Menu Ends-->
            </div>
            <!--col-md-6 end-->
        </div>
        <!-- Container End-->
    </div>
    <!-- Top Ends-->


    <header>
        <!--Navbar-->
        <nav class="navbar navbar-dark bg-primary">

            <div class="container-fluid">

                <div class="vesco-nav-wrapper">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#vesco-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                       </button>

                        
                    </div>

                    <div class="collapse navbar-collapse" id="vesco-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php#sOffers">Hello Offers</a></li>
                            <li><a href="packages.php">Packages</a></li>
                            <li><a href="index.php#services">Our Services</a></li>
                            <li><a href="index.php#about">About Us</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                            <li><a href="uaePackage.php">Hello Abu Dhabi</a></li>
                            <li><a href="bosnia.php">Hello Bosnia</a></li>
                            <li><a href="#">Plan Your Trip</a></li>


                        </ul>
                    </div>

                </div>

            </div>
        </nav>



    </header>


    <!-- Packages Section
    <section id="packages">

        <!--<div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3>United Arab Emirate Packages </h3>
                <div class="content-title-underline"></div>
            </div>

            <div class="container-fluid">
            <div class="row">
                                   <div class="col-md-2">
                        <a class="weatherwidget-io" href="https://forecast7.com/en/24d4554d38/abu-dhabi/" data-label_1="ABU DHABI" data-label_2="United Arab Emirates" data-theme="weather_one" >ABU DHABI United Arab Emirates</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
                    </div>
                <div class="col-md-7">
                    <img class="center-block" src="../img/Coming-soon.png" alt="Coming Soon">
                </div>
            </div>
                
            </div>
            <div class="cointainer">
                <div class="row">

                </div>
            </div>
        </div>
    </section>
    -->
    <div id="content">
        <!--content-->
        <div class="container">
            <!--container-->
            <div class="col-md-12">
                <!--col-md-12-->
                <ul class="breadcrumb">
                    <!--breadcrumb-->
                    <li><a href="index.php">Home</a></li>
                    <li>Abu Dhabi Packages</li>
                </ul>
                <!--breadcrumb end-->

            </div>
            <!--col-md-12 end-->

            <div class="col-md-3">
                <!--col-md-3-->
                <?php
                include("requires/sidebar.php");
                ?>

            </div>
            <!--col-md-3 ends-->

            <div class="col-md-9">
                <!--col-md-9-->
                <div class="box">
                    <!--box-->
                    <h1>Abu Dhabi Packages</h1>
                    <p>Affordable Packages With Best Service In Region</p>
                </div>
                <!--box end-->
                <div class="row">
                    <!--row-->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <!--col-md-4 col-sm-6 center-responsive-->
                        <div class="product">
                            <!--product-->
                            <a href="details.php">
                                <!--a-->
                                <img src="img/packages/1.jpg" alt="" class="img-responsive">
                                <div class="text">
                                    <!--text-->
                                    <h3>
                                        <a href="details.php">Abu Dhabi Tour 7 Days</a></h3>
                                    <p class="price">$2000</p>
                                    <p class="buttons">
                                        <a href="details.php" class="btn btn-default">View detail</a>
                                        <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Book Now</a>
                                    </p>
                                </div>
                                <!--text ends-->
                            </a>
                            <!--a end-->
                        </div>
                        <!--product end-->

                    </div>
                    <!--col-md-4 col-sm-6 center-responsive end-->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <!--col-md-4 col-sm-6 center-responsive-->
                        <div class="product">
                            <!--product-->
                            <a href="details.php">
                                <!--a-->
                                <img src="img/packages/1.jpg" alt="" class="img-responsive">
                                <div class="text">
                                    <!--text-->
                                    <h3>
                                        <a href="details.php">Abu Dhabi Tour 7 Days</a></h3>
                                    <p class="price">$2000</p>
                                    <p class="buttons">
                                        <a href="details.php" class="btn btn-default">View detail</a>
                                        <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Book Now</a>
                                    </p>
                                </div>
                                <!--text ends-->
                            </a>
                            <!--a end-->
                        </div>
                        <!--product end-->

                    </div>
                    <!--col-md-4 col-sm-6 center-responsive end-->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <!--col-md-4 col-sm-6 center-responsive-->
                        <div class="product">
                            <!--product-->
                            <a href="details.php">
                                <!--a-->
                                <img src="img/packages/1.jpg" alt="" class="img-responsive">
                                <div class="text">
                                    <!--text-->
                                    <h3>
                                        <a href="details.php">Abu Dhabi Tour 7 Days</a></h3>
                                    <p class="price">$2000</p>
                                    <p class="buttons">
                                        <a href="details.php" class="btn btn-default">View detail</a>
                                        <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Book Now</a>
                                    </p>
                                </div>
                                <!--text ends-->
                            </a>
                            <!--a end-->
                        </div>
                        <!--product end-->

                    </div>
                    <!--col-md-4 col-sm-6 center-responsive end-->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <!--col-md-4 col-sm-6 center-responsive-->
                        <div class="product">
                            <!--product-->
                            <a href="details.php">
                                <!--a-->
                                <img src="img/packages/1.jpg" alt="" class="img-responsive">
                                <div class="text">
                                    <!--text-->
                                    <h3>
                                        <a href="details.php">Abu Dhabi Tour 7 Days</a></h3>
                                    <p class="price">$2000</p>
                                    <p class="buttons">
                                        <a href="details.php" class="btn btn-default">View detail</a>
                                        <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Book Now</a>
                                    </p>
                                </div>
                                <!--text ends-->
                            </a>
                            <!--a end-->
                        </div>
                        <!--product end-->

                    </div>
                    <!--col-md-4 col-sm-6 center-responsive end-->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <!--col-md-4 col-sm-6 center-responsive-->
                        <div class="product">
                            <!--product-->
                            <a href="details.php">
                                <!--a-->
                                <img src="img/packages/1.jpg" alt="" class="img-responsive">
                                <div class="text">
                                    <!--text-->
                                    <h3>
                                        <a href="details.php">Abu Dhabi Tour 7 Days</a></h3>
                                    <p class="price">$2000</p>
                                    <p class="buttons">
                                        <a href="details.php" class="btn btn-default">View detail</a>
                                        <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Book Now</a>
                                    </p>
                                </div>
                                <!--text ends-->
                            </a>
                            <!--a end-->
                        </div>
                        <!--product end-->

                    </div>
                    <!--col-md-4 col-sm-6 center-responsive end-->
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <!--col-md-4 col-sm-6 center-responsive-->
                        <div class="product">
                            <!--product-->
                            <a href="details.php">
                                <!--a-->
                                <img src="img/packages/1.jpg" alt="" class="img-responsive">
                                <div class="text">
                                    <!--text-->
                                    <h3>
                                        <a href="details.php">Abu Dhabi Tour 7 Days</a></h3>
                                    <p class="price">$2000</p>
                                    <p class="buttons">
                                        <a href="details.php" class="btn btn-default">View detail</a>
                                        <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Book Now</a>
                                    </p>
                                </div>
                                <!--text ends-->
                            </a>
                            <!--a end-->
                        </div>
                        <!--product end-->

                    </div>
                    <!--col-md-4 col-sm-6 center-responsive end-->
                </div>
                <!--row end-->
                <center>
                    <!--center-->
                    <ul class="pagination">
                        <!--pagination-->
                        <li><a href="shop.php">First Page</a></li>
                        <li><a href="shop.php">1</a></li>
                        <li><a href="shop.php">2</a></li>
                        <li><a href="shop.php">3</a></li>
                        <li><a href="shop.php">4</a></li>
                        <li><a href="shop.php">5</a></li>
                        <li><a href="shop.php">Last Page</a></li>

                    </ul>
                    <!--pagination end-->
                </center>
                <!--center end-->

            </div>
            <!--col-md-9 ends-->

        </div>
        <!--container ends-->

    </div>
    <!--content ends-->


    <!--Footer-->
    <?php
            include("footer.php");
            
            ?>
        <a href="#box" id="back-to-top" class="btn btn-sm btn-blue btn-back-to-top smooth-scroll hidden-sm hidden-xs" title="home" role="button">
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAot2fgi5npA_GhLlOr4-YAd4MQlSPp_yk"></script>
        <script src="js/map/map.js"></script>
        <!--Add Custom Js and JQuery-->
        <script src="js/custom.js"></script>
        <!--easing Jquery-->
        <script src="js/easing/jquery.easing.1.3.js"></script>


        <script type="text/javascript">
            TranslateIt.init();
        </script>
</body>

</html>