<?php
include("requires/db.php");
include('requires/requireWeb.php');
?>
<?php
if(isset($_GET['pid'])){
    $pid = $_GET['pid'];
    $get_product = "select * from packages where pid='$pid'";
    $run_product= mysqli_query($connection, $get_product);
    $row_product= mysqli_fetch_array($run_product);
    $cat_t_id = $row_product['cat_t_id'];
    $package_title = $row_product['package_title'];
    $package_price = $row_product['package_price'];
    $package_desc = $row_product['package_desc'];
    $pro_img1 = $row_product['img1'];
    $pro_img2 = $row_product['img2'];
    $pro_img3 = $row_product['img3'];
    $get_p_cat = "select * from tour_categories where cat_t_id = '$cat_t_id'";
    $run_p_cat = mysqli_query($connection, $get_p_cat);
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    $cat_t_title = $row_p_cat['cat_t_title'];
}
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



    <div id="content">
        <!--content-->
        <div class="container">
            <!--container-->
            <div class="col-md-12">
                <!--col-md-12-->
                <ul class="breadcrumb">
                    <!--breadcrumb-->
                    <li><a href="index.php">Home</a></li>
                    <li><a href="packages.php">Packages</a></li>
                    <li><?php echo $package_title;?></li>
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
                <div class="row" id="productMain">
                    <!--row1-->
                    <div class="col-sm-6">
                        <!-- col-sm-6 Starts -->

                        <div id="mainImage">
                            <!-- mainImage Starts -->

                            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                <ol class="carousel-indicators">
                                    <!-- carousel-indicators Starts -->

                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>

                                </ol>
                                <!-- carousel-indicators Ends -->

                                <div class="carousel-inner">
                                    <!-- carousel-inner Starts -->

                                    <div class="item active">
                                        <center>
                                            <img src="admin_area/packages/package_images/<?php echo $pro_img1; ?>" class="img-responsive">
                                        </center>
                                    </div>

                                    <div class="item">
                                        <center>
                                            <img src="admin_area/packages/package_images/<?php echo $pro_img2; ?>" class="img-responsive">
                                        </center>
                                    </div>

                                    <div class="item">
                                        <center>
                                            <img src="admin_area/packages/package_images/<?php echo $pro_img3; ?>" class="img-responsive">
                                        </center>
                                    </div>

                                </div>
                                <!-- carousel-inner Ends -->

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                    <!-- left carousel-control Starts -->

                                    <span class="glyphicon glyphicon-chevron-left"> </span>

                                    <span class="sr-only"> Previous </span>

                                </a>
                                <!-- left carousel-control Ends -->

                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <!-- right carousel-control Starts -->

                                    <span class="glyphicon glyphicon-chevron-right"> </span>

                                    <span class="sr-only"> Next </span>

                                </a>
                                <!-- right carousel-control Ends -->

                            </div>

                        </div>
                        <!-- mainImage Ends -->

                    </div>
                    <!-- col-sm-6 Ends -->
                    
                    <div class="col-sm-6"><!--col-sm-6-->
                        <div class="box"><!--box-->
                           <h1 class="text-center"><?php echo $package_title; ?></h1>
                           <?php add_cart(); ?>
                            <form action="index.php?add_cart=<?php echo $pid; ?>" method="post" class="form-horizontal"><!--form-horizontal-->
                                <div class="form-group"><!--form-group-->
                                    <label class="col-md-5 control-label">Product Quantity</label>
                                    <div class="col-md-7"><!--col-md-7-->
                                       <select name="product_qty" class="form-control">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                       </select>
                                        
                                    </div><!--col-md-7 end-->
                                </div><!--form-group end-->
                                <div class="form-group"><!--form-group-->
                                    <label class="col-md-5 control-label">Product Size</label>
                                    <div class="col-md-7"><!--col-md-7-->
                                        <select name="product_size" class="form-control" >
                                            <option>Select a Size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>

                                        </select>
                                    </div><!--col-md-7 end-->
            
                                </div><!--form-group end-->
                                
                                <p class="price">$ <?php echo $package_price; ?></p>
                                <p class="text-center buttons"><!--text-center buttons-->
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-shopping-cart"></i>Add to Cart
                                    </button>
                                </p><!--text-center buttons end-->
                                
                            </form><!--form-horizontal end-->
                        </div><!--box end-->
                        
                        <div class="row" id="thumbs"><!--row-->
                            <div class="col-xs-4"><!--col-xs-4-->
                                <a href="#" class="thumb">
                                    <img src="admin_area/packages/package_images/<?php echo $pro_img1; ?>" alt="" class="img-responsive">
                                </a>
                            </div><!--col-xs-4 end-->
        <div class="col-xs-4"><!--col-xs-4-->
                                <a href="#" class="thumb">
                                    <img src="admin_area/packages/package_images/<?php echo $pro_img2; ?>" alt="" class="img-responsive">
                                </a>
                            </div><!--col-xs-4 end-->
                                    <div class="col-xs-4"><!--col-xs-4-->
                                <a href="#" class="thumb">
                                    <img src="admin_area/packages/package_images/<?php echo $pro_img3; ?>" alt="" class="img-responsive">
                                </a>
                            </div><!--col-xs-4 end-->
                        </div><!--row end-->
                    </div><!--col-sm-6 end-->
                    
                    

                </div>
                <!--row end-->
                <div class="box" id="details"><!--box-->
                    <p><!--p-->
                    <h4>Product Details</h4>
                    <p><?php echo $package_desc; ?></p>
                    <h4>Size</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul>
                    </p><!--p end-->
                    <hr>
                </div><!--box end-->
                <div id="row same-height-row"><!--row same-height-row-->
                    <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6-->
                       <div class="box same-height headline"><!--box same-height headline-->
                          <h3 class="text-center">You also like these Packages</h3>   
                       </div><!--box same-height headline end-->
                    </div><!--col-md-3 col-sm-6 end-->
                    
                    <?php
                    $get_products="select * from packages order by rand() LIMIT 0,3";
                    $run_products = mysqli_query($connection, $get_products);
                    while($row_products = mysqli_fetch_array($run_products)){
                        $pro_id = $row_products['pid'];
                        $pro_title = $row_products['package_title'];
                        $pro_price = $row_products['package_price'];
                        $pro_img1 = $row_products['img1'];
                        echo "
                        
                        <div class='center-responsive col-md-3 col-sm-6'>
                       <div class='product same-height'>
                           <a href='details.php?pro_id=$pid'><img src='admin_area/packages/package_images/$pro_img1' class='img-responsive'></a>
                           <div class='text'>
                               <h3><a href='details.php?pro_id=$pid'>$package_title</a></h3>
                               <p class='price'>$ $package_price</p>
                           </div>
                       </div>
                        
                    </div>
                        
                        
                        ";
                        
                    }
                    
                    
                    ?>
                    
            
                </div><!--row same-height-row end-->
           
            </div>
            <!--col-md-9 end-->




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
        
        <!--Google Map-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAot2fgi5npA_GhLlOr4-YAd4MQlSPp_yk"></script>
        <script src="js/map/map.js"></script>
        <!--Add Custom Js and JQuery-->
        <script src="js/custom.js"></script>
        <!--easing Jquery-->
        <script src="js/easing/jquery.easing.1.3.js"></script>
</body>

</html>