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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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
            <h1 class="m-0 text-dark">Manufacture table</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
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
        <div class="row">
          <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Alll Product</h3>
              <div class="text-right">
                <a href="product_entry.php" class = "btn btn-pimary">New Manufacturer</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <tr>
                  <thead>
                  <th>ID</th>
                  <th>Manufacturer Name</th>
                  <th>Manufacturr Address</th>    
                  <th>Contact</th>
                </tr>
                </thead>
                <tbody>
              <?php 
                 include_once("includes/db_confiq.php");
                 $sql = "SELECT * FROM manufacture";
                  $result = $db->query($sql);
              ?>    
                <?php while($row= $result->fetch_assoc()){ ?>
                <tr>
                  <td><?php echo $row['m_id']; ?></td>
                  <td><?php echo $row['m_name']; ?></td>
                  <td><?php echo $row['m_address']; ?></td>
                  <td><?php echo $row['m_contact']; ?></td>
                
                  <td>   <a href="product_edit.php?edid= <?php echo $row['pid'];?>"> <i class = "fa fa-edit"></i></a> 
                
                  <a href="delete.php?deid= <?php echo $row['pid'];?>"  onclick = "return confirm('are you sure delete this')"> <i class = "fa fa-trash"></i></a>
                </td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <th>ID</th>
                  <th>Manufacturer Name</th>
                  <th>Manufacturr Address</th>    
                  <th>Contact</th>
                </tr>
                </tr>
                </tfoot>
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>


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

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
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
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
