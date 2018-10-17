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


/*gettcatpro function (display product according to tour  category)*/
 function gettcatpro(){
     global $connection;
     if(isset($_GET['t_cat'])){
         $cat_t_id = $_GET['t_cat'];
         $get_t_cat = "select * from tour_categories where cat_t_id ='$cat_t_id'";
         $run_t_cat = mysqli_query($connection, $get_t_cat);
         $row_t_cat = mysqli_fetch_array($run_t_cat);
         $cat_t_title = $row_t_cat['cat_t_title'];
         $cat_t_desc= $row_t_cat['cat_t_desc'];
         $get_tours = "select * from packages where cat_t_id = '$cat_t_id'";
         $run_tours = mysqli_query($connection, $get_tours);
         $count = mysqli_num_rows($run_tours);
         if($count == 0){
             echo "
             <div class='box'>
             <h1>Coming Soon...</h1>
             </div>
             ";
         }else{
             
             echo "
             
             <div class='box'>
             <h1>$cat_t_title</h1>
             <p>$cat_t_desc</p>
             
             </div>
             
             
             ";
             
         }
          while($row_products = mysqli_fetch_array($run_tours)){
                            
                                $pid = $row_products['pid'];
                                $p_title = $row_products['package_title'];
                                $p_price = $row_products['package_price'];
                                $p_img1 = $row_products['img1'];
                                echo "
                                <div class='col-md-4 col-sm-6 center-responsive'>
                                <div class='product'>
                                <a href='details.php?pid=$pid'>
                                <img src='admin_area/packages/package_images/$p_img1' class='img-responsive'>
                                </a>
                                <div class='text'>
                                <h3><a href='details.php?pro_id=$pid'>$p_title</a></h3>
                                <p class='price'>$ $p_price</p>
                                <p class='buttons'>
                                <a href='details.php?pid=$pid' class='btn btn-default'>View Details</a>
                                <a href='details.php?pid=$pid' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add To Cart</a>
                                </p>
                                </div>
                                </div>
                                
                                </div>
                                
                                
                                ";

                            }
         
     }
 }


/*getcatpro function (product list according to days*/

function getcatpro(){
    global $connection;
    if(isset($_GET['cat'])){
      $cat_id = $_GET['cat'];
        $get_cat = "select * from categories where cat_id = $cat_id";
        $run_cat = mysqli_query($connection, $get_cat);
        $row_cat = mysqli_fetch_array($run_cat);
        $cat_title = $row_cat['cat_title'];
        $cat_desc = $row_cat['cat_desc'];
        $get_products = "select * from packages where cat_id ='$cat_id'";
        $run_products = mysqli_query($connection, $get_products);
        $count = mysqli_num_rows($run_products);
        if($count == 0){
            echo "
            <div class='box'>
            <h1> Coming Soon...</h1>
            </div>
            
            ";
        }else{
            echo "
            
            <div class='box'>
            <h1>$cat_title</h1>
            <p>$cat_desc</p>
            </div>
            
            ";
            
            
        }
          while($row_products = mysqli_fetch_array($run_products)){
                            
                                $pid = $row_products['pid'];
                                $p_title = $row_products['package_title'];
                                $p_price = $row_products['package_price'];
                                $p_img1 = $row_products['img1'];
                                echo "
                                <div class='col-md-4 col-sm-6 center-responsive'>
                                <div class='product'>
                                <a href='details.php?pid=$pid'>
                                <img src='admin_area/packages/package_images/$p_img1' class='img-responsive'>
                                </a>
                                <div class='text'>
                                <h3><a href='details.php?pro_id=$pid'>$p_title</a></h3>
                                <p class='price'>$ $p_price</p>
                                <p class='buttons'>
                                <a href='details.php?pid=$pid' class='btn btn-default'>View Details</a>
                                <a href='details.php?pid=$pid' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add To Cart</a>
                                </p>
                                </div>
                                </div>
                                
                                </div>
                                
                                
                                ";

                            }
    }
 
}



function add_cart(){
    
}

?>