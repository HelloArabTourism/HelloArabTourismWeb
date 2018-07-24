<?php
        //Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require_once('connect.php');
include('config.php');
  if(isset($_POST) & !empty($_POST)){
    $input = $_POST['email'];
    $pass = rand(999, 99999);
    $sql = "SELECT * FROM `users` WHERE `email`='$input' ";
    
    $res = mysqli_query($connection, $sql);
    
    $count = mysqli_num_rows($res);
    if($count == 1){
      
      
      $r = mysqli_fetch_assoc($res);
      //$password = $r['password'];
      $email = $r['email'];

     $usql = "UPDATE `users` SET password=" . md5($pass) . ", forgot_status=0 WHERE email='$email'";
    $result = mysqli_query($connection, $usql);
      if($result){
       

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
    $mail->setFrom('accounts@helloarabtourism.com', 'Hello Arab Tourism');
    $mail->addAddress($email, 'Hello Arab Tourism');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your New Password(Hello Arab Tourism)';
    $mail->Body    = "This is your new Password $pass";
    $mail->AltBody = 'Please Activate you account using this URL.';

    $mail->send();
    $smsg= 'Message has been sent';
} catch (Exception $e) {
    $fmsg= 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
}
            header('location: login.php');
      }else{
        echo "failed to updated password";
      }
      
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
  <title>Hello Arab Tourism</title>
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
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">
                          <img src="../img/logo.png"><br>
Reset Password</div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>Forgot your password?</h4>
          <p>Enter your email address for reset your password.</p>
        </div>
        <form method="post">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email">
          </div>
          <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="login.html">Login Page</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
