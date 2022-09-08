
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
 <?php include ("includes/top_bar.php");
?>

  <!-- Main Sidebar Container -->
  
    <!-- Sidebar -->
    <?php 
      include ("includes/left_sidebar.php");
  ?>
    <!-- /.sidebar -->
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-center">Product ENTRY</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Entry</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">  
        <!-- Main row -->
        <div class="row justify-content-center">
          <!-- Left col -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" class="breadcrumb-item active">Edit Product</h3>
                
              </div>
              <!-- /.card-header -->
              <?php

include_once("includes/db_confiq.php");
$edit_id = $_GET['edid'];

if(isset($_POST['submit'])){
  extract($_POST);
  $sql = "UPDATE product SET  pname ='$Epname',pdetails = '$pdetails',pprice= '$pprice', pthumb='$pthumb' ,manuf_id = '$manufacture' WHERE pid ='$edit_id'";
$db->query($sql);
if($db->affected_rows>0){
  echo "update successfully";
}
}


$sql = " SELECT * FROM  product WHERE pid = '$edit_id'";
$result = $db->query($sql);
$data = $result->fetch_assoc();
$mid = $data['manuf_id'];
?>
     
              <!-- form start -->
              <form role="form" method= "post">
                <div class="card-body">
              
                  <div class="form-group">
                    <label for="Epname">Product Name</label>
                    <input type="text" class="form-control" id="Epname" name = "Epname" value = "<?php echo $data['pname'];?>" placeholder="Enter your name">
                  </div>
                  <div class="form-group">
                    <label for="pdetails">Product Details</label><br>
                    <textarea name="pdetails" id="pdetails" class="form-group"rows="10" cols="40"><?php echo $data['pdetails'];?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="pprice">Product Price</label>
                    <input type="text" class="form-control" id="pprice" name = "pprice" value = "<?php echo $data['pprice'];?>" placeholder="Enter your product price">
                  </div>
             
                  <div class="form-group">
                    <label for="pthumb">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="pthumb" name ="pthumb" value = "<?php echo $data['pthumb'];?>">
                        <label class="custom-file-label" for="pthumb">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="" >Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <?php
                  include_once("includes/db_confiq.php");
             $sql = "SELECT * FROM manufacture";
             $result = $db->query($sql);
                ?>
                        <label>Manufacture</label>
                              <select class="form-control" name = "manufacture" value = "<?php echo $data['manuf_id'];?>">
                        <option selected disable value=""> Selected</option>
                        <?php
                                while($row = $result->fetch_assoc()){

                               
                        ?>
                          <option value="<?php  echo $row['m_id'];?>"   <?php if($mid==$data['m_id']) {echo "selected";}?>   >
                         
                           <?php  echo $row['m_name'];?> 
                          </option>
                         
                          <?php
  }
                          ?>
                        </select>
                      </div>
   
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
                </div>


                
              </form>
            </div>
            <!-- /.card -->

         
            </div>
            <!-- /.card -->
      
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark">
   Control sidebar content goes here -->
  <!-- </aside> --> 
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<?php
include("includes/footer.php");
?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
