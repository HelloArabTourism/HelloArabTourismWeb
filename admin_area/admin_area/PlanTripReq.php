<?php
session_start();
include('includes/db.php');
if(isset($_SESSION['email']) & !empty($_SESSION['email'])){
    /*$fname = $_SESSION['fname'];*/
    $email = $_SESSION['email'];
    $result = mysqli_query($connection,"SELECT * FROM plantrip");

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
        <link rel="icon" href="../img/favicon.ico">
        <title>Hello Arab Tourism</title>
        <!-- Bootstrap core CSS-->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!--Material Icons-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Custom styles for this template-->
        <link href="../css/sb-admin.css" rel="stylesheet">
    </head>

    <body>
        
        <div class="content-wrapper">
            <div class="container-fluid">
            <h3 class="text-center">Plan You Trip Request</h3>
<div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Plan Trip ID</th>
                                    <th>Destination</th>
                                    <th>Travel Date From</th>
                                    <th>Travel Date TO</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Customer Contact</th>
                                    <th>Adult</th>
                                    <th>Child</th>
                                    <th>Infant</th>
                                     <th>Services</th>
                                    <th>Message</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                    while($row = mysqli_fetch_array($result))
{
                   echo "<tr>";
                        echo"<td>".$row['pTripID']."</td>";
                       echo " <td>".$row['tDesc']."</td>";
                        echo "<td>".$row['travelDateF']."</td>";
                         echo " <td>".$row['travelDateT']."</td>";
                        echo "<td>".$row['name']."</td>";
                       echo " <td>".$row['email']."</td>";
                        echo " <td>".$row['contactno']."</td>";
                        echo " <td>".$row['adult']."</td>";
                        echo " <td>".$row['child']."</td>";
                        echo " <td>".$row['infant']."</td>";
                        echo " <td>".$row['services']."</td>";
                        echo " <td>".$row['message']."</td>";
                        echo " <td>".$row['status']."</td>";



                  echo "  </tr> ";
                    }?>
                            </tbody>
                        </table>

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
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Page level plugin JavaScript-->
            <script src="../vendor/chart.js/Chart.min.js"></script>
            <script src="../vendor/datatables/jquery.dataTables.js"></script>
            <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="../js/sb-admin.min.js"></script>

            <!-- Custom scripts for this page-->
            <script src="../js/sb-admin-datatables.min.js"></script>
            <script src="../js/sb-admin-charts.min.js"></script>

    </body>

    </html>