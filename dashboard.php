<?php
session_start();
require_once('connect.php');
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
    <link rel="icon" href="img/favicon.ico">
  <title>Hello Arab Tourism</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
    <!--Custom css-->
    <link href="css/styles.css" rel="stylesheet">
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
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile">
          <a class="nav-link" href="profile/profile.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Profile</span>
          </a>
        </li>
                     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pacages">
          <a class="nav-link" href="packages/packages.php">
            <i class="fa fa-fw fa-plane"></i>
            <span class="nav-link-text">Packages</span>
          </a>
        </li>             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Team">
          <a class="nav-link" href="team/team.php">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Team</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Team">
          <a class="nav-link" href="booking/booking.php">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Booking</span>
          </a>
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
            <li><a href="profile/profile.php">Manage Profile</a></li>
            <li><a href="update-password.php">Change Password</a></li>
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
        <img alt="User Pic" src="<?php echo $r['img_location']; ?>" id="profileimage" class="img-circle img-responsive" height="200" width="200">
        <h4 class="card-title"><?php echo $r['name'];?></h4>
                <h4 class="card-text"><?php echo $r['email'];?></h4>
        <a class="btn btn-primary btn-sm" href="profile/profile.php">Manage Account</a>
    </div>
</div>
             <br>
         </div>
     </div>
      </div>
  </section><br><br>
              <section>
                          <div class="container-fluid">
                              <h1 class="text-center text-primary">Packages</h1>
                <br>
                <div class="row justify-content-md-center">
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-plus"></i>
                                </div>
                                <div class="mr-5">Add Package</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="packages/cpackages.php">
              <span class="float-left">Click Here</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
                        </div>
                    </div><br>


                </div>
                                              <div class="row justify-content-md-center">
                                                                                         <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-eye"></i>
                                </div>
                                <div class="mr-5">View All Package</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="packages/vpackages.php">
              <span class="float-left">Click Here</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
                        </div>
                    </div>
                              </div>
                
            </div>
              </section>
              
              <section>
              
              <br><br>
                          <div class="container-fluid">
                              <h1 class="text-center text-primary">Team</h1>
                <br>
                <div class="row justify-content-md-center">
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-plus"></i>
                                </div>
                                <div class="mr-5">Add Team Member</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Click Here</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
                        </div>
                    </div>
                                       
                </div>
                      <div class="row justify-content-md-center">
                          <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-eye"></i>
                                </div>
                                <div class="mr-5">View All Team Members</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Click Here</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
                        </div>
                    </div>

                          
                              </div>
                
            </div>
              
              </section>
       <section>
              
              <br><br>
                          <div class="container-fluid">
                              <h1 class="text-center text-primary">Office Contact Details</h1>
                <br>
                <div class="row justify-content-md-center">
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-plus"></i>
                                </div>
                                <div class="mr-5">Add Contact</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Click Here</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
                        </div>
                    </div>
                                       
                </div>
                      <div class="row justify-content-md-center">
                          <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-eye"></i>
                                </div>
                                <div class="mr-5">View Contact</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Click Here</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
                        </div>
                    </div>

                          
                              </div>
                
            </div>
              
              </section>
      
       <section>
              
              <br><br>
                          <div class="container-fluid">
                              <h1 class="text-center text-primary">Services Details</h1>
                <br>
                <div class="row justify-content-md-center">
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-plus"></i>
                                </div>
                                <div class="mr-5">Add Services</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Click Here</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
                        </div>
                    </div>
                                       
                </div>
                      <div class="row justify-content-md-center">
                          <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-eye"></i>
                                </div>
                                <div class="mr-5">View Services</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Click Here</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
                        </div>
                    </div>

                          
                              </div>
                
            </div>
              
              </section>
              <section>
              
              <br><br>
                          <div class="container-fluid">
                              <h1 class="text-center text-primary">About Us Details</h1>
                <br>
                <div class="row justify-content-md-center">
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-plus"></i>
                                </div>
                                <div class="mr-5">Add About Us Details</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Click Here</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
                        </div>
                    </div>
                                       
                </div>
                      <div class="row justify-content-md-center">
                          <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-eye"></i>
                                </div>
                                <div class="mr-5">View About Us Details</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Click Here</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
                        </div>
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
