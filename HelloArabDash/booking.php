<?php
session_start();
require_once('connect.php');
if(isset($_SESSION['email']) & !empty($_SESSION['email'])){
    /*$fname = $_SESSION['fname'];*/
    $email = $_SESSION['email'];
    /*table*/
    $sqlT ="SELECT * from `table_order` ORDER BY order_id DESC";
    $resT= mysqli_query($connection, $sqlT);

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
    <link rel="icon" href="../img/favicon.ico">
  <title>Hello Arab Tourism</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--Custom css-->
    <link href="css/custom.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <!--Datatable-->
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Hello Arab Tourism</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile">
          <a class="nav-link" href="profile.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Profile</span>
          </a>
        </li>
                     <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pacages">
          <a class="nav-link" href="packages.php">
            <i class="fa fa-fw fa-plane"></i>
            <span class="nav-link-text">Packages</span>
          </a>
        </li>             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Team">
          <a class="nav-link" href="team.php">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Team</span>
          </a>
        </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Team">
          <a class="nav-link" href="booking.php">
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
            <li><a href="profile.php">Manage Profile</a></li>
            <li><a href="update-password.php">Change Password</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
 <!--Start Design-->
    <?php
    $sql = "SELECT * from `users` WHERE email='$email'";
    $res= mysqli_query($connection, $sql);
    $r = mysqli_fetch_assoc($res);    
    ?>
     <script type="text/javascript">
            $(function () {
                $('#order_date').datetimepicker();
            });
        </script>
      <div class="content-wrapper">
    <div class="container-fluid">
    <?php
        if(isset($_GET["add"])){
                ?>
        <form method="post" id="invoice_form">
            <div class="table-responsive">
                <table class="table table-bordered">
                   <tr><td colspan="2" align="center"><img src="../img/logo.png" alt=""></td></tr>
                    <tr>
                        <td colspan="2" align="center"><h2 style="margin-top:10.5px">Create Invoice</h2></td>
                    </tr>
                    <tr>
                        <td colspan="2"><div class="row">
                            <div class="col-md-8">
                                To,<br><b>Receiver (BILL TO)</b><br>
                                <input type="text" name="order_receiver_name" id="order_receiver_name" class="form-control-input-sm" placeholder="Enter Receiver Name">
                            <textarea name="order_receiver_address" id="order_receiver_address"
                                class="form-control" placeholder="Enter Customer Adress"></textarea> 
                                <input type="text" name="order_date" id="order_date" class="form-control-input-sm" readonly placeholder="Select Invoice Date">                                
                         </div>
                         <div class="col-md-4">
                         Reverse Charges
                         <input type="text" name="order_no" id="order_no" class="form-control-input-sm" placeholder="Enter Invoice No.">
                         </div>
                        </div></td>
                    </tr>
                </table>
            </div>
        </form>
        <?php 
        }
   
        else{
            
        ?>
    
    
    <h3 class="text-center">Bookings Invoices</h3>
    <hr>
    <div align="right">
        <a href="booking.php?add=1" class="btn btn-info btn-xs">Create</a>
    </div>
    <br>
    <table id="data-table" class="table table-bordered table-striped table-responsive">
       <thead>
           <tr>
               <th>Invoice No.</th>
               <th>Invoice Date</th>
               <th>Receiver Name</th>
               <th>Invoice Total</th>
               <th>PDF</th>
               <th>Edit</th>
               <th>Delete</th>
               <th>Operate By</th>
           </tr>
       </thead>
         <?php
        
      
           while($row = mysqli_fetch_array($resT)){
{
                   
                   echo "<tr>";
                       echo " <td>".$row['order_no']."</td>";
                        echo "<td>".$row['order_date']."</td>";
                         echo " <td>".$row['order_receiver_name']."</td>";
                        echo "<td>AED ".$row['order_total_after_tax']."</td>";

                       echo " <td>"."<a href='booking.php?update=1&id=".$row['order_id']."'>PDF</a>"."</td>";
    echo " <td>"."<a href='booking.php?update=1&id=".$row['order_id']."'>"."<span class='fa fw fa-edit'></span>"."</a>"."</td>";
    echo " <td>"."<a href='booking.php?update=1&id=".$row['order_id']."'>"."<span class='fa fw fa-trash'></span>"."</a>"."</td>";
    echo "<td>".$row['operate_by']."</td>";
                        

                  echo "  </tr> ";
                    }

        }?>
    </table>
    <?php
        }?>
    
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
    <!--datatable-->
    
    <script src="js/sb-admin-charts.min.js"></script>
 
</body>

</html>
<script type="text/javascript">
$(document).ready(function(){
    var table = $('#data-table').DataTable();
});
</script>

