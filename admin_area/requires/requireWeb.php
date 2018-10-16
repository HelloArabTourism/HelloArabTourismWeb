<?php
include('db.php');
/*Contact section*/

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
/*About Section Query*/
 $aboutSql = "SELECT * from `about_us`";
    $aboutRes= mysqli_query($connection, $aboutSql);
    $aboutR = mysqli_fetch_assoc($aboutRes);
$aboutUs =$aboutR['about_us'];
$ourMission = $aboutR['our_mission'];
$whyUs = $aboutR['why_us'];

/*Get Tour Categories*/
function getTCat(){
global $connection;
$get_t_cats= "select * from tour_categories";
$run_t_cats = mysqli_query($connection, $get_t_cats);
while($row_t_cats = mysqli_fetch_array($run_t_cats)){
    $cat_t_id = $row_t_cats['cat_t_id'];
    $cat_t_title = $row_t_cats['cat_t_title'];
    $cat_t_desc = $row_t_cats['cat_t_desc'];
    echo "
    <li><a href='packages.php?t_cat=$cat_t_id'>$cat_t_title</a></li>
    
    ";
}

}

/*Get Days Categories */

function getCat(){
    global $connection;
    $get_cats = "select * from categories";
    $run_cats = mysqli_query($connection, $get_cats);
    while($row_cats = mysqli_fetch_array($run_cats)){
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];
        $cat_desc = $row_cats['cat_desc'];
        echo "
        <li><a href ='packages.php?cat=$cat_id'>$cat_title</a></li>
        
        ";  
        
    }
}

/*get product*/


?>