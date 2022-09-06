<?php
$db = new mysqli("localhost","root","","wdpf_exam1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .color{
            color:green;
        }
    </style>
</head>
<body>
    <h1>Delete from the Manufacture table</h1>
    <?php
 if(isset($_POST['submit'])){
    $deletid = $_POST['delet_menefid'];
    $sql = "DELETE FROM manufacturer WHERE manufac_id = '$deletid'";
    $db->query($sql);
    if($db->affected_rows>0){
  echo "<h4 class = 'color'>Delete Product</h4>";
    }
    else {
        echo "<h4 class = 'color'>No delete</h4>";
    }
 }
    ?>
    <form action="" method="post">
        <select name="delet_menefid">
            <option value="disable" selected>Selected One</option>
            <?php
          $sql = "SELECT * FROM manufacturer";
          $result = $db->query($sql);
          while($row = $result->fetch_assoc()){
            echo "<br>";
          
            ?>
<option value=" <?php echo $row['manufac_id']; ?> "><?php  echo $row['manufac_name'];?></option>
<?php

}
?>
        </select>
        <input type="submit" name = "submit" value ="delete">
    </form>
</body>
</html>