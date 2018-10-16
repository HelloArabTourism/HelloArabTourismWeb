<?php
require_once('connect.php');
    $email = mysqli_real_escape_string($connection, $_POST['email']);
$sqlemail = "SELECT * FROM users WHERE email = '$email'";
        $resemail = mysqli_query($connection, $sqlemail);
        $count = mysqli_num_rows($resemail);
        if($count == 1){
            echo "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>User exist in database. Please reset your password "."<a href='forgot-password.php' target=_blank>Click Here</a>"."<br>";
        }

?>