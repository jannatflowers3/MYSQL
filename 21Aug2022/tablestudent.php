<?php
 $db = new mysqli('localhost','root','','wdpf51');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    
<div class="container">
    <a href="students.php"> new entry</a>
    <br>
  
    <a href="tablestudent.php">view student list</a>

<?php

$sql = "SELECT * FROM students";
$result = $db->query($sql);
$data = $result->fetch_object();

echo "<table border='1'>
<tr>
<th>ID  </th>
<th>NAME </th>
<th>email  </th>
<th>phone </th>
<th>action </th>

</tr>";
while($data = $result->fetch_object()){
echo "<tr>";
    echo "<td>  $data->student_id</td>";
    echo "<td>  $data->student_name</td>";
    echo "<td>  $data->student_email</td>";
    echo "<td>  $data->student_phone</td>";?>

    <td>
         <a href="delet.php?id=<?php echo $data->student_id?>" onclick= "return confirm('Are you sure ')"><img src='bin.jpg ' width='20px'></a>

         <a href="students_edit.php?id=<?php echo $data->student_id?>">
         <img src='edit.jpg ' width='20px'></a>

</td>

   
<?php
echo "</tr>";
}
echo "</table>";
?>
 
</div>
</body>
</html>