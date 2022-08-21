<?php
include_once("dbconfigaration.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <table class="table  table_striped">
            <tr>
                <th>employeeNumber</th>
                <th>firstName</th>
                <th>lastName</th>
                <th>email</th>
            
            </tr>
         <?php
   $sql =  "SELECT * FROM employees";
   $result = $db->query($sql);
   $data =  $result->fetch_assoc();  
   while($data = $result->fetch_assoc()){
    
     
     
     echo "<br>";
    

         ?>
            <tr>
                <!-- aivabe o kora jai -->
                <!-- <td><?php   echo $data['employeeNumber']." " ;?></td>
                <td><?php   echo $data['firstName']." " ;?></td>
                <td><?php  echo $data['lastName'];?></td>
                <td><?php   echo $data['email']." " ;?></td> -->

<!-- short circut kore o kora jabe  -->
                <td><?= $data['employeeNumber']." " ;?></td>
                <td><?= $data['firstName']." " ;?></td>
                <td><?= $data['lastName'];?></td>
                <td><?= $data['email']." " ;?></td>

            </tr>
<?php }?>
        </table>
    </div>



    <?php
//    $sql =  "SELECT * FROM employees";
//    $result = $db->query($sql);
//    echo "<pre>";
//    print_r($result);
//   $data =  $result->fetch_array();  //remuric array associaton vabe hobe
 

//   echo "<pre>";
//   print_r($data);
    ?>

</body>
</html>