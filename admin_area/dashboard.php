<?php
session_start();
include('includes/db.php');
if(isset($_SESSION['email']) & !empty($_SESSION['email'])){
    $email = $_SESSION['email'];
}else{
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
      <!--Favicon-->
    <link rel="icon" href="../../img/favicon.ico">
  <title>Hello Arab Tourism</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="vendor/sb-admin.css" rel="stylesheet">
    <!--Custom css-->
    <link href="../css/styles.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer" id="page-top">

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="dashboard.php">Hello Arab Tourism</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>

                     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-plane"></i>
            <span class="nav-link-text">Package</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                       <li>
              <a href="packages/insert_packages.php">Upload Package</a>
            </li>
                       

          </ul>
        </li>
   
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Team">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Booking</span>
          </a>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Web Content">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#webContent" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-globe"></i>
            <span class="nav-link-text">Web Content</span>
          </a>
          <ul class="sidenav-second-level collapse" id="webContent">
                       <li>
              <a href="web-content/aboutus_cms.php">About Us</a>
            </li>
                        <li>
              <a href="web-content/contactUs.php">Contact Us</a>
            </li>
            <li>
              <a href="web-content/team.php">Team</a>
            </li>

          </ul>
        </li>
      </ul>
     <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
<li class="dropdown">
          <a href="#" class=" nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="mangNav"><?php echo $email; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Manage Profile</a></li>
            <li><a href="#">Change Password</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
          <div class="content-wrapper">
  <section id="welcome">
         <div class="container-fluid">
             <?php
    $sql = "SELECT * from `users` WHERE email='$email'";
    $res= mysqli_query($connection, $sql);
    $r = mysqli_fetch_assoc($res);
    ?>
    
     <div class="row">
         <div class="col-md-12">
                          <div class="card text-center">
    <div class="card-header success-color white-text">
                     <h1 class="text-center text-responsive text-primary">Welcome to Hello Arab Tourism System </h1>

    </div>
    <div class="card-body">
        <img alt="User Pic" src="<?php echo $r['img_location']; ?>" id="profileimage" class="rounded-circle img-responsive" height="150" width="150">
        <h4 class="card-title"><?php echo $r['name'];?></h4>
                <h4 class="card-text"><?php echo $r['email'];?></h4>
        <a class="btn btn-primary btn-sm" href="#">Manage Account</a>
    </div>
</div>
             <br>
         </div>
     </div>
      </div>
  </section>

              
             
    <footer class="sticky-footer">
      <div class="container-fluid">
        <div class="text-center">
          <small>Copyright © Hello Arab Tourism 2018</small>
        </div>
      </div>
    </footer>
    </div>
 
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
 
</body>

</html>
