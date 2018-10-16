<?php
session_start();
include('../includes/db.php');
if(isset($_SESSION['email']) & !empty($_SESSION['email'])){
$input = filter_input_array(INPUT_POST);

$about_us = mysqli_real_escape_string($connection, $input["about_us"]);
$our_mission = mysqli_real_escape_string($connection, $input["our_mission"]);
$why_us= mysqli_real_escape_string($connection, $input["why_us"]);
if($input["action"] === 'edit')
{
 $query = "
 UPDATE about_us 
 SET about_us = '".$about_us."', 
 our_mission = '".$our_mission."',
 why_us = '".$why_us."'
 WHERE about_id = '".$input["id"]."'
 ";

 mysqli_query($connection, $query);

}

echo json_encode($input);


    
    }else{
    header('location: ../login.php');
}

?>