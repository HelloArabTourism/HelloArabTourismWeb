<?php
include('../includes/db.php');
include('../includes/requireWeb.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Insert Products</title>
   <!-- Bootstrap core CSS-->
     <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
       <div class="row"><!--row-->
           <div class="col-lg-12"><!--col-lg-12-->
               <ol class="breadcrumb"><!--breadcrumb-->
                   <li class="active"><i class="fa fa-dashboard"></i> Dashboard / Upload Package</li>
               </ol><!--breadcrumb end-->
           </div><!--col-lg-12 end-->
       </div><!--row end-->
       <div class="row"><!--row 2-->
           <div class="col-lg-12"><!--col-lg-12-->
               <div class="panel panel-default"><!--panel panel-default-->
                   <div class="panel-heading"><!--panel-heading-->
                       <h3 class="panel-title">
                           <i class="fa fa-money fa-fw"></i> Upload Package
                       </h3>
                   </div><!--panel-heading end-->
                   <div class="panel-body"><!--panel-body-->
                       <form class="form-horizontal" method="post" enctype="multipart/form-data"><!--form-horizontal-->
                           <div class="form-group"><!--form-group-->
                               <label  class="col-md-3 control-label"> Package Title </label>
                               <div class="col-md-6">
                                   <input type="text" name="package_title" class="form-control" required>
                               </div>
                           </div><!--form-group end-->
                           
                           <div class="form-group"><!--form-group-->
                               <label  class="col-md-3 control-label"> Tour Category </label>
                               <div class="col-md-6">
                                   <select name="t_cat" class="form-control">
                                       <option>Select a Tour Category</option>
                                       <?php
                                      $get_t_cats= "select * from tour_categories";
$run_t_cats = mysqli_query($connection, $get_t_cats);
while($row_t_cats = mysqli_fetch_array($run_t_cats)){
    $cat_t_id = $row_t_cats['cat_t_id'];
    $cat_t_title = $row_t_cats['cat_t_title'];
                                           echo"
                                           <option value='$cat_t_id'>$cat_t_title</option>
                                           ";/*value associate with id */
                                       }
                                       ?>
                                   </select>
                               </div>
                           </div><!--form-group end-->
                           <div class="form-group"><!--form-group-->
                               <label  class="col-md-3 control-label"> Number of Days </label>
                               <div class="col-md-6">
                                   <select name="cat" class="form-control">
                                       <option>Select Days</option>
                                       <?php
                                       $get_cats = "select * from categories";
    $run_cats = mysqli_query($connection, $get_cats);
    while($row_cats = mysqli_fetch_array($run_cats)){
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];
                                           echo"
                                           <option value='$cat_id'>$cat_title</option>
                                           
                                           ";
                                       }
                                       
                                       
                                       ?>
                                   </select>
                               </div>
                           </div><!--form-group end-->
                           
                             <div class="form-group"><!--form-group-->
                               <label  class="col-md-3 control-label"> Start Date </label>
                               <div class="col-md-6">
                                   <input type="date" name="start_date" class="form-control" required>
                               </div>
                               
                           </div><!--form-group end-->
                             <div class="form-group"><!--form-group-->
                               <label  class="col-md-3 control-label"> End Date </label>
                               <div class="col-md-6">
                                   <input type="date" name="end_date" class="form-control" required>
                               </div>
                           </div><!--form-group end-->
                           <div class="form-group"><!--form-group-->
                               <label  class="col-md-3 control-label"> Image 1 </label>
                               <div class="col-md-6">
                                   <input type="file" name="package_img1" class="form-control" required>
                               </div>
                           </div><!--form-group end-->
                           <div class="form-group"><!--form-group-->
                               <label  class="col-md-3 control-label"> Image 2 </label>
                               <div class="col-md-6">
                                   <input type="file" name="package_img2" class="form-control" required>
                               </div>
                           </div><!--form-group end-->
                           <div class="form-group"><!--form-group-->
                               <label  class="col-md-3 control-label"> Image 3 </label>
                               <div class="col-md-6">
                                   <input type="file" name="package_img3" class="form-control" required>
                               </div>
                           </div><!--form-group end-->
                           <div class="form-group"><!--form-group-->
                               <label  class="col-md-3 control-label"> Package Price </label>
                               <div class="col-md-6">
                                   <input type="text" name="package_price" class="form-control" required>
                               </div>
                           </div><!--form-group end-->
                           <div class="form-group"><!--form-group-->
                               <label  class="col-md-3 control-label"> package Keywords </label>
                               <div class="col-md-6">
                                   <input type="text" name="package_keywords" class="form-control" required>
                               </div>
                           </div><!--form-group end-->
                           <div class="form-group"><!--form-group-->
                               <label  class="col-md-3 control-label"> Package Description </label>
                               <div class="col-md-6">
                                   <textarea name="package_desc" class="form-control" rows="6" cols="19"></textarea>
                               </div>
                           </div><!--form-group end-->
                           <div class="form-group"><!--form-group-->
                               <label class="col-md-3 control-label"></label>
                               <div class="col-md-6">
                                   <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control" required>
                               </div>
                           </div><!--form-group end-->
                       </form><!--form-horizontal-->
                       
                   </div><!--panel-body end-->
                   
                   
               </div><!--panel panel-default end-->
           </div><!--col-lg-12 end-->
       </div><!--row 2 end-->
        
          <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>


<?php
if(isset($_POST['submit'])){
    $package_title = mysqli_real_escape_string($connection, $_POST['package_title']);
    $t_cat = mysqli_real_escape_string($connection, $_POST['t_cat']);
    $cat = mysqli_real_escape_string($connection, $_POST['cat']);
    $start_date = mysqli_real_escape_string($connection, $_POST['start_date']);
    $d1 = date('Y-m-d',strtotime($start_date));
    $end_date = mysqli_real_escape_string($connection, $_POST['end_date']);
    $d2 = date('Y-m-d',strtotime($end_date));
    $package_price = mysqli_real_escape_string($connection, $_POST['package_price']);
    $package_keywords = mysqli_real_escape_string($connection, $_POST['package_keywords']);
    $package_desc = mysqli_real_escape_string($connection, $_POST['package_desc']);
 $package_img1 = $_FILES['package_img1']['name'];
$package_img2 = $_FILES['package_img2']['name'];
$package_img3 = $_FILES['package_img3']['name'];

$temp_name1 = $_FILES['package_img1']['tmp_name'];
$temp_name2 = $_FILES['package_img2']['tmp_name'];
$temp_name3 = $_FILES['package_img3']['tmp_name'];

move_uploaded_file($temp_name1,"package_images/$package_img1");
move_uploaded_file($temp_name2,"package_images/$package_img2");
move_uploaded_file($temp_name3,"package_images/$package_img3");

    $insert_package = "insert into packages(cat_id, cat_t_id, start_date, end_date, package_title, img1, img2, img3, package_price, package_desc, package_keywords) values ('$cat', '$t_cat', '$d1', '$d2', '$package_title', '$package_img1', '$package_img2', '$package_img3', '$package_price','$package_desc', '$package_keywords' )";
    $run_package = mysqli_query($connection, $insert_package);
    if($run_package){
        echo "<script>alert('Package has been inserted successfully')</script>";
        echo "<script>window.open('insert_packages.php','_self')</script>";
    }
    
}



?>











