<?php
 $db = new mysqli('localhost','root','','wdpf51');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
<div class="container">
    <a href="students.php"> new entry</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col"> Student Id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Email</th>
      <th scope="col">phpne</th>
    </tr>
  </thead>
<?php
// $sql = "SELECT * FROM students";

// preocedure diye o kora jai

// $sql ="CALL Getstudents()";
$result = $db->query($sql);
// $data = $result->fetch_object();
while($data = $result->fetch_object()){

  // echo "ID :" .$data->student_id;
    echo "<br>";

?>
  <tr>
  <td><?php echo  $data->student_id;?></td>
    <td><?php echo $data->student_name;?></td>
    <td><?php echo $data->student_email;?></td>
    <td><?php echo $data->student_phone;?></td>


   
 
   
  </tr>
  <?php }   ?>
  </tbody>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>