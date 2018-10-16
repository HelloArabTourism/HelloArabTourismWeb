<?php
session_start();
include('includes/db.php');
if(isset($_SESSION['email']) & !empty($_SESSION['email'])){

     header('location: dashboard.php');
}
if(isset($_POST) & !empty($_POST)){
$email =mysqli_real_escape_string($connection, $_POST['email']);
$password = md5($_POST['password']);
    $sql = "SELECT * FROM `users` WHERE `email`= '$email' AND `password`= '$password' AND `active`= 1";
    $result = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
       $_SESSION['email'] = $email;
        
        header('location: dashboard.php');

    }else{
    $fmsg="User doesn't exist or your account is not activate.";
    }

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
  <title>Hello Arab Dashboard</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="vendor/sb-admin.css" rel="stylesheet">
</head>

<body>
  <div class="container">
         <?php if(isset($smsg)){?><div class="alert alert-success" role="alert">
   <?php echo $smsg; ?>
</div><?php } ?>
<?php if(isset($fmsg)){?><div class="alert alert-danger" role="alert">
   <?php echo $fmsg; ?>
</div><?php } ?>
    <div class="card card-login mx-auto mt-5">
        
      <div class="card-header">
                <img src="../img/logo.png"><br>

          Login</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password" required>
          </div>

          <button class="btn btn-primary btn-block" href="dashboard.php" type="submit">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
       <footer class="sticky-footer">
      <div class="container-fluid">
        <div class="text-center">
          <small>Copyright © Hello Arab Tourism 2018</small>
        </div>
      </div>
    </footer>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
