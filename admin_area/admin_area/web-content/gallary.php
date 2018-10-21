<?php
include('../includes/db.php');
include('../includes/requireWeb.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Upload Gallary Images</title>
   <!-- Bootstrap core CSS-->
     <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
       <div class="row"><!--row-->
           <div class="col-lg-12"><!--col-lg-12-->
               <ol class="breadcrumb"><!--breadcrumb-->
                   <li class="active"><i class="fa fa-dashboard"></i> Dashboard / Upload Gallary Image</li>
               </ol><!--breadcrumb end-->
           </div><!--col-lg-12 end-->
       </div><!--row end-->
       <div class="row"><!--row 2-->
           <div class="col-lg-12"><!--col-lg-12-->
               <div class="panel panel-default"><!--panel panel-default-->
                   <div class="panel-heading"><!--panel-heading-->
                       <h3 class="panel-title">
                           <i class="fa fa-camera fa-fw"></i> Upload Gallary Images
                       </h3>
                   </div><!--panel-heading end-->
                   <div class="panel-body"><!--panel-body-->
                       <form class="form-horizontal" method="post" enctype="multipart/form-data"><!--form-horizontal-->

                           <div class="form-group"><!--form-group-->
                               <label  class="col-md-3 control-label"> Select Image Files to Upload on Gallary: </label>
                               <div class="col-md-6">
                                    <input type="file" name="files[]" multiple >
                               </div>
                           </div><!--form-group end-->
                           <div class="form-group"><!--form-group-->
                               <label class="col-md-3 control-label"></label>
                               <div class="col-md-6">
                                   <input type="submit" name="submit" value="Upload Photos" class="btn btn-primary form-control" required>
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


