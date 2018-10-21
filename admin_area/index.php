<?php

include('requires/requireWeb.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
    <script>
        (function(a, s, y, n, c, h, i, d, e) {
            s.className += ' ' + y;
            h.start = 1 * new Date;
            h.end = i = function() {
                s.className = s.className.replace(RegExp(' ?' + y), '')
            };
            (a[n] = a[n] || []).hide = h;
            setTimeout(function() {
                i();
                h.end = null
            }, c);
            h.timeout = c;
        })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
            'GTM-P7PNZ6M': true
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125060512-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        ga('require', 'GTM-P7PNZ6M');
        gtag('config', 'UA-125060512-1');
    </script>

    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="keywords" content="helloarab, hello arab, tourism company near me, best tourism company in uae, best tourism company in abu dhabi, tour abu dhabi
,tour abu dhabi from dubai,tour abu dhabi 2018,visit abu dhabi,visit abu dhabi places,city tour abu dhabi,tour abu dhabi and dubai,tour a abu dhabi,tour abu dhabi bus,ride abu dhabi bike shop,isit abu dhabi.com,abu dhabi city tour,our abu dhabi dubai,tour de abu dhabi 2018,tour d'abu dhabi,tour d'abu dhabi classement,tour d'abu dhabi 2017,tour d'abu dhabi 2018 profil,tour d'abu dhabi profil,tour d'abu dhabi cyclisme,tour d'abu dhabi wiki,cyclisme tour de abu dhabi 2018,plus haute tour d'abu dhabi,visit abu dhabi emirates palace,city tour abu dhabi from dubai,day trip abu dhabi from dubai,visit abu dhabi grand mosque,tour to abu dhabi grand mosque,tour in abu dhabi,abu dhabi tour in dubai,tour abu dhabi mosque,guns n roses tour 2018 abu dhabi,tour abu dhabi to dubai,visit abu dhabi visa,y tower abu dhabi,y tower abu dhabi lulu,y tower abu dhabi location,y tower abu dhabi rent,y tower abu dhabi location map,y tower abu dhabi al nahyan,y tower abu dhabi uae,y tower muroor road abu dhabi,bloomsbury abu dhabi y tower,y tower residence abu dhabi,tour abu dhabi 2018 stage 1,1 day tour abu dhabi,formula 1 tour abu dhabi,1 day abu dhabi tour from dubai,tour abu dhabi 2017,european tour abu dhabi 2018,tour abu dhabi cycling 2018,tour abu dhabi stage 2,tour abu dhabi stage 3,visit visa abu dhabi 30 days,tour abu dhabi stage 4,abu dhabi 4wd tour,tour abu dhabi stage 5,stage 5 tour abu dhabi,6 emirates tour from abu dhabi,24/7 tours abu dhabi,7 emirates tour from abu dhabi,visit visa abu dhabi 90 days, Hello Arab, Hello Arab Tourism, hello arab, helloarab, hello arab tourism, helloarabtourism,tour abu dhabi,abu dhabi tour 2016,dubai tour,desert safari abu dhabi,tour abu dhabi 2016,abu dhabi city tour,abu dhabi hotels,excursion abu dhabi,hotel abu dhabi,dubai trip,abu dhabi tour,tour dubai,excursion dubai abu dhabi,abu dhabi tour from dubai,big bus abu dhabi,desert safari uae,abu tour,what to do in abu dhabi,things to do in abu dhabi,abu dhabi sightseeing,safari abu dhabi,abu dhabi 2016,places to visit in abu dhabi,big bus tour abu dhabi,emirates hotel abu dhabi">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Hello Arab Tourism</title>
    <!--Favicon-->
    <link rel="icon" href="img/favicon.ico">
    <!--Google Font Family-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!--font-awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!--Bootstrap CSS-->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
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

<body data-spy="scroll" data-target=".navbar-fixed-top" data-offset="65" tracingsrc="img/logo.png" tracingopacity="100">

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
                            <li><a class="smooth-scroll" href="#home">Home</a></li>
                            <li><a class="smooth-scroll" href="#sOffers">Hello Offers</a></li>
                            <li><a class="smooth-scroll" href="#packages">Packages</a></li>
                            <li><a class="smooth-scroll" href="#services">Our Services</a></li>
                            <li><a class="smooth-scroll" href="#about">About Us</a></li>
                            <li><a class="smooth-scroll" href="#contact">Contact Us</a></li>
                            <li><a class="smooth-scroll" href="#gallary">Gallary</a></li>
                            <li><a href="uaePackage.php">Hello Abu Dhabi</a></li>
                            <li><a href="bosnia.php">Hello Bosnia</a></li>
                            <li><a href="plantrip.php">Plan Your Trip</a></li>


                        </ul>
                    </div>

                </div>

            </div>
        </nav>


    </header>
    <!--Home Section-->
    <section id="home">
        <!--set hero image-->
        <div id="home-cover" class="bg-parallax" "wow fadeIn">



            <!--align vertical content in middle heading and button-->
            <div id="home-content-box">
                <div id="home-content-box-inner" class="text-center">
                    <div id="home-heading" class="animated zoomIn">
                        <h3>Hello Arab Tourism <br><small> Make Travel Remarkable!<small></h3>
                           <a href="#sOffers" id="top-to-back" class="btn btn-sm btn-blue1 btn-top-to-back smooth-scroll " title="home" role="button">
            <i class="fa fa-angle-down"></i>
        </a>
                    </div>
<!--                    <div class="searchbox">
                        <div id="searchbox-heading" class="animated zoomIn">
                        <h5>Select Your Package</h5>
                        </div>
                        <div class="searchbox-body" class="animated zoomIn">
                                              </div>
                    <form class="form-inline">
                        <div class="form-group">
                            <input type="text" name="country" placeholder="Country">
                        </div>
                         <div class="form-group">
                            <input type="text" name="city" placeholder="City">
                        </div>
                         <div class="form-group">
                            <input type="date" name="depart-date" placeholder="Depart date">
                        </div>
                         <div class="form-group">
                            <input type="number" name="budget" placeholder="Budget">
                        </div>
                    </form>  
                        </div>-->
<br>
                   
           
                </div>

            </div>


        </div>

    </section>
      <!--Opt in-->
    <section id="optin">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p class="lead"><strong>Subscribe to our mailing list.</strong> We'll send our special offers.</p>
                </div>
                <!--col-->
                <div class="col-sm-4">
                    <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">Click here to subscribe</button>
                </div>
                <!--Col-->
            </div>
            <!--Row-->
        </div>
        <!--container-->
    </section>
    <!--End Opt in-->
    
    <!-- Packages Section -->
    <section id="sOffers">

 
   
  
   
   
    
            
      <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3> Hello Offers </h3>
                <div class="content-title-underline"></div>
            </div>

            <div class="container-fluid">

                <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                   
                    
                             <?php
      
      $get_products="select * from packages";
                            $run_products = mysqli_query($connection, $get_products);
                               if(mysqli_num_rows($run_products) == 0){
                                    echo "
                                    <div class='col-md-4 col-md-offset-4 center-responsive'>
                                    <img src='img/Coming-soon.png' class='img-responsive'>
                                    </div>
                                    
                                    
                                    ";
                                }else{
                            while($row_products = mysqli_fetch_array($run_products)){
                            
                                $pid = $row_products['pid'];
                                $p_title = $row_products['package_title'];
                                $p_price = $row_products['package_price'];
                                $p_img1 = $row_products['img1'];
                                echo "
                                <div class='col-md-3 col-sm-4'>
                                <div class='product'>
                            
                            <a href='details.php?pid=$pid'>
                                <img src='admin_area/packages/package_images/$p_img1'  class='img-responsive'>
                                <div class='text'>
                                    
                                    <h3>
                                        <a href='details.php?pid=$pid'>$p_title</a></h3>
                                    <p class='price'>$ $p_price</p>
                                    <p class='buttons'>
                                        <a href='details.php?pid=$pid' class='btn btn-default'>View detail</a>
                                        <a href='details.php?pid=$pid' class='btn btn-primary'><i class='fa fa-shopping-cart'></i> Book Now</a>
                                    </p>
                                </div>
                            </a>
                        </div>
                      
            
           </div>
                                
                                ";
                            }
                               }
      
      
      ?>

                  
                
                </div>
                   <!-- <div id="package-btn" class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">

                        <a class="btn btn-lg btn-general btn-blue " href="packages.php" role="button">All Packages</a>
                    </div>-->
            </div>
        </div>
        <!-- End Content Box -->
    </section>

<!-- Packages Section -->
    <section id="packages">

        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3> Packages </h3>
                <div class="content-title-underline"></div>
            </div>

            <div class="container-fluid">

                <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                   
                    <div class="col-md-3 col-sm-4">
                            <a href="packages.php">
                                <img src="img/packages/1.jpg" class="img-responsive" alt="Work">
                                <h3 class="text-center">Abu Dhabi Packages</h3>
                                
                            </a><br>
                                                    <a class="btn btn-lg btn-general btn-blue center-block " href="packages.php" role="button">All Packages</a>

                    </div>
                    <div class="col-md-3 col-sm-4">
                            <a href="packages.php">
                                <img src="img/packages/d1.jpg" class="img-responsive" alt="Work">
                                <h3 class="text-center">Dubai Packages</h3>
                            </a><br>
                                                    <a class="btn btn-lg btn-general btn-blue center-block " href="packages.php" role="button">All Packages</a>
                                                    

                        </div>
                        <div class="col-md-3 col-sm-4">
                            <a href="packages.php">
                                <img src="img/packages/f1.jpg" class="img-responsive" alt="Work">
                                <h3 class="text-center">Other Emirates States Packages</h3>
                            </a><br>
                                                    <a class="btn btn-lg btn-general btn-blue center-block " href="packages.php" role="button">All Packages</a>
                                                    

                        </div>
                         <div class="col-md-3 col-sm-4">
                            <a href="packages.php">
                                <img src="img/packages/14.jpg" class="img-responsive" alt="Work">
                                <h3 class="text-center">Hello Special Packages</h3>
                            </a><br>
                                                    <a class="btn btn-lg btn-general btn-blue center-block " href="packages.php" role="button">All Packages</a>
                                                    

                        </div>
                    
                   
                </div>
                   <!-- <div id="package-btn" class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">

                        <a class="btn btn-lg btn-general btn-blue " href="packages.php" role="button">All Packages</a>
                    </div>-->
            </div>
        </div>
        <!-- End Content Box -->
    </section>

    <!--Services Section-->
    <section id="services">
        <div class="content-box">
            <div class="content-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3> Services </h3>
                <div class="content-title-underline">
                </div>
            </div>
            <div class="container">
                <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <i class="fas fa-plane fa-3x"></i>
                            </div>
                            <div class="service-item-title">
                                <h3>Air Ticketing</h3>
                            </div>
                            <div class="service-item-desc">
                                <p>Hello Arab Tourism make your travel remarkable. We provide low fare airline tickets across the globe.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <i class="fab fa-tripadvisor fa-3x"></i>
                            </div>
                            <div class="service-item-title">
                                <h3>Tour Counsling</h3>
                            </div>
                            <div class="service-item-desc">
                                <p>
                                    Hello Arab Tourism make your travel remarkable. We provide best tour packages across the globe but especially for Bosnia & Herzegovina and United Arab Emirates.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <i class="fas fa-hotel fa-3x"></i>
                            </div>
                            <div class="service-item-title">
                                <h3>Hoteling</h3>
                            </div>
                            <div class="service-item-desc">
                                <p>Hello Arab Tourism make your travel remarkable. We provide low fare accomodation across the globe. We care about your comfort.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <i class="fas fa-car fa-3x"></i>
                            </div>
                            <div class="service-item-title">
                                <h3>Car Rental</h3>
                            </div>
                            <div class="service-item-desc">
                                <p>Hello Arab Tourism make your travel remarkable. We provide low fare rent a car service across the globe.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <i class="fas fa-users fa-3x"></i>
                            </div>
                            <div class="service-item-title">
                                <h3>Tour Guide</h3>
                            </div>
                            <div class="service-item-desc">
                                <p>Hello Arab Tourism make your travel remarkable. We provide tour guide service across the globe.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item">
                            <div class="service-item-icon">
                                <i class="fas fa-umbrella-beach fa-3x"></i>
                            </div>
                            <div class="service-item-title">
                                <h3>Activities</h3>
                            </div>
                            <div class="service-item-desc">
                                <p>Hello Arab Tourism make your travel remarkable. We care about our customer we make each and every second of our customer remarkable.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </section>

    <!--About Section-->
    <section id="about">
        <!--About right side diagonal BG parallax-->
        <div id="about-bg-diagonal" class="bg-parallax">


        </div>

        <!--About left side with ccontent-->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div id="about-content-box">
                        <div id="about-content-box-outer">
                            <div id="about-content-box-inner">
                                <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                    <h3> About Us </h3>
                                    <div class="content-title-underline">
                                    </div>
                                </div>
                                <div id="about-desc" class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                    <p><?php echo $aboutUs;?></p>
                                </div>
                                <div id="package-btn" class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">

                                    <a class="btn btn-lg  btn-general btn-blue" href="about.php" role="button">More Details</a>
                                </div>


                            </div>
                        </div>


                    </div>



                </div>
            </div>



        </div>
    </section>

    
   <!--Gallary-->
<br>
       <section id="gallary">
        <div class="container">
             <div class="content-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <h3> Gallary </h3>
                <div class="content-title-underline">
                </div>
            </div>
      	<div class="row">
		<div class="row">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/packages/1.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/packages/1.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/packages/2.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/packages/2.jpg"
                         alt="Another alt text">
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/packages/3.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/packages/3.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                   data-image="img/packages/4.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/packages/4.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/packages/5.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/packages/5.jpg"
                         alt="Another alt text">
                </a>
            </div>



            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/packages/6.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/packages/6.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/packages/7.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/packages/7.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/packages/8.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/packages/8.jpg"
                         alt="Another alt text">
                </a>
            </div>



            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/packages/9.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/packages/9.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/packages/10.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/packages/10.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/packages/11.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/packages/11.jpg"
                         alt="Another alt text">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                   data-image="img/packages/12.jpg"
                   data-target="#image-gallery">
                    <img class="img-thumbnail"
                         src="img/packages/12.jpg"
                         alt="Another alt text">
                </a>
            </div>
        </div>


        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
	</div>
        </div>
    </section>

<!--Footer-->
<?php
            include("footer.php");
            
            ?>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
    </script>
</body>

</html>




   
   