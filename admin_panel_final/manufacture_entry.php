

<?php
session_start();
if(!isset($_SESSION['email'])){
  header("Location:index.php");
}
?>
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
            <h1 class="m-0 text-dark text-center">Manufacturer ENTRY</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manufacturer</a></li>
              <li class="breadcrumb-item active">Manufacturer Entry</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php 
             
             if(isset($_POST['submit'])){
               include_once("includes/db_confiq.php");
               extract($_POST);
               $sql = "INSERT INTO manufacture VALUES(NULL,'$m_name','$m_address','$m_contact')";
               // $db->query($sql);
               echo $db->query($sql);
               if($db->affected_rows>0){
                     echo "<div class='alert alert-success'>Product Added successfully</div>";
               }
               else {
                echo "no inserted";
               }
             }
               ?>
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
                <h3 class="card-title" class="breadcrumb-item active">New Product Entry</h3>
                
              </div>
              <!-- /.card-header -->

     
              <!-- form start -->
              <form role="form" method= "post">
                <div class="card-body">
              
                  <div class="form-group">
                    <label for="m_name">Manufacturer Name</label>
                    <input type="text" class="form-control" id="m_name" name = "m_name" placeholder="Enter your name">
                  </div>
                  <div class="form-group">
                    <label for="m_address">Manufacturer Address</label><br>
                    <textarea name="m_address" id="m_address" class="form-group"rows="10" cols="40"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="m_contact">Manufacturer Contact</label>
                    <input type="text" class="form-control" id="m_contact" name = "m_contact" placeholder="Enter your product price">
                  </div>
             


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
