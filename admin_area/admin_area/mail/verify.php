<?php
require_once('connect.php');
$key = $_GET['key'];
$id = $_GET['id'];
$sql = "SELECT * FROM `users` WHERE id=$id AND verification_key = '$key' AND active=0";
$res = mysqli_query($connection, $sql);
$count = mysqli_num_rows($res);
if($count == 1){
    $usql = "UPDATE `users` SET active=1 WHERE id = '$id'";
    $ures  = mysqli_query($connection, $usql);
    if($ures){
        $smsg= "Account Active Successfully.";
    }else{
        $fmsg= "Account Activation Failed.";
    }
}else{
    $fmsg= "Not Found in database";
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
  <title>Hello Arab Dashboard</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>
  <div class="container">
   <?php if(isset($smsg)){?><div class="alert alert-success" role="alert">
   <?php echo $smsg; ?>
</div><?php } ?>
<?php if(isset($fmsg)){?><div class="alert alert-danger" role="alert">
   <?php echo $fmsg; ?>
</div><?php } ?>

  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
