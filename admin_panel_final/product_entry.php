

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
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
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
    <?php 
             
             if(isset($_POST['submit'])){
               include_once("includes/db_confiq.php");
               extract($_POST);
               $sql = "INSERT INTO product VALUES(NULL,'$pname','$pdetails','$pprice','$pthumb','$manufacture')";
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
                    <label for="pname">Product Name</label>
                    <input type="text" class="form-control" id="pname" name = "pname" placeholder="Enter your name">
                  </div>
                  <div class="form-group">

                    <label for="pdetails">Product Details</label><br>
                    <textarea name="pdetails" id="pdetails" class="form-group  textarea"rows="10" cols="40"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="pprice">Product Price</label>
                    <input type="text" class="form-control" id="pprice" name = "pprice" placeholder="Enter your product price">
                  </div>
             

                    <!-- <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div> -->
                  <div class="form-group">
                    <label for="pthumb">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="pthumb" name ="pthumb">
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
                              <select class="form-control" name = "manufacture">
                        <option selected disable value=""> Selected</option>
                        <?php
                                while($row = $result->fetch_assoc()){

                               
                        ?>
                          <option value="<?php  echo $row['m_id'];?>">
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
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>
</html>
