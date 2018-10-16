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
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Login</a></li>
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
                            <li><a href="index.php">Home</a></li>
                            <li><a  href="index.php#sOffers">Hello Offers</a></li>
                            <li><a href="packages.php">Packages</a></li>
                            <li><a href="index.php">Our Services</a></li>
                            <li><a  href="index.php#about">About Us</a></li>
                            <li><a href="index.php">Contact Us</a></li>
                            <li><a href="packages.php">Hello Abu Dhabi</a></li>
                            <li><a href="#">Hello Bosnia</a></li>
                            <li><a href="plantrip.php">Plan Your Trip</a></li>


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
                    <li>Packages</li>
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
                <?php
                if(!isset($_GET['t_cat'])){
                    if(!isset($_GET['cat'])){
                        echo " 
                        
                        <div class='box'>
                    <h1>Packages</h1>
                    <p>Affordable Packages With Best Service In Region</p>
                </div>
                        
                        ";
                    }
                }
                ?>
                
                <!--box end-->
                <div class="row">
                    <!--row-->
                     <?php
                    if(!isset($_GET['t_cat'])){
                        if(!isset($_GET['cat'])){
                            $per_page = 6;/*Product per page*/
                            if(isset($_GET['page'])){
                                $page = $_GET['page'];
                            }else{
                                $page=1;
                            }
                            $start_from = ($page-1) * $per_page;/*pages according to product*/
                            
                       $get_products="select * from packages order by 1 DESC LIMIT $start_from, $per_page";
                            $run_products = mysqli_query($connection, $get_products);
                            if($run_products){
                            while($row_products = mysqli_fetch_array($run_products)){
                                $pid = $row_products['pid'];
                                $p_title = $row_products['package_title'];
                                $p_price = $row_products['package_price'];
                                $p_img1 = $row_products['img1'];
                                echo "
                                <div class='col-md-4 col-sm-6 center-responsive'>
                                <div class='product'>
                                <a href='details.php?pid=$pid'>
                                <img src='admin_area/packages/package_images/$p_img1' class='img-responsive'>
                                </a>
                                <div class='text'>
                                <h3><a href='details.php?pro_id=$pid'>$p_title</a></h3>
                                <p class='price'>$ $p_price</p>
                                <p class='buttons'>
                                <a href='details.php?pid=$pid' class='btn btn-default'>View Details</a>
                                <a href='details.php?pid=$pid' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add To Cart</a>
                                </p>
                                </div>
                                </div>
                                
                                </div>
                                
                                
                                ";

                            }
                            }else{
                                
                            }
                    ?>
                </div>
                <!--row end-->
                <center>
                    <!--center-->
                    <ul class="pagination">
                        <!--pagination-->
                        <?php
                            $query = "select *from packages";
                            $result= mysqli_query($connection, $query);
                            $total_records = mysqli_num_rows($result);//counting data inside table
                            $total_pages = ceil($total_records / $per_page);
                            echo "
                            <li><a href='packages.php?page=1'>".'First Page'."</a></li>
                            ";
                            for($i=1; $i <= $total_pages; $i++){
                                echo "
                                
                                <li><a href='packages.php?page=".$i."'>".$i."</a></li>
                                ";
                            };
                            echo "
                            <li><a href='packages.php?page=$total_pages'>".'Last Page'."</a></li>
                            ";
                             }
                    }
                    
                            ?>

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
<a href="#home" id="back-to-top" class="btn btn-sm btn-blue btn-back-to-top smooth-scroll hidden-sm hidden-xs" title="home" role="button">
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
</body>

</html>