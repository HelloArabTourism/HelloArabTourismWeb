<?php
session_start();
require_once('../connect.php');
if(isset($_SESSION['email']) & !empty($_SESSION['email'])){
    /*$fname = $_SESSION['fname'];*/
    $email = $_SESSION['email'];
}else{
    header('location: ../login.php');
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
        <link rel="icon" href="/img/favicon.png">
        <title>Hello Arab Tourism</title>
        <!-- Bootstrap core CSS-->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="../css/sb-admin.css" rel="stylesheet">
    </head>

    <body class="fixed-nav sticky-footer" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="../index.php">Hello Arab Tourism</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="../index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile">
                        <a class="nav-link" href="../profile.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Profile</span>
          </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pacages">
                        <a class="nav-link" href="../packages.php">
            <i class="fa fa-fw fa-plane"></i>
            <span class="nav-link-text">Packages</span>
          </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Team">
                        <a class="nav-link" href="../team.php">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Team</span>
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
                        <a href="#" class=" nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="mangNav">
                            <?php echo $email; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../profile.php">Manage Profile</a></li>
                            <li><a href="../update-password.php">Change Password</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--Start Design-->
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Example DataTables Card-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-minus-circle"></i> Deactive Package</div>

                </div>
            </div>

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