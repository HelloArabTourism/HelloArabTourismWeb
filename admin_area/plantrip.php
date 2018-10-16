<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
include('requires/requireWeb.php');
include('mail/config.php');

if(isset($_POST['submit'])){
    
    $descName =mysqli_real_escape_string($connection, $_POST['descName']);
    $tDateF =mysqli_real_escape_string($connection, $_POST['tDateF']);
    $d1 = date('Y-m-d',strtotime($tDateF));
    $tDateT =mysqli_real_escape_string($connection, $_POST['tDateT']);
    $d2 = date('Y-m-d', strtotime($tDateT));
    $cName =mysqli_real_escape_string($connection, $_POST['cName']);
    $email =mysqli_real_escape_string($connection, $_POST['email']);
    $cNum =mysqli_real_escape_string($connection,$_POST['cNum']);
    $adult = mysqli_real_escape_string($connection,$_POST['adult']);
    $child =mysqli_real_escape_string($connection,$_POST['child']);
    $infant = mysqli_real_escape_string($connection,$_POST['infant']);
    $service = implode(", ", $_POST['service']);
    $message =mysqli_real_escape_string($connection,$_POST['message']);
    $ptSql = "INSERT INTO `plantrip`(`tDesc`, `travelDateF`, `travelDateT`, `name`, `email`, `contactno`, `adult`, `child`, `infant`, `services`, `message`) VALUES ('$descName','$d1','$d2','$cName','$email','$cNum','$adult','$child','$infant','$service','$message')";
    $ptResult = mysqli_query($connection,$ptSql);

if($ptResult){
    
/*Email send*/

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $smtphost;  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $smtpuser;                 // SMTP username
    $mail->Password = $smtppass;                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, 'Plan Your Trip Inquiry');
    $mail->addAddress('info@helloarabtourism.com', 'Hello Arab Tourism');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Plan Your Trip Request';
    $mail->Body    = "
    <h3>Destination: $descName</h3>
      <h3>Travel Date From: $tDateF</h3>
      <h3>Travel Date To: $tDateT</h3>
      <h3>Customer Name: $cName</h3>
      <h3>Customer Email: $email</h3>
      <h3>Customer Contact: $cNum</h3>
      <h3>Adult: $adult</h3>
      <h3>Child: $child</h3>
      <h3>Infant: $infant</h3>
      <h3>Services: $service</h3>
      <h3>Message: $messsage</h3>";
    $mail->AltBody = 'Please Activate you account using this URL.';

    $mail->send();
    echo "<script>alert('Message has been sent successfully. Our agent will contact you soon. Thank you for contact us.')</script>";

echo "<script>window.open('plantrip.php','_self')</script>";
} catch (Exception $e) {
  
        echo "<script>alert('Message could not be sent. Mailer Error: '. $mail->ErrorInfo)</script>";

}


}else{
    echo mysqli_error($connection);
}

    
    
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
                    <li>Plan Your Trip</li>

                </ul>
                <!--breadcrumb end-->

            </div>
            <!--col-md-12 end-->

            <div class="col-md-12">
                <!--col-sm-6-->
                <div class="box">
                    <!--box-->
                    <h1 class="text-center">Plan Your Trip</h1>
                    <form action="plantrip.php" method="post">
                        <div class="form-group">
                            <label class="control-label">Enter Designation </label>
                            <input type="text" class="form-control" name="descName" placeholder="Required*" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Travel Date From </label>
                            <input type="date" class="form-control" name="tDateF" placeholder="Required*" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Travel Date To</label>
                            <input type="date" class="form-control" name="tDateT" placeholder="Required*" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" class="form-control" name="cName" placeholder="Required*" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Required*" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Contact No</label>
                            <input type="text" class="form-control" name="cNum" placeholder="Required*" required>
                        </div>
                        <div class="form-group form-inline">
                            <!--form-group-->
                            <label class="control-label">Adult: </label>

                            <select name="adult" class="form-control" required>
                                        <option value="0">0</option>
                                         <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                       </select>
                            <label class="control-label">Children: </label>

                            <select name="child" class="form-control">

                                         <option value="0">0</option>
                                         <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                       </select>
                            <label class="control-label">Infant: </label>

                            <select name="infant" class="form-control">

                                        <option value="0">0</option>
                                         <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                       </select>

                        </div>
                        

                        <label class="control-label">Select Services</label>
                        <div class="form-group row">
                        <div class="col-md-2">
                        <div class="form-check">
                            <input type="checkbox" name="service[]" class="form-check-input" value="Visa">
                            <label class="form-check-label"> Visa</label>
                        </div>
                        </div>
                        <div class="col-md-2">
                        <div class="form-check">
                            <input type="checkbox" name="service[]" class="form-check-input" value="Air Ticket">
                            <label class="form-check-label"> Air Ticket</label>
                        </div>
                        </div>
                         <div class="col-md-2">
                        <div class="form-check ">
                            <input type="checkbox" name="service[]" class="form-check-input" value="Airport Tranport">
                            <label class="form-check-label"> Airport Tranport</label>
                        </div>
                            </div>
                             <div class="col-md-2">
                        <div class="form-check ">
                            <input type="checkbox" name="service[]" class="form-check-input" value="Hotel">
                            <label class="form-check-label"> Hotel</label>
                        </div>
                            </div>
                             <div class="col-md-2">
                        <div class="form-check">
                            <input type="checkbox" name="service[]" class="form-check-input" value="Tour Guide">
                            <label class="form-check-label"> Tour Guide</label>
                        </div>
                            </div>
                             <div class="col-md-2">
                        <div class="form-check">
                            <input type="checkbox" name="service[]" class="form-check-input" value="Car Rent">
                            <label class="form-check-label"> Car Rent</label>
                        </div>
                        </div>
                        </div>


                        <div class="form-group">
                            <!--form-group-->
                            <label>Message</label>
                            <textarea class="form-control" name="message" placeholder="Optional"></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LdWCXQUAAAAAB6s-p6GfD5CpBcNYHFnUACJoGmY"></div>

                        <!--form-group end-->
                        <p class="text-center buttons">
                            <!--text-center buttons-->
                            <button class="btn btn-primary btn-lg" type="submit" name="submit">
                                        <i class="fa fa-envelope"></i> Send
                                    </button>
                        </p>
                        <!--text-center buttons end-->

                    </form>
                    <!--form-horizontal end-->
                </div>
                <!--box end-->
            </div>





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
        <script src='https://www.google.com/recaptcha/api.js'></script>


</body>

</html>
