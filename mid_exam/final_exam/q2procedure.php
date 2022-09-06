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
            color:red;
        }
    </style>
</head>
<body>
    <h1>Insert data into Manufacture table</h1>
    
    <form action="" method="post">
     Manufacture Name : <input type="text" name ="manufac_name" placeholder = "enter your  name"><br><br>
     Manufacture Address :<input type="text" name ="manufac_address" placeholder = "enter your address"><br><br>
     Manufacture Contact : <input type="text" name = "manufac_contact" placeholder = "enter your contact number"><br><br>

        <input type="submit" name = "submit" value="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
      extract($_POST);
      $sql = "CALL manufactureid_table_proce('$manufac_name','$manufac_address','$manufac_contact')";
     $db->query($sql);
      if($db->affected_rows>0){
        echo " <h4 class = 'color'>added manufacture product</h4>";
      }
      else{
        echo "<h4 class = 'color'>no added manufacture product</h4>";
      }
    }

    ?>
    <?php
    if(isset($_POST['submit'])){
        extract($_POST);
        $sql = "CALL "
    }
    ?>
</body>
</html>