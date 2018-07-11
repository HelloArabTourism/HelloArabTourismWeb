<?php
            // Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require_once('connect.php');
include('config.php');
if(isset($_POST) & !empty($_POST)){
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $verification_key = md5($email);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    if($password == $cpassword){
        $fmsg="";
        $sqlemail = "SELECT * FROM users WHERE email = '$email'";
        $resemail = mysqli_query($connection, $sqlemail);
        $count = mysqli_num_rows($resemail);
        if($count == 1){
            $fmsg .= "Email exisit in database. Please reset your password";
        }
        
        
        $sql = "INSERT INTO `users`(`fname`, `lname`, `email`, `password`, `verification_key`) VALUES ('$fname','$lname','$email','$password', '$verification_key')";
        $result = mysqli_query($connection, $sql);
        if($result){
           $smsg = "User Registared Successfully";
            $id = mysqli_insert_id($connection);
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
    $mail->setFrom('accounts@helloarabtourism.com', 'Hello Arab Tourism');
    $mail->addAddress($email, 'Hello Arab Tourism');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Verify your account(Hello Arab Tourism)';
    $mail->Body    = "Please Activate you account using this URL.</b> http://localhost/HelloArab/HelloArabDash/verify.php?key=$verification_key&id=$id";
    $mail->AltBody = 'Please Activate you account using this URL.';

    $mail->send();
    $smsg= 'Message has been sent';
} catch (Exception $e) {
    $fmsg= 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
}
        }else{
            $fmsg .= " User Registration Failed";
             }
    }else{
        $fmsg .= " Password not match.";
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
  <title>Hello Arab Dashboard</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <!--Check user-->
    <script type="text/javascript">
	$(document).ready(function() {
		$('#emailLoading').hide();
		$('#exampleInputEmail1').keyup(function(){
		  $('#emailLoading').show();
	      $.post("check.php", {
	        email: $('#exampleInputEmail1').val()
	      }, function(response){
	        $('#emailResult').fadeOut();
	        setTimeout("finishAjax('emailResult', '"+escape(response)+"')", 400);
	      });
	    	return false;
		});
	});
 
	function finishAjax(id, response) {
	  $('#emailLoading').hide();
	  $('#'+id).html(unescape(response));
	  $('#'+id).fadeIn();
	} //finishAjax
</script>
</head>

<body>
  <div class="container">
   <?php if(isset($smsg)){?><div class="alert alert-success" role="alert">
   <?php echo $smsg; ?>
</div><?php } ?>
<?php if(isset($fmsg)){?><div class="alert alert-danger" role="alert">
   <?php echo $fmsg; ?>
</div><?php } ?>
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">
      <img src="../img/logo.png"><br>
      Register an Account</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" id="exampleInputName" name="fname" type="text" aria-describedby="nameHelp" placeholder="Enter first name" value="<?php
                if(isset($_POST) & !empty($_POST)){echo $fname;}?>" required autofocus>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="exampleInputLastName" name="lname" type="text" aria-describedby="nameHelp" placeholder="Enter last name" value="<?php
                if(isset($_POST) & !empty($_POST)){echo $lname;}?>" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
              
            <input class="form-control" id="exampleInputEmail1" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php
                if(isset($_POST) & !empty($_POST)){echo $email;}?>" required>
              <span id="emailLoading"><img src="../img/loading.gif" alt="Ajax Indicator" /></span>
          </div>
            <span id="emailResult"></span>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="exampleConfirmPassword" name="cpassword" type="password" placeholder="Confirm password">
              </div>
            </div>
            <!--<lable align="right">Image:</lable>  <br>                          
                            <input type="file" name="image" id="profile-img" required/><br>
                                    <img src="" id="profile-img-tag" width="100px" />

                                    <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                
                                                reader.onload = function (e) {
                                                    $('#profile-img-tag').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#profile-img").change(function(){
                                            readURL(this);
                                        });
                                    </script><br>-->
          </div>
          <button class="btn btn-primary btn-block" type="submit">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
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
