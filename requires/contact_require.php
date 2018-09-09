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
?>