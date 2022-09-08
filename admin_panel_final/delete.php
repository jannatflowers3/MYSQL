<?php
  include_once("includes/db_confiq.php");
  $deleteid = $_GET['deid'];
  $sql  = "DELETE FROM product where 	pid = '$deleteid'";
  $db->query($sql);

  if($db->affected_rows>0){
    header("Location:products.php");
  }

?>