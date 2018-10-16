<?php
session_start();
include('../includes/db.php');
if(isset($_SESSION['email']) & !empty($_SESSION['email'])){
$input = filter_input_array(INPUT_POST);

$phone = mysqli_real_escape_string($connection, $input["phone"]);
$email = mysqli_real_escape_string($connection, $input["email"]);
$web= mysqli_real_escape_string($connection, $input["web"]);
$location= mysqli_real_escape_string($connection, $input["location"]);
$mapURL= mysqli_real_escape_string($connection, $input["mapURL"]);
$fbURL= mysqli_real_escape_string($connection, $input["fbURL"]);
$twURL= mysqli_real_escape_string($connection, $input["twURL"]);
$snpURL= mysqli_real_escape_string($connection, $input["snpURL"]);
$instaURL= mysqli_real_escape_string($connection, $input["instaURL"]);
$linkURL= mysqli_real_escape_string($connection, $input["linkURL"]);
$waURL= mysqli_real_escape_string($connection, $input["waURL"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE contact 
 SET phone = '".$phone."', 
 email = '".$email."',
 web = '".$web."',
 location = '".$location."',
 mapURL = '".$mapURL."',
 fbURL = '".$fbURL."',
 twURL = '".$twURL."',
 snpURL = '".$snpURL."',
 instaURL = '".$instaURL."',
 linkURL = '".$linkURL."',
 waURL = '".$waURL."'
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connection, $query);

}

echo json_encode($input);


    
    }else{
    header('location: ../login.php');
}

?>
