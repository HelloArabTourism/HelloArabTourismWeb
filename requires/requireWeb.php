<?php
require_once('connect.php');
 $contactsql = "SELECT * from `contact`";
    $res= mysqli_query($connection, $contactsql);
    $r = mysqli_fetch_assoc($res);
$phone = $r['phone'];
$email = $r['email'];
$web = $r['web'];
$location = $r['location'];
$mapURL = $r['mapURL'];
$fbURL = $r['fbURL'];
$twURL = $r['twURL'];
$snpURL = $r['snpURL'];
$instaURL = $r['instaURL'];
$linkURL = $r['linkURL'];
$waURL = $r['waURL'];

 $aboutSql = "SELECT * from `about_us`";
    $aboutRes= mysqli_query($connection, $aboutSql);
    $aboutR = mysqli_fetch_assoc($aboutRes);
$aboutUs =$aboutR['about_us'];
$ourMission = $aboutR['our_mission'];
$whyUs = $aboutR['why_us'];
?>